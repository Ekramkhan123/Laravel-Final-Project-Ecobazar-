@extends('frontend.layout')

@section('frontend_content')

<form id="customer-logout-form"
      action="{{ route('frontend.customer.logout') }}"
      method="POST"
      style="display:none;">
    @csrf
</form>

    <form action="{{ route('frontend.customer.setting.post') }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf


    <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('frontend.index') }}">
                    <iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon>
                </a>
                <span>></span>
                <a href="{{ route('frontend.customer.dashboard') }}">My Account</a>
                <span>></span>
                <h4>Settings</h4>
            </div>
        </div>
    </section>

    <section id="customer">
        <div class="container">
            <div class="row">
                <!-- LEFT MENU -->
                <div class="col-xl-3 setting_menu">
                    @include('frontend.components.customer_navigation')
                </div>
                <!-- RIGHT CONTENT -->
                <div class="col-xl-9 setting_content">
                    <div class="card1">
                            <div class="card-header">
                                <h4>Account Settings</h4>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 order-2 order-xl-1 info1">
                                    <label for="name">Name</label>
                                    <input name="fname" id="fname" type="text" placeholder="Your name" value="{{ old('fname', $customer->fname) }}">
                                    @error('fname')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <label for="lname">Last name</label>
                                    <input name="lname" id="lname" type="text" placeholder="Your last name" value="{{ old('lname', $customer->lname) }}">
                                    @error('lname')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <label for="email">Email</label>
                                    <input name="email" id="email" type="email" placeholder="Email Address" value="{{ old('email', $customer->email) }}">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <label for="phone">Phone</label>
                                    <input name="phone" id="phone" type="text" placeholder="Phone number" value="{{ old('phone', $customer->phone) }}">
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="btn">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                                <div class="col-xl-6 order-1 order-xl-2 image_upload">
                                    <div class="profile-image-wrapper">
                                        <img src="{{ $customer->profile_image_url }}">

                                        <br>
                                        <div class="image_change">
                                            <input type="file" 
                                                id="profileInput" 
                                                name="profile_image" 
                                                accept="image/*" 
                                                hidden>

                                            <button type="button" id="chooseImageBtn">
                                                Choose Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card2">
                            <div class="row">
                                <div class="card-header">
                                    <h4>Billing Information</h4>
                                </div>
                                <div class="col-xl-4">
                                    <label for="name">Name</label>
                                    <br>
                                    <input name="fname" id="fname" type="text" placeholder="Your name" value="{{ old('fname', $customer->fname) }}">
                                    @error('fname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-xl-4">
                                    <label for="lname">Last name</label>
                                    <br>
                                    <input name="lname" id="lname" type="text" placeholder="Your last name" value="{{ old('lname', $customer->lname) }}">
                                    @error('lname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label for="company_name">Company Name <span>(optional)</span></label>
                                    <br>
                                    <input name="company_name" id="company_name" type="text" placeholder="Company name" value="{{ old('company_name', $customer->company_name) }}">
                                </div>                            
                                
                                <div class="col-xl-12">
                                    <label for="street_address">Street Address</label>
                                    <br>
                                    <input name="street_address" id="street_address" type="text" placeholder="Address" value="{{ old('street_address', $customer->street_address) }}">
                                    @error('street_address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-xl-4">
                                    <label for="country">Country / Region</label>
                                    <br>
                                    <input name="country" id="country" type="text" placeholder="Country" value="{{ old('country', $customer->country) }}">
                                    @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label for="state">States</label>
                                    <br>
                                    <input name="state" id="state" type="text" placeholder="States" value="{{ old('state', $customer->state) }}">
                                    @error('state')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label for="postcode">Zip Code</label>
                                    <br>
                                    <input name="postcode" id="postcode" type="number" placeholder="Zip Code" value="{{ old('postcode', $customer->postcode) }}">
                                    @error('postcode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-xl-6">
                                    <label for="email">Email</label>
                                    <br>
                                    <input name="email" id="email" type="email" placeholder="Email Address" value="{{ old('email', $customer->email) }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <label for="phone">Phone</label>
                                    <br>
                                    <input name="phone" id="phone" type="text" placeholder="Phone number" value="{{ old('phone', $customer->phone) }}">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="btn">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                                
                            </div>
                    </div>

                    <div class="card3">
                        <div class="card-header">
                            <h4>Change Password</h4>
                        </div>

                        <div class="password_change">
                            <div class="row">
                                <div class="col-xl-12 current_password">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" name="current_password"
                                    class="form-control"
                                            placeholder="Password">
                                        <span class="toggle-password"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.75 6.58333C0.75 6.58333 3.78 0.75 9.08333 0.75C14.3867 0.75 17.4167 6.58333 17.4167 6.58333C17.4167 6.58333 14.3867 12.4167 9.08333 12.4167C3.78 12.4167 0.75 6.58333 0.75 6.58333Z" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.08301 9.08398C9.74605 9.08398 10.3819 8.82059 10.8508 8.35175C11.3196 7.88291 11.583 7.24703 11.583 6.58398C11.583 5.92094 11.3196 5.28506 10.8508 4.81622C10.3819 4.34738 9.74605 4.08398 9.08301 4.08398C8.41997 4.08398 7.78408 4.34738 7.31524 4.81622C6.8464 5.28506 6.58301 5.92094 6.58301 6.58398C6.58301 7.24703 6.8464 7.88291 7.31524 8.35175C7.78408 8.82059 8.41997 9.08398 9.08301 9.08398V9.08398Z" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 new_password">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="password"
                                        class="form-control"
                                        placeholder="Password">
                                    <span class="toggle-password"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.75 6.58333C0.75 6.58333 3.78 0.75 9.08333 0.75C14.3867 0.75 17.4167 6.58333 17.4167 6.58333C17.4167 6.58333 14.3867 12.4167 9.08333 12.4167C3.78 12.4167 0.75 6.58333 0.75 6.58333Z" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.08301 9.08398C9.74605 9.08398 10.3819 8.82059 10.8508 8.35175C11.3196 7.88291 11.583 7.24703 11.583 6.58398C11.583 5.92094 11.3196 5.28506 10.8508 4.81622C10.3819 4.34738 9.74605 4.08398 9.08301 4.08398C8.41997 4.08398 7.78408 4.34738 7.31524 4.81622C6.8464 5.28506 6.58301 5.92094 6.58301 6.58398C6.58301 7.24703 6.8464 7.88291 7.31524 8.35175C7.78408 8.82059 8.41997 9.08398 9.08301 9.08398V9.08398Z" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></span>
                                </div>

                                <div class="col-xl-6 confirm_password">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control"
                                        placeholder="Password">
                                    <span class="toggle-password"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.75 6.58333C0.75 6.58333 3.78 0.75 9.08333 0.75C14.3867 0.75 17.4167 6.58333 17.4167 6.58333C17.4167 6.58333 14.3867 12.4167 9.08333 12.4167C3.78 12.4167 0.75 6.58333 0.75 6.58333Z" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.08301 9.08398C9.74605 9.08398 10.3819 8.82059 10.8508 8.35175C11.3196 7.88291 11.583 7.24703 11.583 6.58398C11.583 5.92094 11.3196 5.28506 10.8508 4.81622C10.3819 4.34738 9.74605 4.08398 9.08301 4.08398C8.41997 4.08398 7.78408 4.34738 7.31524 4.81622C6.8464 5.28506 6.58301 5.92094 6.58301 6.58398C6.58301 7.24703 6.8464 7.88291 7.31524 8.35175C7.78408 8.82059 8.41997 9.08398 9.08301 9.08398V9.08398Z" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></span>
                                </div>
                            </div>

                            <div class="btn">
                                <button type="submit">Change Password</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    </form>
@endsection
 
@push('frontend_script')

<script>
    const chooseBtn = document.getElementById('chooseImageBtn');
    const fileInput = document.getElementById('profileInput');
    const preview = document.getElementById('profilePreview');

    chooseBtn.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        const file = fileInput.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
        }
    });
</script>
<script>
    document.querySelectorAll('.toggle-password').forEach(icon => {
        icon.addEventListener('click', function () {
            const input = this.previousElementSibling;
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    });
</script>

<script>
    var obj = {};
    obj.cus_fname = $('#fname').val();
    obj.cus_lname = $('#lname').val();
    obj.cus_company = $('#company_name').val();
    obj.cus_phone = $('#phone').val();
    obj.cus_email = $('#email').val();
    obj.cus_street = $('#street_address').val();
    obj.cus_country = $('#country').val();
    obj.cus_state = $('#state').val();
    obj.cus_postcode = $('#postcode').val();
    obj.cus_note = $('#note').val();
    
    $('#sslczPayBtn').prop('postdata', obj);
</script>

@endpush

