<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? config($siteSetting->site_title ?? 'Home' ) }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ $siteSetting && $siteSetting->favicon
                ? asset('storage/' . $siteSetting->favicon)
                : asset('frontend/assets/image/fav.png') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    
    {{-- HOME CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/home_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/home_responsive.css') }}">

    {{-- SHOPPING CART CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/shopping_cart_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/shopping_cart_responsive.css') }}">

    {{-- CHECKOUT CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/checkout_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/checkout_responsive.css') }}">

    {{-- WISHLIST CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/wishlist_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/wishlist_responsive.css') }}">

    {{-- PRODUCT DETAILS CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/product_details_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/product_details_responsive.css') }}">

    {{-- PRODUCT CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/product_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/product_responsive.css') }}">

    {{-- CUSTOMER LOGIN CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customerlogin_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customerlogin_responsive.css') }}">

    {{-- CUSTOMER REGISTRATION CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customerregistration_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customerregistration_responsive.css') }}">

    {{-- CONTACT INFO --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact_response.css') }}">

    {{-- Faqs --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/faqs_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/faqs_responsive.css') }}">

    {{-- About --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/about_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/about_responsive.css') }}">

    {{-- Customer --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_dashboard_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_dashboard_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_shoppingcart_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_shoppingcart_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_checkout_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_checkout_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_wishlist_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_wishlist_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_orders_history_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_orders_history_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_setting_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_setting_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_orderdetails_style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/customer_orderdetails_responsive.css') }}">

    {{-- LINK CSS FILES --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.css') }}">

    </head>

    <body>

        <header>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 ">
                        <div class="first_heading_01">
                            <span><iconify-icon icon="mingcute:location-line" width="24" height="24"></iconify-icon></span>
                            <p class="mb-0">Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="first_heading_02">
                            <div>
                                <select name="" id="">
                                    <option value="">Eng</option>
                                    <option value="">Bn</option>
                                </select>
                                <select name="" id="">
                                    <option value="">USD</option>
                                    <option value="">BDT</option>
                                </select>
                            </div>
                            <div class="sign">
                                @auth('customer')
                                    <a href="{{ route('frontend.customer.dashboard') }}">Sign In</a>
                                @else
                                    <a href="{{ route('frontend.customer.login') }}">Sign In</a>
                                @endauth /
                                @auth('customer')
                                    <a href="{{ route('frontend.customer.dashboard') }}">Sign Up</a>
                                @else
                                    <a href="{{ route('frontend.customer.register') }}">Sign Up</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <section id="second_heading" class="shadow py-2">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3">
                        <a href="{{ route('frontend.index') }}"><img src="{{ $siteSetting && $siteSetting->logo_dark
                        ? asset('storage/' . $siteSetting->logo_dark)
                        : asset('frontend/assets/image/logo_dark.png') }}" alt="Logo"></a>
                    </div>
                    <div class="d-none d-xl-block col-xl-5 second_heading_01">
                        <form action="">
                            <input type="text" placeholder="search">
                            <span><iconify-icon icon="uil:search" width="24" height="24"></iconify-icon></span>
                            <button type="submit">search</button>
                        </form>
                    </div>
                    <div class="d-none d-xl-block col-xl-3">
                        <div class="d-flex align-items-center justify-content-end">
                            <div>
                                <a href="{{ route('frontend.wishlist') }}"><span class="icon01"><iconify-icon icon="iconamoon:heart-light" width="32" height="32"></iconify-icon></span></a>
                            </div>
                            <div class="d-flex align-items-center ">
                                <a>
                                    <button style="border: none; background: none; padding: 0;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <div class="counter">
                                            <span class="icon02"><iconify-icon icon="streamline-freehand:products-shopping-bags" width="28" height="28"></iconify-icon></span>
                                            <span>{{ count(session('cart', [])) }}</span>
                                        </div>
                                    </button>
                                </a>
                                <div class="carts">
                                    <p class="mb-0">Shopping cart:</p>
                                    <b>${{ collect(session('cart', []))->sum(fn($c) => ($c['discount'] ? $c['price'] - $c['discount'] : $c['price']) * $c['quantity']) }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile_menubar d-xl-none">
                    <span data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><iconify-icon icon="f7:menu" width="38" height="38"></iconify-icon></span>
                </div>
            </div>
        </section>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <a href="./index.html"><img class="img-fluid" src="{{ $siteSetting && $siteSetting->logo_dark
                ? asset('storage/' . $siteSetting->logo_dark)
                : asset('frontend/assets/image/logo_dark.png') }}" alt=""></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <div class="row">
                        <div class="col-3 wish_icons">
                        <a href="{{ route('frontend.wishlist') }}"><span class="wish"><iconify-icon icon="iconamoon:heart-light" width="32" height="32"></iconify-icon></span></a>
                    </div> 

                    <div class="col-7 sign">
                        @auth('customer')
                            <a href="{{ route('frontend.customer.dashboard') }}">Sign In</a>
                        @else
                            <a href="{{ route('frontend.customer.login') }}">Sign In</a>
                        @endauth /
                        @auth('customer')
                            <a href="{{ route('frontend.customer.dashboard') }}">Sign Up</a>
                        @else
                            <a href="{{ route('frontend.customer.register') }}">Sign Up</a>
                        @endauth
                    </div>
                    </div>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mobile_toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('frontend.about.us') }}">About</a></li>
                            <li><a class="dropdown-item" href="{{ route('frontend.contact.info') }}">Contact</a></li>           
                            <li><a class="dropdown-item" href="{{ route('frontend.faqs') }}">Faqs</a></li>
                        </ul>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mobile_toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('frontend.index') }}">Shop</a></li>
                            <li><a class="dropdown-item" href="{{ route('frontend.product') }}">Product</a></li>           
                            @if(isset($product) && $product)
                                <li>
                                    <a class="dropdown-item"
                                    href="{{ route('frontend.product.details', $product->id) }}">
                                        Product Details
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mobile_toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>           
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mobile_toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog's</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>           
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link mobile_toggle" aria-current="page" href="{{ route('frontend.about.us') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mobile_toggle" aria-current="page" href="{{ route('frontend.contact.info') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <nav id="nav" class="navbar d-none d-xl-block navbar-expand-lg bg-body-tertiary  p-0">
                <div class="container">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle desktop-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><iconify-icon icon="ic:twotone-menu" width="24" height="24"></iconify-icon></span> 
                            <span class="items_categories">All Categories</span>
                            <span><iconify-icon icon="solar:alt-arrow-down-linear" width="24" height="24"></iconify-icon></span>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="#">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('frontend.about.us') }}">About</a></li>
                                    <li><a class="dropdown-item" href="{{ route('frontend.contact.info') }}">Contact</a></li>           
                                    <li><a class="dropdown-item" href="{{ route('frontend.faqs') }}">Faqs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('frontend.index') }}">Shop</a></li>
                                    <li><a class="dropdown-item" href="{{ route('frontend.product') }}">Product</a></li>           
                                    @if(isset($product) && $product)
                                        <li>
                                            <a class="dropdown-item"
                                            href="{{ route('frontend.product.details', $product->id) }}">
                                                Product Details
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>           
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog's</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>           
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('frontend.about.us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('frontend.contact.info') }}">Contact Us</a>
                            </li>
                        </ul>

                        <div class="contactinfo">
                            <span><iconify-icon icon="ic:sharp-phone" width="24" height="24"></iconify-icon></span>
                            @foreach ($contacts as $contact)
                                <a href="tel:{{ $contact->numbers->first()->number }}">{{ $contact->numbers->first()->number }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
        </nav>

        <div class="row">
            <div class="col-4 justify-content-center mx-auto mt-2">
                @session('success')
                    <div class="alert alert-success alert-dismissible text-center fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession
            </div>
        </div>

        <div class="row">
            <div class="col-4 justify-content-center mx-auto mt-2">
                @session('error')
                    <div class="alert alert-danger alert-dismissible text-center fade show" role="alert">
                        <strong>{{ session('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession
            </div>
        </div>


        <section id="mobile_footer_bar" class="d-xl-none">
            <div class="row  align-items-center justify-content-center">
                <div class="col-2 text-center pt-3 contains">
                    <a href="{{ route('frontend.index') }}">
                        <span class="footer_icons"><iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon></span>
                        <p>Home</p>
                    </a>
                </div>
                <div class="col-2 text-center pt-3 contains">
                    <span class="footer_icons"><iconify-icon icon="ic:outline-local-offer" width="24" height="24"></iconify-icon></span>
                    <p>Offer</p>
                </div>
                <div class="col-2 text-center pt-3 contains">
                    <span class="mobile-search"><iconify-icon icon="icon-park-outline:search" width="38" height="38"></iconify-icon></span>
                    <p>Search</p>
                </div>
                <div class="col-2 text-center pt-3 contains">
                    <a>
                        <button style="border: none; background: none; padding: 0;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="footer_icons"><iconify-icon icon="raphael:cart" width="24" height="24"></iconify-icon></span>
                            <span class="footer_cart">{{ count(session('cart', [])) }}</span>
                        </button>
                    </a>
                    <p>Cart</p>
                </div>
                <div class="col-2 text-center pt-3 contains">
                    @auth('customer')
                        <a href="{{ route('frontend.customer.dashboard') }}">
                            <span class="footer_icons"><iconify-icon icon="mdi:account-circle" width="24" height="24"></iconify-icon></span>
                            <p>My Account</p>
                        </a>
                    @else
                        <a href="{{ route('frontend.customer.login') }}">
                            <span class="footer_icons"><iconify-icon icon="mdi:account-circle" width="24" height="24"></iconify-icon></span>
                            <p>My Account</p>
                        </a>
                    @endauth
                </div>
            </div>
        </section>

        <div id="search" class="d-xl-none">
            <div class="container">
                <form action="">
                    <a href="./index.html"><img class="img-fluid img" src="{{ $siteSetting && $siteSetting->logo_dark
                    ? asset('storage/' . $siteSetting->logo_dark)
                    : asset('frontend/assets/image/logo_dark.png') }}" alt=""></a>
                    <input type="text" placeholder="seach here">
                    <button class="submit" type="submit"><iconify-icon icon="lucide:search-x" width="24" height="24"></iconify-icon></button>
                    <button type="button" class="search-close" data-bs-dismiss="search" aria-label="Close"><span><iconify-icon icon="akar-icons:cross" width="24" height="24"></iconify-icon></span></button>
                </form>
            </div>
        </div>

        
    @yield('frontend_content')
    
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            {{-- Scrollable list --}}
            <div class="offcanvas-body" style="overflow-y: auto; max-height: 80vh;">
                @foreach (session('cart', []) as $cart)
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('storage/' . $cart['image']) }}" alt="">
                        </div>
                        <div class="col-6 text-start p-3">
                            <h6>{{ $cart['title'] }}</h6>
                            <p>
                                <span style="color: #9c9999">{{ $cart['quantity'] }}kg ×</span>
                                <span>${{$cart['discount'] ? $cart['price'] - $cart['discount'] : $cart['price'] }}</span>
                            </p>
                        </div>
                        <div class="col-2 text-center p-3">
                            <a href="{{ route('frontend.cart.remove', $cart['id'] ?? array_search($cart, session('cart'))) }}" 
                                class="btn-close" style="text-decoration:none;">
                            </a>
                        </div>
                        <div><hr></div>
                    </div>
                @endforeach
            </div>

            {{-- FOOTER TOTAL SECTION --}}
            <div class="p-3 border-top" style="background:white;">
                @if (count(session('cart', [])) > 0)

                    <div class="d-flex justify-content-between">
                        <h6>{{ count(session('cart')) }} Product</h6>
                        <b>
                            ${{ collect(session('cart'))->sum(fn($c) =>
                                ($c['discount'] ? $c['price'] - $c['discount'] : $c['price'])
                                * $c['quantity']
                            ) }}
                        </b>
                    </div>

                    <a class="mt-3 checkout" href="{{ route('frontend.checkout') }}">
                        Checkout
                    </a>

                    <a class="mt-2 gotocart" href="{{ route('frontend.shopping.cart') }}">
                        Go to Cart
                    </a>

                @else
                    <p class="text-center text-muted">Your cart is empty</p>
                @endif
            </div>


        </div>


        <section id="subcribe">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <h4>Subscribe our Newsletter</h4>
                        <p>Pellentesque eu nibh eget mauris congue mattis matti.</p>
                    </div>
                    <div class="d-xl-block col-xl-5">
                        <form action="">
                            <input type="email" placeholder="Your email address">
                            <a href="">Subscribe</a>
                        </form>
                    </div>
                    <div class="col-xl-3 social_media">
                        <span><iconify-icon icon="line-md:facebook" width="24" height="24"></iconify-icon></span>
                        <span><iconify-icon icon="mdi:twitter" width="24" height="24"></iconify-icon></span>
                        <span><iconify-icon icon="formkit:pinterest" width="24" height="24"></iconify-icon></span>
                        <span><iconify-icon icon="hugeicons:instagram" width="24" height="24"></iconify-icon></span>
                    </div>
                </div>
            </div>
        </section>


        <section id="footer" style="background-image: url('{{ asset("frontend/assets/image/Footer.png") }}');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="logo">
                            <a href="{{ route('frontend.index') }}"><img src="{{ $siteSetting && $siteSetting->logo_dark
                            ? asset('storage/' . $siteSetting->logo_light)
                            : asset('frontend/assets/image/logo_light.png') }}" alt="Logo"></a>
                        </div>
                        <h4>About Shopery</h4>
                        <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna congue nec.</p>
                        <h4>
                        @foreach ($contacts as $contact)
                            <a href="tel:{{ $contact->numbers->first()->number }}">{{ $contact->numbers->first()->number }}</a>
                            <span>or</span>
                            <a href="mailto:{{ $contact->emails->first()->email }}">{{ $contact->emails->first()->email }}</a>
                        @endforeach
                        </h4>
                    </div>
                    <div class="col-xl-2">
                        <h4>My Account</h4>

                        @auth('customer')
                            <li><a href="{{ route('frontend.customer.dashboard') }}">My Account</a></li>
                        @else
                            <li><a href="{{ route('frontend.customer.login') }}">My Account</a></li>
                        @endauth

                        @auth('customer')
                            <li><a href="{{ route('frontend.customer.order.history') }}">Order History</a></li>
                        @else
                            <li><a href="{{ route('frontend.customer.login') }}">Order History</a></li>
                        @endauth

                        @auth('customer')
                            <li><a href="{{ route('frontend.customer.shoppingcart') }}">Shoping Cart</a></li>
                        @else
                            <li><a href="{{ route('frontend.customer.login') }}">Shoping Cart</a></li>
                        @endauth

                        @auth('customer')
                            <li><a href="{{ route('frontend.customer.wishlist') }}">Wishlist</a></li>
                        @else
                            <li><a href="{{ route('frontend.customer.login') }}">Wishlist</a></li>
                        @endauth

                        @auth('customer')
                            <li><a href="{{ route('frontend.customer.setting') }}">Settings</a></li>
                        @else
                            <li><a href="{{ route('frontend.customer.login') }}">Settings</a></li>
                        @endauth

                    </div>
                    <div class="col-xl-2">
                        <h4>Helps</h4>
                        <li><a href="{{ route('frontend.contact.info') }}">Contact</a></li>
                        <li><a href="{{ route('frontend.faqs') }}">Faqs</a></li>
                        <li><a href="{{ route('frontend.terms') }}">Terms & Condition</a></li>
                        <li><a href="{{ route('frontend.privacy') }}">Privacy Policy</a></li>
                    </div>
                    <div class="col-xl-2">
                        <h4>Proxy</h4>
                        <li><a href="{{ route('frontend.about.us') }}">About</a></li>
                        <li><a href="{{ route('frontend.index') }}">Shop</a></li>
                        <li><a href="{{ route('frontend.product') }}">Product</a></li>
                        @if(isset($product) && $product)
                            <li>
                                <a class="dropdown-item"
                                href="{{ route('frontend.product.details', $product->id) }}">
                                    Product Details
                                </a>
                            </li>
                        @endif
                            @auth('customer')
                                @php
                                    $latestOrderId = auth('customer')
                                        ->user()
                                        ->orders()
                                        ->latest()
                                        ->value('id');
                                @endphp

                                @if($latestOrderId)
                                    <li>
                                        <a href="{{ route('frontend.customer.order.details', $latestOrderId) }}">
                                            Track Order
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('frontend.customer.dashboard') }}">
                                            Track Order
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <a href="{{ route('frontend.customer.login') }}">
                                        Track Order
                                    </a>
                                </li>
                            @endauth               
                    </div>
                    <div class="col-xl-3">
                        <div class="heading">
                            <h4>Instagram</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 img">
                                <img src="{{ asset('frontend/assets/image/instagram_image1.png') }}" alt="">
                                <img src="{{ asset('frontend/assets/image/instagram_image2.png') }}" alt="">
                            </div>
                            <div class="col-xl-3 img">
                                <img src="{{ asset('frontend/assets/image/instagram_image3.png') }}" alt="">
                                <img src="{{ asset('frontend/assets/image/instagram_image4.png') }}" alt="">
                            </div>
                            <div class="col-xl-3 img">
                                <img src="{{ asset('frontend/assets/image/instagram_image5.png') }}" alt="">
                                <img src="{{ asset('frontend/assets/image/instagram_image6.png') }}" alt="">
                            </div>
                            <div class="col-xl-3 img">
                                <img src="{{ asset('frontend/assets/image/instagram_image7.png') }}" alt="">
                                <img src="{{ asset('frontend/assets/image/instagram_image8.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 social_media">
                        <span><iconify-icon icon="line-md:facebook" width="24" height="24"></iconify-icon></span>
                        <span><iconify-icon icon="mdi:twitter" width="24" height="24"></iconify-icon></span>
                        <span><iconify-icon icon="formkit:pinterest" width="24" height="24"></iconify-icon></span>
                        <span><iconify-icon icon="hugeicons:instagram" width="24" height="24"></iconify-icon></span>
                    </div>
                    <div class="col-xl-6 title">
                        <p>Shopery eCommerce © 2021. All Rights Reserved</p>
                    </div>
                    <div class="col-xl-3 payment_method">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/image/Method=ApplePay.png') }}" alt="">
                            <img src="{{ asset('frontend/assets/image/Method=Visa.png') }}" alt="">
                            <img src="{{ asset('frontend/assets/image/Method=Discover.png') }}" alt="">
                            <img src="{{ asset('frontend/assets/image/Method=Mastercard.png') }}" alt="">
                            <img src="{{ asset('frontend/assets/image/secure_payment.png') }}" alt="">
                        </div>
                    </div>
                </div>            
            </div>
        </section>

        {{-- LINK JS FILES --}}
        <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
        {{-- <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script> --}}
        <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
        <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
        <script src="{{ asset('frontend/assets/js/category-filter.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/venobox.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/zoomsl.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/range-slider.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/range-slider.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        {{-- HOME JS FILES --}}
        <script src="{{ asset('frontend/assets/app/app.js') }}"></script>

        {{-- SHOPPING CART JS FILES --}}
        <script src="{{ asset('frontend/assets/app/shopping_cart_app.js') }}"></script>

        {{-- CHECKOUT JS FILES --}}
        <script src="{{ asset('frontend/assets/app/checkout_app.js') }}"></script>

        {{-- PRODUCT DETAILS JS FILES --}} 
        <script src="{{ asset('frontend/assets/app/product_details_app.js') }}"></script>

        {{-- WISHLIST JS FILES --}}
        <script src="{{ asset('frontend/assets/app/wishlist_app.js') }}"></script>

        {{-- Product Js Files --}}
        <script src="{{ asset('frontend/assets/app/product_app.js') }}"></script>

        {{-- about --}}
        <script src="{{ asset('frontend/assets/app/about_app.js') }}"></script>

        <script>
            document.querySelectorAll(".inc, .dec").forEach(btn => {

                btn.addEventListener("click", function() {

                    let addBox = this.closest(".add");
                    let input = addBox.querySelector(".result");
                    let id = addBox.dataset.id;

                    let qty = parseInt(input.value);

                    if (this.classList.contains("inc")) qty++;
                    if (this.classList.contains("dec") && qty > 1) qty--;

                    updateQty(id, qty, addBox);
                });

            });

            function updateQty(id, qty, addBox) {

                fetch(`/cart/update/${id}`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ quantity: qty })
                })
                .then(res => res.json())
                .then(data => {

                    addBox.querySelector(".result").value = data.quantity;

                    let subtotalBox = addBox.nextElementSibling;
                    subtotalBox.querySelector(".amount").value = data.subtotal;

                    document.querySelector(".total_amount").value = data.total;
                    document.querySelector(".all_amount").value = data.total;
                });
            }
        </script>


        @stack('frontend_script')
        
    </body>
</html>