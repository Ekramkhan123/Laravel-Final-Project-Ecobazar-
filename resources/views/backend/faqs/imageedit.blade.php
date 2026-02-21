@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}"> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

 <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0 d-flex"><span><iconify-icon icon="material-symbols:note-add-outline-sharp" width="24" height="24"></iconify-icon></span>Image Change</h4>
            <a class="btn btn-primary" href="{{ Route('dashboard.faq.show') }}">Show All</a>
        </div>

        <div class="card-body">
            <form action="{{ route('dashboard.faq.imageupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="row">
                    <div class="col-lg-8 mt-2">
                        <label class="mb-1" for="">Image</label>
                        <input type="file" class="form-control p-3" name="image" id="">
                        @if($edit_faqimage)
                            <img style="width:200px; height:150px;" src="{{ asset('storage/Faqs/'.$edit_faqimage->image) }}" class="img-fluid mt-3">
                        @else
                            <span>No image uploaded yet</span>
                        @endif
                    </div>
                    <div class="col-lg-4 mt-2">
                        <button type="submit" class="btn btn-primary mt-4 p-3 w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
