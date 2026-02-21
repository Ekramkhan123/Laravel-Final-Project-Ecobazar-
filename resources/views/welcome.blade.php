@extends('frontend.layout')

@section('frontend_content')

    <section id="banner" >
        <div class="container py-5">
            <div class="sliders">
                <div class="slider">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="img-fluid" src="{{ asset('frontend/assets/image/food1.png') }}" alt="">
                        </div>
                        <div class="col-xl-6 contains">
                            <h4>Welcome to shopery</h4>
                            <h2>Fresh & Healthy Organic Food</h2>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                        </div>
                    </div>
                    <div class="offer">
                        <h3>70%</h3>
                        <p>OFF</p>
                    </div>
                </div>
                <div class="slider">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="img-fluid" src="{{ asset('frontend/assets/image/food2.png') }}" alt="">
                        </div>
                        <div class="col-xl-6 contains">
                            <h4>Welcome to shopery</h4>
                            <h2>Fresh & Healthy Organic Food</h2>
                            <h3>Sale up to <span>30% OFF</span></h3>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="img-fluid" src="{{ asset('frontend/assets/image/food3.png') }}" alt="">
                        </div>
                        <div class="col-xl-6 contains">
                            <h4>Welcome to shopery</h4>
                            <h2>Fresh & Healthy Organic Food</h2>
                            <h3>Sale up to <span>30% OFF</span></h3>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="supports">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="shipping">
                            <span><iconify-icon icon="fa-solid:shipping-fast" width="30" height="30"></iconify-icon></span>
                        </div>
                        <h4>Free Shipping</h4>
                        <p>Free shipping with discount</p>
                    </div>
                    <div class="col-xl-3">
                        <div class="shipping">
                            <span><iconify-icon icon="simple-line-icons:earphones-alt" width="30" height="30"></iconify-icon></iconify-icon></span>
                        </div>
                        <h4>Free Shipping</h4>
                        <p>Free shipping with discount</p>
                    </div>
                    <div class="col-xl-3">
                        <div class="shipping">
                            <span><iconify-icon icon="solar:bag-check-outline" width="32" height="32"></iconify-icon></span>
                        </div>
                        <h4>Free Shipping</h4>
                        <p>Free shipping with discount</p>
                    </div>
                     <div class="col-xl-3">
                        <div class="shipping">
                            <span><iconify-icon icon="ph:package" width="38" height="38"></iconify-icon></span>
                        </div>
                        <h4>Free Shipping</h4>
                        <p>Free shipping with discount</p>
                    </div>                                                          
                </div>
            </div>
        </div>
    </section>

    <section id="product">
        <div class="container">
            <div class="heading">
                <h4>Introducing Our Products</h4>
            </div>

            <div class="product_btns">
                <button class="category-button active" data-filter="All">All</button>
                @foreach ($categories as $category)
                    <button class="category-button" data-filter="{{ $category->id }}">{{ $category->title }}</button>
                @endforeach
            </div>

            <div class="row d-flex flex-wrap justify-content-start">
                @forelse ($products as $product)
                    <div class="col-xl-3 filter All {{$product->category_id }}">
                        <div class="img">
                            <img class="img-fluid pt-2" src="{{ asset('storage/' . $product->images[0]->image) }}" alt="">
                        </div>
                        <div class="details">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>{{ $product->title }}</h4>
                                    <b>
                                        ${{ $product->dis_price ? $product->price - $product->dis_price : $product->price }}
                                    </b>
                                    @if($product->dis_price)
                                        <del>${{ $product->price }}</del>
                                    @endif
                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                        @if ($product->is_stock)
                                            <a class="stock_btn" href="{{ route('frontend.add.to.cart', $product->id) }}">
                                                <iconify-icon icon="ph:handbag-thin" width="24" height="24"></iconify-icon>
                                            </a>
                                        @else
                                            <a href="#" class="out-stock_btn">
                                                <iconify-icon icon="ph:handbag-thin" width="24" height="24"></iconify-icon>
                                            </a>
                                        @endif
                                </div>
                            </div>
                        </div>
                        @if($product->dis_price)
                            @php
                                $percentage = ($product->dis_price / $product->price) * 100;
                            @endphp
                            <span class="discount-badge">
                                Sale <b>{{ number_format($percentage, 0) }}%</b>
                            </span>
                        @endif
                        <div class="preview_icons">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="left" title="Wish list" href="{{ route('frontend.wish.list', $product->id) }}">
                                        <iconify-icon icon="clarity:heart-line" width="24" height="24"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="left" title="View" href="{{ route('frontend.product.details', $product->id) }}">
                                        <iconify-icon icon="ph:eye-thin" width="24" height="24"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @empty
                    <p>No products found.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section id="items_shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-4" style="background-image: url('{{ asset('frontend/assets/image/milk.png') }}');">
                    <div class="row">
                        <div class="col-xl-6 info">
                            <h4>100% Fresh Cow Milk</h4>
                            <p class=>Starting at <span class="price"> $14.99</span></p>
                            <div class="btn">
                                <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                            </div>                        </div>
                        <div class="col-xl-6"></div>
                    </div>
                </div>
                <div class="col-xl-4" style="background-image: url('{{ asset('frontend/assets/image/softdrink.png') }}');">
                    <div class="row">
                        <div class="col-xl-6"></div>
                        <div class="col-xl-6 info2">
                            <p>Drink Sale</p>
                            <h4>Water & Soft Drink</h4>
                            <div class="btn">
                                <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4" style="background-image: url('{{ asset('frontend/assets/image/breakfast.png') }}');">
                    <div class="row">
                        <div class="col-xl-6 info3">
                            <p>100% Organic</p>
                            <h4>Quick Breakfast</h4>
                            <div class="btn">
                                <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                            </div>                        </div>
                        <div class="col-xl-6"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="best_deal">
        <div class="container" style="background-image: url('{{ asset('frontend/assets/image/Best_deal.png') }}');">
            <div class="heading">
                <span>Best Deals</span>
                <h4>Our Special Products <br> Deal of the Month</h4>
            </div>
            <ul class="count_down" data-time="10/25/2026">
                <li><span class="days">00</span><p class="days_text">Days</p></li>
                <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
                <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
                <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
            </ul>
            <div class="btn">
                <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
            </div>
        </div>
    </section>

    @include('frontend.components.product_slider')

        <section id="video">
        <div class="container">
            <div class="heading">
                <h4>What our Clients Says</h4>
            </div>
            <div class="row g-4">
                <div class="col-xl-4">
                    <div class="author_review">
                        <span class="quote"><iconify-icon icon="entypo:quote" width="38" height="38"></iconify-icon></span>
                        <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
                    </div>
                    <div class="review">
                        <img src="{{ asset('frontend/assets/image/client1.png') }}" alt="">
                        <h4>Jenny Wilson</h4>
                        <span>Customer</span>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="author_review">
                        <span class="quote"><iconify-icon icon="entypo:quote" width="38" height="38"></iconify-icon></span>
                        <p>“Proin sed neque nec tellus malesuada ultrices eget a justo. Nullam a nibh faucibus, semper risus ac, ultricies est. Maecenas eget purus in enim imperdiet dapibus in ac mi. Fusce faucibus lacus felis”</p>
                    </div>
                    <div class="review">
                        <img src="{{ asset('frontend/assets/image/client2.png') }}" alt="">
                        <h4>Guy Hawkins</h4>
                        <span>Customer</span>
                    </div>                   
                </div>
                <div class="col-xl-4">
                    <div class="author_review">
                        <span class="quote"><iconify-icon icon="entypo:quote" width="38" height="38"></iconify-icon></span>
                        <p>“Nam sed odio diam. Mauris sagittis sapien sed convallis cursus. Proin mattis ultrices urna ac eleifend. Cras vel nisi nec lectus sagittis venenatis. Curabitur laoreet leo sed lorem pulvina”</p>
                    </div>
                    <div class="review">
                        <img src="{{ asset('frontend/assets/image/client3.png') }}" alt="">
                        <h4>Kathryn Murphy</h4>
                        <span>Customer</span>
                    </div>                   
                </div>                               
            </div>

            <div class="play" style="background-image: url('{{ asset('frontend/assets/image/Video.png') }}');">
                <span>Video</span>
                <h4>We’re the Best Organic <br> Farm in the World</h4>
                <a class="venobox" 
                    data-gall="gall-video" 
                    data-autoplay="true" 
                    data-vbtype="video" 
                    href="https://youtu.be/TD_N2VR3P1s">
                    <span class="icon1"><iconify-icon icon="fluent:play-circle-20-regular" width="83" height="83"></iconify-icon></span>
                    <span class="icon2"><iconify-icon icon="fluent:play-circle-20-regular" width="33" height="33"></iconify-icon></span>
                </a>

            </div>
        </div>

    </section>

    <section id="news">
        <div class="container">
            <div class="heading">
                <h4>Latest News</h4>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <img src="{{ asset('frontend/assets/image/news (1).png') }}" alt="">
                    <div class="calender">
                        <h4>23</h4>
                        <p>Jan</p>
                    </div>
                    <h4>Curabitur porttitor orci eget neque accumsan venenatis.</h4>
                    <p>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et pulvinar at, posuere eu neque.</p>
                    <a href="">Read More <span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                </div>
                <div class="col-xl-4">
                    <img src="{{ asset('frontend/assets/image/news (2).png') }}" alt="">
                    <div class="calender">
                        <h4>23</h4>
                        <p>Jan</p>
                    </div>
                    <h4>Curabitur porttitor orci eget neque accumsan venenatis.</h4>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <a href="">Read More <span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                </div>
                <div class="col-xl-4">
                    <img src="{{ asset('frontend/assets/image/news (3).png') }}" alt="">
                    <div class="calender">
                        <h4>23</h4>
                        <p>Jan</p>
                    </div>
                    <h4>Curabitur porttitor orci eget neque accumsan venenatis.</h4>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <a href="">Read More <span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                </div>                              
            </div>
        </div>
    </section>

@endsection