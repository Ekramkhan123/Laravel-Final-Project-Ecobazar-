@extends('frontend.layout')

@section('frontend_content')


    <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('frontend.index') }}">
                    <iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon>
                </a>
                <span>></span>
                <a href="">Account</a>
                <span>></span>
                <h4>
                    Login
                </h4>
            </div>
        </div>
    </section>

    <section id="Customer_login">
        <div class="login-page d-flex justify-content-center align-items-center">
            <div class="form">
                <form method="POST" action="{{ route('frontend.customer.login.submit') }}">
                    @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger mb-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <div class="login">
                        <h4>Sign In</h4>
                        <input class="name" type="text" placeholder="Email" name="email" required/>
                        <br>
                        <div class="password-container">
                            <input class="password" type="password" placeholder="Password" name="password" required/>
                            <span class="eyeoff"><iconify-icon icon="ri:eye-off-line" width="24" height="24"></iconify-icon></span>
                            <span class="eyeon"><iconify-icon icon="solar:eye-broken" width="24" height="24"></iconify-icon></span>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 remember-me">
                                <input type="checkbox" name="remember_me" id="remember_me">
                                <label for="remember_me"> Remember Me</label>
                            </div>
                            <div class="col-xl-6 forgot_password text-end">
                                <a href="">Forgot Password?</a>
                            </div>
                        </div>
                        <button type="submit">Login</button>
                        <p class="message">Don’t have account?<a href="{{ route('frontend.customer.register') }}"> <b>Register</b></a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.querySelector('.password');
        const eyeOff = document.querySelector('.eyeoff');
        const eyeOn = document.querySelector('.eyeon');

        eyeOn.style.display = 'none';

        eyeOff.addEventListener('click', function () {
            passwordInput.type = 'text';
            eyeOff.style.display = 'none';
            eyeOn.style.display = 'inline-block';
        });

        eyeOn.addEventListener('click', function () {
            passwordInput.type = 'password';
            eyeOn.style.display = 'none';
            eyeOff.style.display = 'inline-block';
        });
    });
</script>


@endsection