@extends('frontend.layout')

@section('frontend_content')

@if(auth('customer')->check())
    <script>
        window.location.href = "{{ route('customer.dashboard') }}";
    </script>
@endif

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
                    Create Account
                </h4>
            </div>
        </div>
    </section>

    <section id="registration">
        <div class="registration-page d-flex justify-content-center align-items-center">
            <div class="form">
                <form class="register-form" method="POST" action="{{ route('frontend.customer.register.submit') }}">
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

                    <div class="register">
                        <h4>Register</h4>
                        <input type="text" name="fname" placeholder="First Name" required>
                        <input type="text" name="lname" placeholder="Last Name" required>
                        <input class="email" type="email" name="email" placeholder="Email" required>
                        
                        <div class="password-container">
                            <input class="password" type="password" name="password" placeholder="Password" required>
                            <span class="eyeoff"><iconify-icon icon="ri:eye-off-line" width="24" height="24"></iconify-icon></span>
                            <span class="eyeon"><iconify-icon icon="solar:eye-broken" width="24" height="24"></iconify-icon></span>
                        </div>

                        <div class="password-container">
                            <input class="confirm-password" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            <span class="eyeoff"><iconify-icon icon="ri:eye-off-line" width="24" height="24"></iconify-icon></span>
                            <span class="eyeon"><iconify-icon icon="solar:eye-broken" width="24" height="24"></iconify-icon></span>
                        </div>

                        <div class="row">
                            <div class="col-xl-10 terms">
                                <input type="checkbox" name="terms" id="remember_me">
                                <label for="terms"> Accept all terms & Conditions</label>
                            </div>
                        </div>

                        <button type="submit">Register</button>
                        <p class="message">Already have account<a href=""> <b>Login</b></a></p>
                    </div>
                </form>
            </div>
        </div>

    </section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordContainers = document.querySelectorAll('.password-container');

        passwordContainers.forEach(container => {
            const passwordInput = container.querySelector('input');
            const eyeOff = container.querySelector('.eyeoff');
            const eyeOn = container.querySelector('.eyeon');

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
    });
</script>

@endsection