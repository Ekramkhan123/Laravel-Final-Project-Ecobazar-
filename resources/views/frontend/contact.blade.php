@extends('frontend.layout')

@section('frontend_content')

    <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('frontend.index') }}">
                    <iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon>
                </a>
                <span>></span>
                <h4>
                    Contact
                </h4>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <form class="contact-form" method="POST" action="">
            @csrf
                <div class="row">
                    <div class="col-xl-3 info">
                        @foreach($contacts as $contact)
                            <div class="cart">
                                <h4>
                                    <iconify-icon icon="mdi:location" width="45" height="45"></iconify-icon>
                                </h4>
                                <a href="https://www.google.com/maps?q={{ $contact->address }}">{{ $contact->address }}</a>
                                <hr>                        
                            </div>
                            <div class="cart">
                                <h4>
                                    <iconify-icon icon="clarity:email-solid" width="45" height="45"></iconify-icon>
                                </h4>
                                @if($contact->emails)
                                    @foreach($contact->emails as $email)
                                        <a href="mailto:{{ $email->email }}">{{ $email->email }}</a>
                                    @endforeach
                                @endif
                                <hr>
                            </div>
                            <div class="cart">
                                <h4>
                                    <iconify-icon icon="mdi:telephone" width="45" height="45"></iconify-icon>
                                </h4>
                                @if($contact->numbers)
                                    @foreach($contact->numbers as $number)
                                        <a href="tel:{{ $number->number }}">{{ $number->number }}</a>
                                    @endforeach
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="col-xl-6 message">
                        <h4>Just Say Hello!</h4>
                        <p>Do you fancy saying hi to me or you want to get started with your project and you need my help? Feel free to contact me.</p>
                        <div class="input">
                            <input type="text" placeholder="Template Cookie">
                            <input type="email" placeholder="zakirsoft@gmail.com">
                        </div>
                        <input class="text" type="text">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Subjects"></textarea>
                        <button type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="map">
        <img src="{{ asset('frontend/assets/image/Map_image.png') }}" alt="">
    </section>

@endsection