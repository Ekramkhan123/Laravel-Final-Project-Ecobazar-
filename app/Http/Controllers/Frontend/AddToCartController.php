<?php

namespace App\Http\Controllers\Frontend;

use App\Traits\HasMeta;
use Illuminate\Http\Request;
use App\Models\Contact\Contact;
use App\Models\Product\Product;
use App\Models\Category\Category;
use App\Http\Controllers\Controller;

class AddToCartController extends Controller
{
    use HasMeta;
    //* Add to cart method
    public function addToCart($id)
    {
        $product = Product::with('images')->find($id);
        $cart = session('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quantity'] += 1;
        }
        else{
            $imagePath = $product->images->first()->image ?? null; 
            
            $cart[$id] = [
                'title' => $product->title,
                'price' => $product->price,
                'description' => $product->description,
                'image' => $imagePath,
                'discount' => $product->dis_price,
                'features' => $product->features,
                'stock' => $product->is_stock,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to shopping cart successfully!');
    }

    //* Wishlist method
    public function wishlist($id)
    {
        $product = Product::with('images')->find($id);
        $wish = session('wish', []);

        if(isset($wish[$id])){
            $wish[$id]['quantity'] += 1;
            session()->put('wish', $wish);
        }

        else{
            $wish[$id] = [
                'title' => $product->title,
                'price' => $product->price,
                'description' => $product->description,
                'image' => $product->images[0]->image,
                'quantity' => 1,
                'discount' => $product->dis_price,
                'stock' => $product->is_stock,
            ];
        }

        session()->put('wish', $wish);
        return redirect()->back()->with('success', 'Product added to wish list successfully!');
    }

    //* Update quantity method
    public function updateQuantity(Request $request, $id)
    {
        $cart = session('cart', []);

        if(!isset($cart[$id])) {
            return response()->json(['error' => 'Not found'], 404);
        }

        $qty = max(1, (int)$request->quantity);
        $cart[$id]['quantity'] = $qty;

        session()->put('cart', $cart);

        return response()->json([
            'quantity' => $qty,
            'subtotal' => $qty * ($cart[$id]['discount'] ? $cart[$id]['price'] - $cart[$id]['discount'] : $cart[$id]['price']),
            'total' => collect($cart)->sum(fn($c) => ($c['discount'] ? $c['price'] - $c['discount'] : $c['price']) * $c['quantity']),
        ]);
    }

    //* Remove from cart method
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            session()->flash('success', 'Product removed from cart successfully!');
        }

        return redirect()->back();
    }


    //* Remove from Wishlist method
    public function removeFromWish($id)
    {
        $wish = session()->get('wish');

        if(isset($wish[$id])) {
            unset($wish[$id]);
            session()->put('wish', $wish);
            session()->flash('success', 'Product removed from wishlist successfully!');
        }

        return redirect()->back();
    }

    //*product details page
    public function productDetails($id)
    {
        $product = Product::with(['images', 'category'])->findOrFail($id);
        $contacts = Contact::with(['emails', 'numbers'])->get();

        $categories = Category::all();
        $products = Product::with('images')->get();

        $cartItem = session("cart.$id", null);

        $meta = $this->generateMeta(
            $product->meta_title ?? $product->title,
            $product->meta_description ?? $product->description
        );

        $lastViewed = session()->get('last_viewed_products', []);
        
        if (($key = array_search($id, $lastViewed)) !== false) {
            unset($lastViewed[$key]);
            $lastViewed = array_values($lastViewed);
        }

        array_unshift($lastViewed, $id);

        $fullViewedList = array_slice($lastViewed, 0, 5);
        session()->put('last_viewed_products', $fullViewedList);
        
        $displayIds = array_slice($fullViewedList, 1); 

        $lastViewedProducts = collect([]);
        if (!empty($displayIds)) {
            $fetchedProducts = Product::with('images')
                ->whereIn('id', $displayIds)
                ->get()
                ->keyBy('id');

            $lastViewedProducts = collect($displayIds)
                ->map(fn($itemId) => $fetchedProducts->get($itemId))
                ->filter();
        }

        return view('frontend.product_details_index', array_merge(compact(
            'categories', 
            'product', 
            'products', 
            'cartItem', 
            'id', 
            'lastViewedProducts',
            'contacts'
        ), $meta));
    }

}