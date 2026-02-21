@extends('backend.layout')
@section('backend_content')
@push('backend_css')
    <link rel="stylesheet" href="{{ asset('assets/css/aksFileUpload.min.css') }}">
@endpush
    <div class="card-header">
        <h3>Profile Update</h3>
    </div>
    <div class="card-body px-5">

            <div class="row g-4 ">
                    <div class="col-lg-4 h-100 rounded">
                        <form action="{{ route('dashboard.profile.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="shadow-sm p-4">
                                <h5>Basic Information</h5>
                                <hr>
                                <label for="name" class="name mb-2">Name</label>
                                <input value="{{ $authenticateUserInfo->name }}" type="text" name="name" placeholder="Enter Your Name" class="form-control p-3 mb-3">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    
                                @enderror
                                <label for="email" class="email mb-2">Email</label>
                                <input value="{{ $authenticateUserInfo->email }}" type="text" name="email" placeholder="Enter Your Email" class="form-control p-3 mb-3">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <button type="submit" class="btn btn-primary p-3 w-100">Update</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 h-100 rounded">
                        <form action="{{ route('dashboard.password.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="shadow-sm p-4">
                                <h5>Password Update</h5>
                                <hr>
                                <label for="Current_password" class="password mb-2">Current Password</label>
                                <input value="" type="password" name="current_password" placeholder="Enter Your Current Password" class="form-control p-3 mb-3">
                                @error('current_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <label for="new_password" class="password mb-2">New Password</label>
                                <input value="" type="password" name="new_password" placeholder="Enter Your New Password" class="form-control p-3 mb-3">
                                @error('new_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <label for="confirm_password" class="password mb-2">Confirm Password</label>
                                <input value="" type="password" name="confirm_password" placeholder="Enter Your Confirm Password" class="form-control p-3 mb-3">
                                @error('confirm_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <button type="submit" class="btn btn-primary p-3 w-100">Update Password</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 h-100 rounded">
                        <form action="{{ route('dashboard.image.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="shadow-sm p-4">
                                <h5>Profile Image Update</h5>
                                <hr>

                                <input name="image" accept="image/*" hidden type='file' id="imgInp" />
                                <label for="imgInp" class="image mb-2 mt-2 " style=" display:flex; justify-content:center; align-item:center; text-align:center;">
                                    <div>
                                        <img  class="img-fluid p-2 border shadow-sm" style="width:200px; height:170px;" id="blah" src="{{ Auth::user()->image ? env('http://127.0.0.1:8000'). '/storage/profile/' . Auth::user()->image : asset('assets/img/placeholder/placeholder.png')}}" alt="your image" />
                                        <input type="text" value="{{ $authenticateUserInfo->image }}" name="name" class="form-control p-3 mt-3">
                                    </div>
                                </label>

                                <br>
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <button type="submit" class="btn btn-primary p-3 w-100 mt-2">Update Profile Image</button>
                            </div>
                        </form>
                    </div>
            </div>
    </div>
@endsection

@push('backend_js')
    <script src="{{ asset('assets/js/aksFileUpload.min.js') }}"></script>

    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endpush