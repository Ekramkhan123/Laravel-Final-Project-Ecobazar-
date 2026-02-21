@extends('frontend.layout')

@section('frontend_content')

<form id="customer-logout-form"
      action="{{ route('frontend.customer.logout') }}"
      method="POST"
      style="display:none;">
    @csrf
</form>

<form action="{{ route('frontend.customercheckout.order') }}" method="post">
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
                <a href="{{ route('frontend.customer.shoppingcart') }}">Shopping cart</a>
                <span>></span>
                <h4>
                    Checkout
                </h4>
            </div>
        </div>
    </section>

    <section id="customer">
        <div class="container">
            <div class="row">
                <!-- LEFT MENU -->
                <div class="col-xl-3 checkout_menu">
                    @include('frontend.components.customer_navigation')
                </div>
                <!-- RIGHT CONTENT -->
                <div class="col-xl-9 ">
                    <div class="row">
                        <div class="col-xl-8 billing_address">
                            <div class="row">
                                <h4>Billing Information</h4>
                                <div class="col-xl-4">
                                    <label for="name">Name</label>
                                    <br>
                                    <input name="fname" type="text" value="{{ old('fname', $customer->fname) }}">
                                    @error('fname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-xl-4">
                                    <label for="lname">Last name</label>
                                    <br>
                                    <input name="lname" type="text" value="{{ old('lname', $customer->lname) }}">
                                    @error('lname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label for="company_name">Company Name <span>(optional)</span></label>
                                    <br>
                                    <input name="company_name" type="text" value="{{ old('company_name', $customer->company_name) }}">
                                </div>
                                
                                
                                <div class="col-xl-12">
                                    <label for="street_address">Street Address</label>
                                    <br>
                                    <input name="street_address" type="text" value="{{ old('street_address', $customer->street_address) }}">
                                    @error('street_address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-xl-4">
                                    <label for="country">Country / Region</label>
                                    <br>
                                    <input name="country" type="text" value="{{ old('country', $customer->country) }}">
                                    @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label for="state">States</label>
                                    <br>
                                    <input name="state" type="text" value="{{ old('state', $customer->state) }}">
                                    @error('state')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-4">
                                    <label for="postcode">Zip Code</label>
                                    <br>
                                    <input name="postcode" type="number" value="{{ old('postcode', $customer->postcode) }}">
                                    @error('postcode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-xl-6">
                                    <label for="email">Email</label>
                                    <br>
                                    <input name="email" type="email" value="{{ old('email', $customer->email) }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <label for="phone">Phone</label>
                                    <br>
                                    <input name="phone" type="text" value="{{ old('phone', $customer->phone) }}">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="radio">
                                    <label class="radio-label">
                                        <input class="tick" type="radio" name="myRadioGroup">
                                        <span class="custom-radio"></span>
                                        <h4>Ship to a different address</h4>
                                    </label>
                                </div>
                                <hr>
                                <h4>Additional Info</h4>
                                <div class="col-xl-12">
                                    <label for="note">Order Notes (Optional)</label>
                                    <br>
                                    <textarea name="note" id="note" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-4 order_summery">
                            <h4></h4>
                            
                                <div class="row">
                                    <h4>Order Summery</h4>
                                    @foreach (session('cart', []) as $cart)
                                        <div class="col-xl-7 d-flex">
                                            <img class="img-fluid" src="{{ asset('storage/' . $cart['image']) }}" alt="">
                                            <h6>{{ $cart['title'] }} <span style="color: #9c9999">×{{ $cart['quantity'] }}</span></h6>
                                        </div>
                                        <div class="col-xl-5">
                                            <span>${{ ($cart['discount'] ? $cart['price'] - $cart['discount'] : $cart['price']) * $cart['quantity'] }}</span>
                                        </div>   
                                    @endforeach                                                                         
                                        <div class="col-xl-9 info1">
                                            <h4>Subtotal:</h4>
                                        </div>
                                        <div class="col-xl-3 total">
                                            <h4>${{ collect(session('cart', []))->sum(fn($c) => ($c['discount'] ? $c['price'] - $c['discount'] : $c['price']) * $c['quantity']) }}</h4>
                                        </div>
                                        <hr>
                                        <div class="col-xl-9 info1">
                                            <h4>Shipping:</h4>
                                        </div>
                                        <div class="col-xl-3 total">
                                            <h4>Free</h4>
                                        </div>
                                        <hr>
                                        <div class="col-xl-9 info_total">
                                            <h4>Total:</h4>
                                        </div>
                                        <div class="col-xl-3 amount_total">
                                            <h4>$ {{ collect(session('cart', []))->sum(fn($c) => ($c['discount'] ? $c['price'] - $c['discount'] : $c['price']) * $c['quantity']) }}</h4>
                                        </div>
                                    
                                    <div class="col-xl-12 payment">
                                        <label for="payment_method" id="payment_method">Payment method</label>
                                        <select id="payment_method" name="payment_method" class="form-control p-3 mb-2">
                                            <option value="cash_on_delivery">Cash On Delivery</option>
                                            <option value="online_payment">Online Payment</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 btn">
                                        <button type="submit">Place Order</button>
                                    </div>
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

<script>

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>



@endpush

            