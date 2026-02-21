    <style>
        #product_slider .product_parent_sliders .add_to_cart .stock_btn{
            background-color: #d2d2d2;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #00B207;
            padding: 10px;
        }

        #product_slider .product_parent_sliders .add_to_cart .out-stock_btn{
            background-color: #d2d2d2;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: not-allowed;
            text-decoration: none;
            color: #00B207;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        #product_slider .product_parent_sliders .add_to_cart .stock_btn:hover {
            background-color: #00B207;
            color: #fff;
        }

        #product_slider .product_parent_sliders .add_to_cart .out-stock_btn:hover {
            background: var(--branding-error);
            color: #fff;
        }
    </style>

    <section id="product_slider">
        <div class="container">
            <div class="heading">
                <h4>Featured Products</h4>
            </div>
            <div class="product_parent_sliders">
                    @forelse ($products as $product)
                        <div class="col-xl-3 product_child">
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