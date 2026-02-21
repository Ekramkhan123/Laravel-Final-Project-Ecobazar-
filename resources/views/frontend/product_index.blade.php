@extends('frontend.layout')

@section('frontend_content')



    <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('frontend.index') }}">
                    <iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon>
                </a>
                <span>></span>
                <a href="{{ route('frontend.product') }}">Categories</a>
                <span>></span>
                <h4>
                    {{ $selectedCategory ? $selectedCategory->title : 'All' }}
                </h4>
            </div>
        </div>
    </section>


    <section id="product">  
        <div class="container">
            <div class="row">
                <div class="col-xl-3 filter_bar">
                    <div class="sidebar">
                        <a href="#" class="filter-btn"><span>Filter</span><span><iconify-icon icon="hugeicons:filter-horizontal" width="24" height="24"></iconify-icon></span></a>

                        <div class="catagories">
                            <h4 class="catagory_up">All Categories <span><iconify-icon icon="ep:arrow-down" width="22" height="22"></iconify-icon></span></h4>
                        </div>

                       <div class="catagories_content">
                            <div class="row">
                                <div class="col-xl-2 catagory">
                                    <h4>
                                        <input type="radio" id="all" name="myRadioGroup" class="category-button" value="All" {{ $categoryId == 'All' ? 'checked' : '' }}>
                                    </h4>
                                    @foreach ($categories as $category)
                                        <h4>
                                            <input type="radio" id="category_{{ $category->id }}" name="myRadioGroup" class="category-button" value="{{ $category->id }}" {{ $categoryId == $category->id ? 'checked' : '' }}>
                                        </h4>
                                    @endforeach
                                </div>

                                <div class="col-xl-10 info">
                                    <p>All<span>({{ $total }})</span></p>

                                    @foreach ($categories as $category)
                                    <p> {{ $category->title }}<span>( {{ $category->products_count }} )</span></p>
                                    @endforeach
                        
                                </div>
                            </div>
                        </div>
                         
                        <div class="progress_heading">
                            <h4 class="catagory_up">Price<span><iconify-icon icon="ep:arrow-down" width="22" height="22"></iconify-icon></span></h4>
                        </div>
                        <div class="progress_bar">
                            <div class="range-slider">
                                <div class="slider-track"></div>
                                <div class="slider-range"></div>
                                <div class="slider-handle handle-min" data-type="min"></div>
                                <div class="slider-handle handle-max" data-type="max"></div>
                            </div>
                            <div class="inputs">
                                <span>
                                    <label>Price:</label>
                                    <input type="number" id="min-input" value="" min="0" max="2000">
                                    <label>$</label>
                                    <label>-</label>
                                    <input type="number" id="max-input" value="" min="0" max="2000">
                                    <label>$</label>
                                </span>
                            </div>
                        </div>

                            <div class="rating_heading">
                                <h4>Rating<span><iconify-icon icon="ep:arrow-down" width="22" height="22"></iconify-icon></span></h4>
                            </div>
                            <div class="rating_content">
                                <div class="row">
                                    <div class="col-xl-1">
                                        <input type="checkbox" class="my-checkbox" checked>    
                                        <input type="checkbox" class="my-checkbox">
                                        <input type="checkbox" class="my-checkbox">
                                        <input type="checkbox" class="my-checkbox">
                                        <input type="checkbox" class="my-checkbox">
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="icons">
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>                                               
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        </div> 
                                        <div class="icons">
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>                                               
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        </div> 
                                        <div class="icons">
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>                                               
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        </div> 
                                        <div class="icons">
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>                                               
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        </div> 
                                        <div class="icons">
                                            <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>                                               
                                            <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        </div> 
                                    </div>
                                    <div class="col-xl-4">
                                        <h4>5.0</h4>
                                        <h4>4.0 and up</h4>
                                        <h4>3.0 and up</h4>
                                        <h4>2.0 and up</h4>
                                        <h4>1.0 and up</h4>
                                    </div>

                                </div>
                            </div>

                            <div class="tags_heading">
                                <h4>Popular Tags<span><iconify-icon icon="ep:arrow-down" width="22" height="22"></iconify-icon></span></h4>
                            </div>
                            <div class="tag_option">
                                @foreach ($tags as $tag)
                                    <span>{{ $tag->name }}</span>
                                @endforeach

                            </div>

                        <div class="discount-banner" style=" background-image: url('{{ asset('frontend/assets/image/vegetable_page/discount_banner.png') }}');">
                            <h4>79% <span>Discount</span></h4>
                            <p>On your first order</p>
                            <div class="btn">
                                <a href="{{ route('frontend.index') }}">Shop Now<span><iconify-icon icon="line-md:arrow-right" width="18" height="18"></iconify-icon></span></a>
                            </div>
                        </div>

                        <div class="sale-products">
                            <h3>Sale Products</h3>

                            
                            @foreach ($saleProducts as $sale)
                            <a style="text-decoration: none;" href="{{ route('frontend.product.details', $sale->id) }}">
                            <div class="row mb-3">
                                <div class="col-xl-5 img">
                                    <img src="{{ asset('storage/' . $sale->images[0]->image) }}" alt="">
                                </div>

                                <div class="col-xl-7 info">
                                    <p>{{ $sale->title }}</p>

                                    <span>
                                        ${{ $sale->price - $sale->dis_price }}
                                        <del>${{ $sale->price }}</del>
                                    </span>

                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span class="star"><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach
                        </div>

                    </div>                    
                </div>

                <div class="col-xl-9 product_part">
                    <div class="top-bar">
                        <div class="col-xl-6 select">
                            <h4>Sort by:</h4>
                            <select onchange="window.location.href='{{ url()->current() }}?sort=' + this.value;">
                                <option value="latest" {{ $sort == 'latest' ? 'selected' : '' }}>Latest</option>
                                <option value="old" {{ $sort == 'old' ? 'selected' : '' }}>Old</option>
                            </select>

                        </div>
                        <div class="col-xl-6 result">
                            <p>{{ $total }}<span>Results Found</span></p>
                        </div>
                    </div>  
                    <div class="row d-flex flex-wrap justify-content-start">
                        @forelse ($products as $product)
                            <div class="col-xl-4 filter {{$product->category_id }}">
                                <div class="img">
                                    <img class="img-fluid" src="{{ asset('storage/' . $product->images[0]->image) }}" alt="">
                                </div>
                                <div class="details ">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4>{{ $product->title }}</h4>
                                            <b>${{ $product->dis_price ? $product->price - $product->dis_price : $product->price }}</b>
                        
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

                                <div class="preview_icons">
                                    <ul>
                                        <li>
                                            <a data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Wish list" href="{{ route('frontend.wish.list', $product->id) }}"><iconify-icon icon="clarity:heart-line" width="24" height="24"></iconify-icon></iconify-icon></a>                                   
                                        </li>
                                        <li>
                                            <a data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="View" href="{{ route('frontend.product.details', $product->id) }}"><iconify-icon icon="ph:eye-thin" width="24" height="24"></iconify-icon></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        @empty
                            <p>No products found.</p>
                        @endforelse                          
                    </div>
                    <div class="page_slider">
                        <div class="pagination">
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
    const categoryButtons = document.querySelectorAll('.category-button');
    const currentSort = "{{ $sort }}";

    categoryButtons.forEach(button => {
        button.addEventListener('change', function() {
            const category = this.value;
            window.location.href = "{{ url()->current() }}?category=" + category + "&sort=" + currentSort;
        });
    });
</script>

@endsection

