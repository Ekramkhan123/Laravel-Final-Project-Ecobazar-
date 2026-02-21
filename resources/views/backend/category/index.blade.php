@extends('backend.layout')

@push('backend_css')
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
                top: 7px;
                right: 5px;
                width: 30px;
            }

            .select2-container--default .select2-selection--single
            {
                background-color: #fff;
                border: 1px solid #dbd8d8;
                border-radius: 4px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: start;
                text-align: left;
            }
        </style>
@endpush

@section('backend_content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0 d-flex"><span><iconify-icon icon="material-symbols:note-add-outline-sharp" width="24" height="24"></iconify-icon></span>Category Add</h4>
            <a class="btn btn-primary" href="{{ Route('dashboard.category.show') }}">Show All</a>
        </div>

        <div class="card-body">
            <form action="{{ route('dashboard.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <label class="mb-1" for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control p-3 mb-3" placeholder="Enter title" value="">

                        @error('title')
                            <div class="text-danger mb-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label class="mb-1" for="">Status <span class="text-danger">*</span></label>
                        <select name="status" id="" class="form-control p-3">
                            <option value="" selected disabled>--Select Status--</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>

                        @error('status')
                            <div class="text-danger mt-3 mb-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label class="mb-1" for="">Meta Title</label>
                        <input type="text" class="form-control p-3" name="meta_title" id="" placeholder="Enter meta title" value="">
                    </div>

                    <div class="col-lg-8">
                        <label class="mb-1" for="">Meta Description</label>
                        <textarea class="form-control p-1" name="meta_description" id="" placeholder="Enter meta description"></textarea>
                    </div>

                    <div class="col-lg-8 mt-2">
                        <label class="mb-1" for="">Image</label>
                        <input type="file" class="form-control p-3" name="meta_image" id="">
                    </div>

                    <div class="col-lg-4 mt-2">
                        <button type="submit" class="btn btn-primary mt-4 p-3 w-100">Submit</button>
                    </div>
                </div>
            
            </form>

        </div>
    </div>
    
@endsection

@push('backend_js')
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    
@endpush
