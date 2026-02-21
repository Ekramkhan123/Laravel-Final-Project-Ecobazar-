@extends('backend.layout')
@section('backend_content')
@push('backend_css')
    <link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}"> 
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .select2-container
            {
                box-sizing: border-box;
                display: inline-block;
                margin: 0;
                position: relative;
                vertical-align: middle;
                height: 40px;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
                color: #797b7c;
                line-height: 28px;
            }

            .select2-container--default .select2-selection--single .select2-selection__arrow {
                height: 26px;
                position: absolute;
                top:12px;
                right: 5px;
                width: 30px;
            }

            .select2-container--default .select2-selection--single
            {
                background-color: #fff;
                border: 1px solid #dbd8d8;
                border-radius: 4px;
                height: 55px;
                display: flex;
                align-items: center;
                justify-content: start;
                text-align: left;
            }

            #descriptions{
                height: 300px !important;
            }

            #features{
                height: 300px !important;
            }

            .rte-modern.rte-desktop.rte-toolbar-default {
                min-width: 520px;
            }
        </style>
@endpush

    <div class="content-wrapper">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 d-flex"><span><iconify-icon icon="material-symbols:note-add-outline-sharp" width="24" height="24"></iconify-icon></span>Product Add</h4>
                <a class="btn btn-primary" href="{{ route('dashboard.product.show') }}">Show All</a>
            </div>

            <div class="card-body">

                <form action="{{ route('dashboard.product.create') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="mb-1" for="title">Title:<span class="text-danger">*</span></label>
                            <input name="title" type="text" class="form-control p-3 mb-3" placeholder="Product title">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-4">
                            <label class="mb-1">Tags</label>
                            <div id="tag-inputs-container">
                                <div class="tag-input-group mb-3">
                                    <input type="text" name="tags[]" class="form-control p-3" placeholder="Enter tag" required>
                                </div>
                            </div>
                            
                            <button type="button" class="btn btn-primary mb-3" id="add-tag-btn">
                                + Add Another Tag
                            </button>
                        </div>

                        <div class="col-lg-4">
                            <label class="mb-1" for="title">Product Category Id:<span class="text-danger">*</span></label>
                            <select class="js-example-basic-single form-control" name="category_id">
                                <option value="" selected disabled>--Select Category--</option>                            
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>

                                @endforeach 
                            </select>
                             @error('category_id')
                                <p class="text-danger mt-4">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-4 mt-4">
                            <label class="mb-1" for="price">Price:<span class="text-danger">*</span></label>
                            <input name="price" type="number" class="form-control p-3 mb-3" placeholder="Product price">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-4 mt-4">
                            <label class="mb-1" for="dis_price">Discount Price:</label>
                            <input name="dis_price" type="number" class="form-control p-3 mb-3" placeholder="Product discount price">
                        </div>

                        <div class="col-lg-2 mt-4">
                            <label class="mb-1" for="status">Status:<span class="text-danger">*</span></label>
                            <select name="status" class="form-control p-3 mb-3">
                                <option value="">--- Select Status ---</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                             @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-2 mt-4">
                            <label class="mb-1" for="stock">Stock:<span class="text-danger">*</span></label>
                            <select name="stock" class="form-control p-3 mb-3">
                                <option value="">--- Select Stock ---</option>
                                <option value="1">In Stock</option>
                                <option value="0">Out of Stock</option>
                            </select>
                            @error('stock')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-lg-6 mb-3">
                                <label class="mb-1" for="descriptions">Descriptions:</label>
                                <div id="descriptions">
                                </div>
                                <textarea hidden name="descriptions" id="allData"></textarea>
                            </div>
  
                            <div class="col-lg-6 mb-3 ml-2">
                                <label class="mb-1" for="features">Features:</label>
                                <div id="features">
                                </div>
                                <textarea hidden name="features" id="allData2"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-4">
                            <h5>Additional Information</h5>
                        </div>

                        <div class="col-lg-4">
                            <label class="mb-1" for="weight">Weight:</label>
                            <input type="text" name="weight" class="form-control p-3 mb-3" placeholder="Product weight">
                        </div>

                        <div class="col-lg-4">
                            <label class="mb-1" for="color">Color:</label>
                            <input type="text" name="color" class="form-control p-3 mb-3" placeholder="Product color">
                        </div>

                        <div class="col-lg-4">
                            <label class="mb-1" for="type">Type:</label>
                            <input type="text" name="type" class="form-control p-3 mb-3" placeholder="Product type">
                        </div>

                        <div class="col-lg-5">
                            <label class="mb-1" for="">Meta Title</label>
                            <input type="text" class="form-control p-3 mb-3" name="meta_title" id="" placeholder="Enter meta title" value="">
                        </div>

                        <div class="col-lg-7">
                            <label class="mb-1" for="">Meta Description</label>
                            <textarea class="form-control pt-1 mb-3" name="meta_description" id="" placeholder="Enter meta description"></textarea>
                        </div>


                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary p-3 w-100">Uploads</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@push('backend_js')

<script src="{{ asset('assets/js/rte.js') }}"></script>
<script src="{{ asset('assets/js/all_plugins.js') }}"></script>
<script>
    var editor1 = new RichTextEditor("#descriptions");
    $('form').on('submit', function() {
          $('#allData').val(editor1.getHTMLCode());
        });
</script>

<script>
    var editor2 = new RichTextEditor("#features");
    $('form').on('submit', function() {
          $('#allData2').val(editor2.getHTMLCode());
        });
</script>


<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@endpush