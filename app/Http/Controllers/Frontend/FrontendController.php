<?php

namespace App\Http\Controllers\Frontend;

use Storage;
use App\Models\Faq;
use App\Models\About;
use App\Models\Order;
use App\Traits\HasMeta;
use App\Models\Customer;
use App\Models\Faqimage;
use App\Models\OrderItem;
use App\Models\Personnel;
use App\Models\Product\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\Contact\Contact;
use App\Models\Product\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Category\Category;
use App\Traits\HasDefaultProduct;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Library\SslCommerz\SslCommerzNotification;

class FrontendController extends Controller
{
    use HasMeta;
    use HasDefaultProduct;
    /**
     * Retrieves a single default product object to prevent "Undefined variable $product"
     * errors in the shared layout/footer when accessing generic pages.
     * @return \App\Models\Product\Product|null
     */
    protected function getDefaultProduct()
    {
        return Product::inRandomOrder()->first();
    }

    /**
     * Display the main index/homepage.
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::get();
        $products = Product::with('images')->get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $metaTitle = "Welcome to Our Shop";
        $metaDescription = "Browse our products and categories to find the best deals.";
        
        $product = $this->getDefaultProduct();

        return view('welcome',compact('products','categories', 'product', 'contacts', 'metaTitle', 'metaDescription'));
    }

    /**
     * Display the wishlist page.
     * @return \Illuminate\View\View
     */
    public function wishlist()
    {
        $categories = Category::get();
        $products = Product::with('images')->get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $metaTitle = "Wishlist";
        
        $product = $this->getDefaultProduct();

        return view('frontend.wishlist_index', compact('categories', 'products', 'product', 'contacts','metaTitle'));
    }

    /**
     * Display the shopping cart page.
     * @return \Illuminate\View\View
     */
    public function shoppingCart()
    {
        $categories = Category::get();
        $products = Product::with('images')->get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $metaTitle = "Shopping Cart";
        
        $product = $this->getDefaultProduct();

        return view('frontend.shopping_cart_index', compact('categories', 'products', 'product', 'contacts','metaTitle'));
    }
    
    /**
     * Display the checkout page.
     * @return \Illuminate\View\View
     */
    public function checkout()
    {
        $categories = Category::get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $product = $this->getDefaultProduct();
        $metaTitle = "Chechout Order";

        return view('frontend.checkout_index', compact('categories', 'product', 'contacts','metaTitle'));
    }

    public function checkoutOrder(Request $request)
    {
        $categories = Category::get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $product = $this->getDefaultProduct();

        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'street_address' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'postcode' => 'required|string',
        ]);

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }

        $totalAmount = collect($cart)->sum(function($item) {
            $priceAfterDiscount = $item['price'] - ($item['discount'] ?? 0);
            return $priceAfterDiscount * $item['quantity'];
        });

        $customer = Customer::firstOrCreate(
            ['email' => $request->email],
            [
                'fname' => $request->fname,
                'lname' => $request->lname,
                'phone' => $request->phone,
                'company_name' => $request->company_name ?? null,
                'street_address' => $request->street_address,
                'country' => $request->country,
                'state' => $request->state,
                'postcode' => $request->postcode,
                'note' => $request->note ?? null,
                'profile_image'  => $request->profile_image ?? null,
                'password'       => $request->password ?? null
            ]
        );

        $transactionId = uniqid();

        $order = Order::create([
            'customer_id' => $customer->id,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name ?? null,
            'street_address' => $request->street_address,
            'country' => $request->country,
            'state' => $request->state,
            'postcode' => $request->postcode,
            'note' => $request->note ?? null,
            'amount' => $totalAmount,
            'currency' => 'BDT',
            'status' => 'Pending',
            'transaction_id' => $transactionId,
            'payment_method' => $request->payment_method,
        ]);

        foreach ($cart as $productId => $item) {
            $finalPrice = $item['price'] - ($item['discount'] ?? 0);
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'product_title' => $item['title'],
                'product_image' => $item['image'] ?? null,
                'price' => $finalPrice,
                'discount' => $item['discount'] ?? 0,
                'quantity' => $item['quantity'],
                'sub_total' => $finalPrice * $item['quantity'],
            ]);
        }

        if ($request->payment_method === 'online_payment') {
            $post_data = [
                'total_amount' => $totalAmount,
                'currency' => 'BDT',
                'tran_id' => $transactionId,
                'cus_name' => $request->fname.' '.$request->lname,
                'cus_email' => $request->email,
                'cus_add1' => $request->street_address,
                'cus_state' => $request->state,
                'cus_postcode' => $request->postcode,
                'cus_country' => $request->country,
                'cus_phone' => $request->phone,
                'shipping_method' => "NO",
                'product_name' => "Multiple Products",
                'product_category' => "Goods",
                'product_profile' => "physical-goods",
            ];

            $sslc = new SslCommerzNotification();
            return $sslc->makePayment($post_data, 'hosted');
        }

        session()->forget('cart');
        $order->load('items');
        return view('frontend.receipt', compact('order', 'categories', 'product', 'contacts'));
    }




    public function downloadReceipt($id)
    {
        $categories = Category::get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $product = $this->getDefaultProduct();

        $order = Order::with('items')->findOrFail($id);

        $pdf = Pdf::loadView('frontend.receipt_pdf', compact('order'));
        return $pdf->download('receipt_' . $order->transaction_id . '.pdf');
    }

    public function receiptShow($tran_id)
    {
        $order = Order::with('items')
            ->where('transaction_id', $tran_id)
            ->firstOrFail();

        $categories = Category::get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $product = $this->getDefaultProduct();

        return view('frontend.receipt', compact(
            'order',
            'categories',
            'product',
            'contacts'
        ));
    }


    public function product(Request $request, $id = null)
    {
        $categories = Category::withCount('products')->get();
        $contacts = Contact::with(['emails', 'numbers'])->get();

        $productcart = $id ? Product::with(['images', 'category'])->findOrFail($id) : null;

        $tags = Tag::all();

        $sort = $request->get('sort', 'latest');

        $categoryId = $request->get('category', 'All');

        $cartItem = $id ? session("cart.$id", null) : null;

        $query = Product::with('images');

        if ($categoryId !== 'All') {
            $query->where('category_id', $categoryId);
        }

        if ($sort === 'latest') {
            $query->orderBy('id', 'DESC');
        } elseif ($sort === 'old') {
            $query->orderBy('id', 'ASC');
        }

        $selectedCategory = null;
        if ($categoryId !== 'All') {
            $selectedCategory = Category::find($categoryId);
        }

        $meta = $selectedCategory
            ? $this->generateMeta($selectedCategory->meta_title ?? $selectedCategory->name, $selectedCategory->meta_description ?? $selectedCategory->description)
            : $this->generateMeta('All Products', 'Browse all products in our store');

        $products = $query->paginate(6)->withQueryString();

        $total = Product::count();

        $product = $this->getDefaultProduct();

        $saleProducts = Product::with('images')
            ->where('dis_price', '>', 0)
            ->orderBy('dis_price', 'DESC')
            ->take(3)
            ->get();

        return view('frontend.product_index', array_merge(compact(
            'categories', 'products', 'product', 'tags', 'productcart', 'total', 'sort', 'saleProducts', 'categoryId', 'selectedCategory', 'cartItem', 'contacts' 
           ), $meta ));
    }

    // Display the customer login page.
    public function customerLogin()
    {
        $categories = Category::get();
        
        $product = $this->getDefaultProduct();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $metaTitle = 'Login';

        return view('frontend.customerLogin', compact('categories', 'product', 'contacts', 'metaTitle'));
    }

    // Display the customer registration page.
    public function customerRegistration()
    {
        $categories = Category::get();
        
        $product = $this->getDefaultProduct();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $metaTitle = 'Create Account';

        return view('frontend.customerRegistration', compact('categories', 'product', 'contacts', 'metaTitle'));
    }

    //Contact Info page.
    public function contactInfo()
    {
        $categories = Category::get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $metaTitle = 'Contact Information';
        
        $product = $this->getDefaultProduct();

        return view('frontend.contact', compact('categories', 'contacts', 'product', 'metaTitle'));
    }

    public function faqs()
    {
        $categories = Category::get();
        $products = Product::with('images')->get();
        $product = $this->getDefaultProduct();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $faqimage = Faqimage::latest()->first();
        $faqs = Faq::get();
        $metaTitle = 'Faqs';

        return view('frontend.faqs', compact('categories', 'products', 'product', 'contacts', 'faqimage', 'faqs', 'metaTitle'));
    }

    public function privacy()
    {
        $categories = Category::get();
        $product = Product::inRandomOrder()->first();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $policy = PrivacyPolicy::first();
        $metaTitle = 'Privacy Policy';
        return view('frontend.privacy', compact('policy', 'categories', 'product', 'contacts', 'metaTitle'));
    }

    public function aboutUs()
    {
        $categories = Category::get();
        $product = $this->getDefaultProduct();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $about = About::first();
        $personnel = Personnel::all(); 
        $metaTitle = "About Us - Our Company";

        return view('frontend.about', compact('categories', 'product', 'contacts', 'about', 'personnel','metaTitle'));
    }

    public function customerDashboard()
    {

        $authCustomer = Auth::guard('customer')->user();

        $customer = Customer::where('email', $authCustomer->email)->firstOrFail();

        $orders = Order::where('customer_id', $customer->id)
            ->with('items')
            ->latest()
            ->take(5)
            ->get();

        $categories = Category::get();
        $contacts   = Contact::with(['emails', 'numbers'])->get();
        $product    = $this->getDefaultProduct();

        $meta = $this->generateMeta(
            "{$customer->fname} {$customer->lname}'s - Dashboard",
            "Welcome {$customer->fname}, view your recent orders, manage your account, and track your shopping activities."
        );

        return view(
            'frontend.customer_dashboard',
            array_merge(compact('customer', 'orders', 'categories', 'contacts', 'product'), $meta)
        );
    }

    public function customerShoppingCart()
    {
        $customer   = Auth::guard('customer')->user();
        $categories = Category::get();
        $contacts   = Contact::with(['emails', 'numbers'])->get();
        $product    = $this->getDefaultProduct();
        $meta = $this->generateMeta(
            "{$customer->fname} {$customer->lname}'s - Shopping Cart",
            "Welcome {$customer->fname}, view your recent orders, manage your account, and track your shopping activities."
        );

        return view(
            'frontend.customer_shoppingcart_page',
            array_merge(compact('customer', 'categories', 'contacts', 'product'), $meta)
        );
    }

    public function customerCheckout()
    {
        $customer   = Auth::guard('customer')->user();
        $categories = Category::get();
        $contacts   = Contact::with(['emails', 'numbers'])->get();
        $product    = $this->getDefaultProduct();
        $meta = $this->generateMeta(
            "{$customer->fname} {$customer->lname}'s - Checkout Order",
            "Welcome {$customer->fname}, view your recent orders, manage your account, and track your shopping activities."
        );

        return view(
            'frontend.customer_checkout',
            array_merge(compact('customer', 'categories', 'contacts', 'product'), $meta)
        );
    }

    public function customerCheckoutOrder(Request $request)
    {
        $customer = Auth::guard('customer')->user();
        $categories = Category::get();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $product = $this->getDefaultProduct();

        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'street_address' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'postcode' => 'required|string',
        ]);

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }

        $totalAmount = collect($cart)->sum(function($item) {
            $priceAfterDiscount = $item['price'] - ($item['discount'] ?? 0);
            return $priceAfterDiscount * $item['quantity'];
        });

        $transactionId = uniqid();

        $order = Order::create([
            'customer_id'   => $customer->id,
            'fname'         => $request->fname,
            'lname'         => $request->lname,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'company_name'  => $request->company_name,
            'street_address'=> $request->street_address,
            'country'       => $request->country,
            'state'         => $request->state,
            'postcode'      => $request->postcode,
            'note'          => $request->note,
            'amount'        => $totalAmount,
            'currency'      => 'BDT',
            'status'        => 'Pending',
            'transaction_id'=> $transactionId,
            'payment_method' => $request->payment_method,
        ]);

        foreach ($cart as $productId => $item) {
            $finalPrice = $item['price'] - ($item['discount'] ?? 0);
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'product_title' => $item['title'],
                'product_image' => $item['image'] ?? null,
                'price' => $finalPrice,
                'discount' => $item['discount'] ?? 0,
                'quantity' => $item['quantity'],
                'sub_total' => $finalPrice * $item['quantity'],
            ]);
        }

        if ($request->payment_method === 'online_payment') {
            $post_data = [
                'total_amount' => $totalAmount,
                'currency' => 'BDT',
                'tran_id' => $transactionId,
                'cus_name' => $request->fname.' '.$request->lname,
                'cus_email' => $request->email,
                'cus_add1' => $request->street_address,
                'cus_state' => $request->state,
                'cus_postcode' => $request->postcode,
                'cus_country' => $request->country,
                'cus_phone' => $request->phone,
                'shipping_method' => "NO",
                'product_name' => "Multiple Products",
                'product_category' => "Goods",
                'product_profile' => "physical-goods",
            ];

            $sslc = new SslCommerzNotification();
            return $sslc->makePayment($post_data, 'hosted');
        }

        session()->forget('cart');
        $order->load('items');
        return view('frontend.receipt', compact('order', 'categories', 'product', 'contacts'));
    }

    public function customerWishlist()
    {
        $customer   = Auth::guard('customer')->user();
        $categories = Category::get();
        $contacts   = Contact::with(['emails', 'numbers'])->get();
        $product    = $this->getDefaultProduct();
        $meta = $this->generateMeta(
            "{$customer->fname} {$customer->lname}'s - Wishlist",
            "Welcome {$customer->fname}, view your recent orders, manage your account, and track your shopping activities."
        );

        return view(
            'frontend.customer_wishlist',
            array_merge(compact('customer', 'categories', 'contacts', 'product'), $meta)
        );
    }

    public function customerOrderHistory()
    {
        $customer = Auth::guard('customer')->user();

        $orders = Order::with('items')
            ->where('customer_id', $customer->id)
            ->latest()
            ->paginate(10)->withQueryString();

        $categories = Category::get();
        $contacts   = Contact::with(['emails', 'numbers'])->get();
        $product    = $this->getDefaultProduct();
        $meta = $this->generateMeta(
            "{$customer->fname} {$customer->lname}'s - Orders",
            "Welcome {$customer->fname}, view your recent orders, manage your account, and track your shopping activities."
        );

        return view(
            'frontend.customer_order_history',
            array_merge(compact('orders', 'categories', 'contacts', 'product'), $meta)
        );
    }
    
    public function customerSetting()
    {
        $customer = Auth::guard('customer')->user();

        $categories = Category::get();
        $contacts   = Contact::with(['emails', 'numbers'])->get();
        $product    = $this->getDefaultProduct();
        $meta = $this->generateMeta(
            "{$customer->fname} {$customer->lname}'s - Account Settings",
            "Welcome {$customer->fname}, view your recent orders, manage your account, and track your shopping activities."
        );

        return view(
            'frontend.customer_setting',
            array_merge(compact('customer', 'categories', 'contacts', 'product'), $meta)
        );
    }



    public function customerSettingPost(Request $request)
    {
        $customer = Auth::guard('customer')->user();

        $request->validate([
            'fname'          => 'required|string|max:255',
            'lname'          => 'required|string|max:255',
            'email'          => 'required|email|unique:customers,email,' . $customer->id,
            'phone'          => 'nullable|string|max:50',
            'company_name'   => 'nullable|string|max:255',
            'street_address' => 'nullable|string',
            'country'        => 'nullable|string',
            'state'          => 'nullable|string',
            'postcode'       => 'nullable|string',
            'profile_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'password'       => 'nullable|confirmed|min:6',
        ]);

        // Update profile info
        $customer->update([
            'fname'          => $request->fname,
            'lname'          => $request->lname,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'company_name'   => $request->company_name,
            'street_address' => $request->street_address,
            'country'        => $request->country,
            'state'          => $request->state,
            'postcode'       => $request->postcode,
        ]);

        // Update profile image
        if ($request->hasFile('profile_image')) {

            if ($customer->profile_image && Storage::disk('public')->exists('customers/'.$customer->profile_image)) {
                \Storage::disk('public')->delete('customers/'.$customer->profile_image);
            }

            $imageName = time().'.'.$request->profile_image->extension();
            $request->profile_image->storeAs('customers', $imageName, 'public');

            $customer->update([
                'profile_image' => $imageName
            ]);
        }

        if ($request->filled('password')) {
            $customer->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return back()->with('success', 'Account updated successfully!');
    }
    
    public function customerOrderDetails($id)
    {
        $customer = Auth::guard('customer')->user();

        $customer = Customer::where('email', $customer->email)->firstOrFail();

        $order = Order::with('items')
            ->where('id', $id)
            ->where('customer_id', $customer->id)
            ->firstOrFail();

        $categories = Category::get();
        $contacts   = Contact::with(['emails', 'numbers'])->get();
        $product    = $this->getDefaultProduct();
        $meta = $this->generateMeta(
            "{$customer->fname} {$customer->lname}'s - Order Details",
            "Welcome {$customer->fname}, view your recent orders, manage your account, and track your shopping activities."
        );

        return view(
            'frontend.customer_order_details',
           array_merge(compact('order', 'customer', 'categories', 'contacts', 'product'), $meta)
        );
    }

}