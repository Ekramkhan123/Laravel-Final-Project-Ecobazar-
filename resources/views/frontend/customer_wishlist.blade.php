@extends('frontend.layout')

@section('frontend_content')

<form id="customer-logout-form"
      action="{{ route('frontend.customer.logout') }}"
      method="POST"
      style="display:none;">
    @csrf
</form>

    <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('frontend.index') }}">
                    <iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon>
                </a>
                <span>></span>
                <a href="{{ route('frontend.customer.dashboard') }}">My Account</a>
                <span>></span>
                <h4>
                    Wishlist
                </h4>
            </div>
        </div>
    </section>

    <section id="customer">
        <div class="container">
            <div class="row">
                <!-- LEFT MENU -->
                <div class="col-xl-3 wishlist_menu">
                    @include('frontend.components.customer_navigation')
                </div>
                <!-- RIGHT CONTENT -->
                <div class="col-xl-9 customer_wishlist">
                    <div class="heading">
                        <h4>My Wishlist</h4>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 info">
                            <h4>Product</h4>
                        </div>
                        <div class="col-xl-2 info">
                            <h4>Price</h4>
                        </div>
                        <div class="col-xl-2 info">
                            <h4>Stock Status</h4>
                        </div>
                        <div class="col-xl-3">
                        </div>
                        <hr>

                        @foreach (session('wish', []) as $id => $wish)
                            <div class="col-xl-5 product">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $wish['image'] ?? '') }}" alt="">
                                </div>
                                <h4>{{ $wish['title'] }}</h4>
                            </div>
                            <div class="col-xl-2 Price">
                                <h4>${{$wish['discount'] ? $wish['price'] - $wish['discount'] : $wish['price'] }}</h4>
                                @if($wish['discount'])
                                    <del>${{ $wish['price'] }}</del>
                                @endif
                            </div>
                            <div class="col-xl-2 stock">
                                <div class="btn bg-{{ $wish['stock'] == 1 ? 'info' : 'danger' }}" style="color: white !important; width: 150px;">
                                    <h4>{{ $wish['stock'] ? 'In Stock' : 'Out of Stock' }}</h4>
                                </div>
                            </div>
                            <div class="col-xl-3 cart">
                                @if ($wish['stock'])
                                    <a class="stock_btn" href="{{ route('frontend.add.to.cart', $wish['id'] ?? array_search($wish, session('wish'))) }}">Add to Cart</a>
                                @else
                                    <a href="#" class="out-stock_btn">Add to Cart</a>
                                @endif
                                <div class="cross">
                                    <a href="{{ route('frontend.wish.remove', $wish['id'] ?? array_search($wish, session('wish'))) }}">
                                        <iconify-icon icon="akar-icons:cross" width="18" height="18"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
    
                        <div class="col-xl-12 social_media d-flex">
                            <h4>Share:</h4>
                            <span><iconify-icon icon="line-md:facebook" width="24" height="24"></iconify-icon></span>
                            <span><iconify-icon icon="mdi:twitter" width="24" height="24"></iconify-icon></span>
                            <span><iconify-icon icon="formkit:pinterest" width="24" height="24"></iconify-icon></span>
                            <span><iconify-icon icon="hugeicons:instagram" width="24" height="24"></iconify-icon></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection