@extends('backend.layout')
@section('backend_content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit User</h5>
            <a href="{{ route('dashboard.rolePermission.list.users') }}" class="btn btn-primary">User Lists</a>
        </div>

        <div class="card-body">
            <form action="{{ route('dashboard.rolePermission.update.user', $editUser->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-lg-3 pt-3 ">
                        <label class="d-flex justify-content-center align-items-center" for="imgInp">
                            <img id="user_image" style="max-width: 200px; width: 100%; border: 1px solid rgb(238, 236, 236); padding:10px; cursor:pointer; border-radius: 8px;" class="img-fluid" src="{{ $editUser->image ? asset( 'storage/profile/' . $editUser->image) : asset('assets/img/placeholder/placeholder.png') }}" alt="">
                        </label>
                        <input value="{{ $editUser->image }}"  name="user_image" hidden accept="image/*" type="file" id="imgInp">
                        
                        @error('user_image')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror

                        <h4 class="remove_btn" style="margin-top: 10px; display:none; text-align:center; cursor: pointer;"><span><iconify-icon icon="flat-color-icons:remove-image" width="44" height="44"></iconify-icon></span></h4>

                    </div>
                    <div class="col-lg-9 p-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="user_name">User Name:</label>
                                <input value="{{ $editUser->name }}" type="text" name="user_name" id="" class="form-control p-3" placeholder="User name">
                                @error('user_name')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="user_email">User Email:</label>
                                <input value="{{ $editUser->email }}" type="email" name="user_email" id="" class="form-control p-3" placeholder="User email">
                                @error('user_email')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label for="user_password">User Password:</label>
                                <input type="password" name="user_password" id="" class="form-control p-3" placeholder="User password">
                                @error('user_password')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label for="user_confirm_password">Confirm Password:</label>
                                <input type="password" name="user_confirm_password" id="" class="form-control p-3" placeholder="Confirm password">
                                @if(@session('pass_error'))
                                    <p class="text-danger">{{ session('pass_error') }}</p>
                                @endif           
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary p-2 w-100 mt-5">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('backend_js')

<script>
    let defaultImage = `{{ asset('assets/img/placeholder/placeholder.png') }}`;


    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            user_image.src = URL.createObjectURL(file)
            $('.remove_btn').show()
        }
    }

    $('.remove_btn').on('click', function(){
        $('#user_image').attr('src', defaultImage)
        $('.remove_btn').hide()
    })
</script>
    
@endpush