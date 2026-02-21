@extends('backend.layout')
@section('backend_content')
@push('backend_css')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/filepond.css') }}">
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
                top: 25px;
                right: 5px;
                width: 30px;
            }

            .select2-container--default .select2-selection--single
            {
                background-color: #fff;
                border: 1px solid #dbd8d8;
                border-radius: 4px;
                height: 75px;
                display: flex;
                align-items: center;
                justify-content: start;
                text-align: left;
            }
        </style>
@endpush

    <div class="content-wrapper">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 d-flex"><span><iconify-icon icon="material-symbols:note-add-outline-sharp" width="24" height="24"></iconify-icon></span>Product Images Add</h4>
                <a class="btn btn-primary" href="{{ route('dashboard.product.show') }}">Show Images</a>
            </div>

            <div class="card-body">

                <form action="{{ route('dashboard.product.images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <label class="mb-1" for="images">Image Upload<span class="text-danger">*</span></label>
                            <input style="border-radius:10px;" name="images[]" multiple type="file">
                            @error('images')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label class="mb-1" for="product_id">Product Id<span class="text-danger">*</span></label>
                            <select class="js-example-basic-single form-control" name="product_id">
                                <option value="" selected disabled>--Select Product--</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                @endforeach
                            </select>
                            @error('product_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary p-3 w-100 mt-5">Uploads</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection

@push('backend_js')
    <script src="{{ asset('assets/js/filepond.js') }}"></script>

    <script>
        const inputElement = document.querySelector('input[type="file"]');

        const pond = FilePond.create(inputElement, 
        {
            storeAsFile: true
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

@endpush