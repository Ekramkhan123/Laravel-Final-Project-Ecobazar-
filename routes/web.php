<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\backend\home\HomeController;
use App\Http\Controllers\backend\PersonnelController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Frontend\AddToCartController;
use App\Http\Controllers\Backend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\CustomerAuthController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Profile\ProfileController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\backend\RolePermission\RolePermissionController;
use App\Http\Controllers\Backend\Setting\SiteSettingController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('/dashboard', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('home',[AdminController::class, 'home'])->name('admin.home');
    Route::get('about',[AdminController::class, 'about'])->name('admin.about');
    Route::get('contact',[AdminController::class, 'contact'])->name('admin.contact');

});


//*Backend
Route::middleware('auth')->name('dashboard.')->prefix('/dashboard')->group(function () {

    //*Profile
    Route::get('/profile-update', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile-update', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/password-update', [ProfileController::class, 'passwordUpdate'])->name('password.update');
    Route::post('/image-update', [ProfileController::class, 'imageUpdate'])->name('image.update');

    //*Role & Permissions
    Route::prefix('role-permission/')->middleware(['can:create', 'can:edit', 'can:delete'])->name('rolePermission.')->group(function () {
        Route::get('create-user', [RolePermissionController::class, 'createUser'])->name('create.user');
        Route::post('create-user', [RolePermissionController::class, 'storeUser'])->name('store.user');
        Route::get('list-users', [RolePermissionController::class, 'listUsers'])->name('list.users');
        Route::get('edit-user/{id}', [RolePermissionController::class, 'editUser'])->name('edit.user');
        Route::put('update-user/{id}', [RolePermissionController::class, 'updateUser'])->name('update.user');
        Route::get('delete-user/{id}', [RolePermissionController::class, 'deleteUser'])->name('delete.user');
        Route::get('create-role', [RolePermissionController::class, 'createRole'])->name('create.role');
        Route::post('create-role', [RolePermissionController::class, 'storeRole'])->name('store.role');
        Route::get('role-list/{id}', [RolePermissionController::class, 'roleList'])->name('role.list');
        Route::post('role-list', [RolePermissionController::class, 'roleListStore'])->name('role.list.store');
        Route::get('all-roles', [RolePermissionController::class, 'allRoles'])->name('role.all');
        Route::get('edit-role/{id}', [RolePermissionController::class, 'editRole'])->name('edit.role');
        Route::put('update-role/{id}', [RolePermissionController::class, 'updateRole'])->name('update.role');
        Route::get('delete-role/{id}', [RolePermissionController::class, 'deleteRole'])->name('delete.role');
        Route::get('permissions/{id}', [RolePermissionController::class, 'permissions'])->name('permissions');
        Route::post('permissions', [RolePermissionController::class, 'permissionsStore'])->name('permissions.store');


    });

    // Site Settings
    Route::get('/site-settings', [SiteSettingController::class, 'index'])->name('settings.index');
    Route::post('/site-settings', [SiteSettingController::class, 'store'])->name('settings.store');

    //Contact
    Route::get('/contact-index', [ProfileController::class, 'contactIndex'])->name('contact.index');
    Route::post('/contact-Store', [ProfileController::class, 'contactStore'])->name('contact.store');
    Route::get('/contact-show', [ProfileController::class, 'contactShow'])->name('contact.show');
    Route::get('/contact-edit/{id}', [ProfileController::class, 'contactEdit'])->name('contact.edit');
    Route::put('/contact-update/{id}', [ProfileController::class, 'contactUpdate'])->name('contact.update');
    Route::get('/contact-delete/{id}', [ProfileController::class, 'contactDelete'])->name('contact.delete');

    // Terms & Conditions management
    Route::get('/terms', [TermsConditionController::class, 'index'])->name('terms.index');
    Route::get('/terms/edit', [TermsConditionController::class, 'edit'])->name('terms.edit');
    Route::post('/terms/update', [TermsConditionController::class, 'update'])->name('terms.update');


    // Privacy Policy management
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'edit'])->name('privacy.edit');
    Route::put('/privacy-policy', [PrivacyPolicyController::class, 'update'])->name('privacy.update');

    //Faqs
    Route::get('/faq-index', [FaqController::class, 'faqIndex'])->name('faq.index');
    Route::post('/faq-store', [FaqController::class, 'faqStore'])->name('faq.store');
    Route::get('/faq-show', [FaqController::class, 'faqShow'])->name('faq.show');
    Route::get('/faq-edit/{id}', [FaqController::class, 'faqEdit'])->name('faq.edit');
    Route::put('/faq-update/{id}', [FaqController::class, 'faqUpdate'])->name('faq.update');
    Route::get('/faq-delete/{id}', [FaqController::class, 'faqDelete'])->name('faq.delete');
    Route::get('/faq-image', [FaqController::class, 'faqImage'])->name('faq.image');
    Route::post('/faq-imagestore', [FaqController::class, 'faqImageStore'])->name('faq.imagestore');
    Route::get('/faq-imageedit', [FaqController::class, 'faqImageEdit'])->name('faq.imageedit');
    Route::post('/faq-imageupdate', [FaqController::class, 'faqImageUpdate'])
    ->name('faq.imageupdate');


    //About
    Route::get('about', [AboutController::class,'index'])->name('about.index');
    Route::get('about/create', [AboutController::class,'create'])->name('about.create');
    Route::post('about/store', [AboutController::class,'store'])->name('about.store');
    Route::get('about/{id}/edit', [AboutController::class,'edit'])->name('about.edit');
    Route::put('about/{id}/update', [AboutController::class,'update'])->name('about.update');
    Route::get('about/show', [AboutController::class,'show'])->name('about.show');
    Route::delete('about/{id}/delete', [AboutController::class, 'destroy'])->name('about.delete');

    // Personnel
    Route::get('personnel', [PersonnelController::class, 'index'])->name('personnel.index');
    Route::get('personnel/create', [PersonnelController::class, 'create'])->name('personnel.create');
    Route::post('personnel/store', [PersonnelController::class, 'store'])->name('personnel.store');
    Route::get('personnel/{id}/edit', [PersonnelController::class, 'edit'])->name('personnel.edit');
    Route::put('personnel/{id}/update', [PersonnelController::class, 'update'])->name('personnel.update');
    Route::delete('personnel/{id}/delete', [PersonnelController::class, 'destroy'])->name('personnel.delete');

    // Customers
    Route::get('/customers', [CustomerController::class, 'index'])
        ->name('customers.index');

    Route::get('/customers/{id}', [CustomerController::class, 'show'])
        ->name('customers.show');


    // Orders
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.status.update');
    
    //*category
    Route::get('/category-index', [CategoryController::class, 'categoryIndex'])->name('category.index');
    Route::post('/category-store', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/category-show', [CategoryController::class, 'categoryShow'])->name('category.show');
    Route::get('/category-edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::put('/category-update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::get('/category-delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');

    //*product
    Route::get('/product-index', [ProductController::class, 'productIndex'])->name('product.index');
    Route::post('/product-create', [ProductController::class, 'productCreate'])->name('product.create');
    Route::get('/product-show', [ProductController::class, 'productShow'])->name('product.show');
    Route::get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
    Route::put('/product-update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
    Route::get('/product-delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
    Route::get('/product-image', [ProductController::class, 'productImage'])->name('product.image');
    Route::post('/product-images-store', [ProductController::class, 'productImagesStore'])->name('product.images.store');
    Route::get('/product-images-show', [ProductController::class, 'productImageShow'])->name('product.image.show');
    Route::get('/product-images-edit/{id}', [ProductController::class, 'productImageEdit'])->name('product.image.edit');
    Route::get('/product-images-delete/{id}', [ProductController::class, 'productImageDelete'])->name('product.image.delete');
    Route::put('/product-images-update/{id}', [ProductController::class, 'productImageUpdate'])->name('product.image.update');

});





//*Frontend

Route::name('frontend.')->group(function(){
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('wishlist');

    Route::get('/shopping-cart', [FrontendController::class, 'shoppingCart'])->name('shopping.cart');
    Route::post('/shopping-cart', [FrontendController::class, 'shoppingCart'])->name('frontend.shopping.cart.post');

    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::post('/checkout-order', [FrontendController::class, 'checkoutOrder'])->name('checkout.order');

    Route::get('/product', [FrontendController::class, 'product'])->name('product');


    Route::get('/contact-info', [FrontendController::class, 'contactInfo'])->name('contact.info');

    Route::get('/terms', [TermsConditionController::class, 'show'])->name('terms');

    Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy');

    Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about.us');


    Route::get('/add-to-cart/{id}', [AddToCartController::class, 'addToCart'])->name('add.to.cart');

    Route::get('/wishlist/{id}', [AddToCartController::class, 'wishlist'])->name('wish.list');

    Route::get('/cart/remove/{id}', [AddToCartController::class, 'removeFromCart'])->name('cart.remove');

    Route::get('/wish/remove/{id}', [AddToCartController::class, 'removeFromWish'])->name('wish.remove');

    Route::post('/cart/update/{id}', [AddToCartController::class, 'updateQuantity'])->name('cart.update');

    Route::match(['get', 'post'], '/product-details/{id}', [AddToCartController::class, 'productDetails'])->name('product.details');

    Route::get('/faqs', [FrontendController::class, 'faqs'])->name('faqs');

    // Guest routes for customers
    Route::middleware('guest:customer')->group(function () {
        Route::get('/customer/login', [FrontendController::class, 'customerLogin'])
            ->name('customer.login');
        Route::get('/customer/register', [FrontendController::class, 'customerRegistration'])
            ->name('customer.register');

        Route::post('/customer/login', [CustomerAuthController::class, 'login'])
            ->name('customer.login.submit');
        Route::post('/customer/register', [CustomerAuthController::class, 'register'])
            ->name('customer.register.submit');
    });

    // Authenticated customer routes
    Route::middleware('auth:customer')->group(function () {
        Route::post('customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

        Route::get('/customer_dashboard', [FrontendController::class, 'customerDashboard'])->name('customer.dashboard');
        Route::get('/customer_shoppingcart', [FrontendController::class, 'customerShoppingCart'])->name('customer.shoppingcart');
        Route::get('/customer_checkout', [FrontendController::class, 'customerCheckout'])->name('customer.checkout');
        Route::post('/customercheckout-order', [FrontendController::class, 'customerCheckoutOrder'])->name('customercheckout.order');
        Route::get('/customer_wishlist', [FrontendController::class, 'customerWishlist'])->name('customer.wishlist');
        Route::get('/customer_order_history', [FrontendController::class, 'customerOrderHistory'])->name('customer.order.history');
        Route::get('/customer_setting', [FrontendController::class, 'customerSetting'])
        ->name('customer.setting');

        Route::post('/customer_setting', [FrontendController::class, 'customerSettingPost'])
        ->name('customer.setting.post');

        Route::get(
            '/customer_orderdetails/{id}',
            [FrontendController::class, 'customerOrderDetails']
        )->name('customer.order.details');
    });

    Route::get('/receipt/download/{id}', [FrontendController::class, 'downloadReceipt'])->name('download.receipt');
    Route::get('/receipt/{tran_id}', [FrontendController::class, 'receiptShow'])
    ->name('receipt.show');




    // SSLCOMMERZ Start
    Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
    Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

    Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
    //SSLCOMMERZ END

});





require __DIR__.'/auth.php';
