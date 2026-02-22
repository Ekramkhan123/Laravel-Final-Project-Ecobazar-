@extends('frontend.layout')

@section('frontend_content')

                    
            <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('frontend.index') }}"><iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon></a>
                        <span>></span>
                        <h4>Shopping Cart</h4>
                    </div>
                </div>
            </section>

            <section id="shopping_cart">
                <div class="container">
                    <div class="heading">
                        <h4>My Shopping Cart</h4>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 shop_product">
                            <div class="row">
                                <div class="col-xl-4 info">
                                    <h4>Product</h4>
                                </div>
                                <div class="col-xl-2 info">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-xl-3 info">
                                    <h4>Quantity</h4>
                                </div>
                                <div class="col-xl-3 info">
                                    <h4>subtotal</h4>
                                </div>
                                <hr>

                                @foreach (session('cart', []) as $id => $cart)

                                    <div class="col-xl-4 product">
                                        <div class="image">
                                            <img src="{{ asset('storage/' . $cart['image'] ?? '') }}" alt="">
                                        </div>
                                        <h4>{{ $cart['title'] ?? '' }}</h4>
                                    </div>
                                    <div class="col-xl-2 Price">
                                        <h4>${{$cart['discount'] ? $cart['price'] - $cart['discount'] : $cart['price'] }}</h4>
                                    </div>
                                    <div class="col-xl-3 add d-flex" data-id="{{ $id }}">
                                        <div class="button">
                                            <button class="dec">-</button>
                                            <input class="result" type="number" value="{{ $cart['quantity'] }}">
                                            <button class="inc">+</button>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 subtotal">
                                        <h4>$ <input class="amount" type="number" value="{{ ($cart['discount'] ? $cart['price'] - $cart['discount'] : $cart['price']) * $cart['quantity'] }}"></h4>


                                        <div class="cross">
                                            <a href="{{ route('frontend.cart.remove', $cart['id'] ?? array_search($cart, session('cart'))) }}" 
                                                class="btn-close" style="text-decoration:none;">
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach

                                <div class="col-xl-6 return">
                                    <a class="return_shop" href="{{ route('frontend.index') }}">Return to shop</a>
                                </div>
                                <div class="col-xl-6 update">
                                    <a class="update_cart" href="{{ route('frontend.shopping.cart') }}">Update cart</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-3 coupon">
                                    <h4>Coupon Code</h4>
                                </div>
                                <div class="col-xl-9 input d-flex">
                                    <input type="text" placeholder="Enter code">
                                    <div class="apply_coupon">
                                        <a href="">Apply Coupon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 cart-total">
                            <div class="heading">
                                <h4>Cart Total</h4>
                            </div>
                            <div class="row">
                                <div class="col-xl-9 info1">
                                    <h4>Subtotal:</h4>
                                </div>
                                <div class="col-xl-3 total">
                                    <h4>$</h4>
                                    <input class="total_amount" type="number" value="{{ collect(session('cart', []))->sum(fn($c) => ($c['discount'] ? $c['price'] - $c['discount'] : $c['price']) * $c['quantity']) }}">
                                </div>
                                <div class="col-xl-9 info1">
                                    <h4>Shipping:</h4>
                                </div>
                                <div class="col-xl-3 total">
                                    <h4>Free</h4>
                                </div>
                                <div class="col-xl-9 info_total">
                                    <h4>Total:</h4>
                                </div>
                                <div class="col-xl-3 amount_total">
                                    <h4>$</h4>
                                    <input class="all_amount" type="number" value="{{ collect(session('cart', []))->sum(fn($c) => ($c['discount'] ? $c['price'] - $c['discount'] : $c['price']) * $c['quantity']) }}">
                                </div>
                            </div>
                            <a href="{{ route('frontend.checkout') }}">
                                <div class="btn">
                                    <h4>Proceed to Checkout</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


@endsection