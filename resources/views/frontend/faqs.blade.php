@extends('frontend.layout')

@section('frontend_content')

                    
            <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('frontend.index') }}"><iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon></a>
                        <span>></span>
                        <h4>Faqs</h4>
                    </div>
                </div>
            </section>

            <section class="about-ecobazar">
                <div class="container">
                    <div class="about-wrapper">

                        <div class="about-content">
                            <h2 class="about-title">
                                Welcome, Let’s Talk <br>
                                About Our Ecobazar
                            </h2>

                            @foreach ($faqs as $faq)
                                <div class="accordion">

                                    <div class="accordion-item mb-3">
                                        <div class="accordion-header">
                                            <span>{{ $faq->question }}</span>
                                            <span class="icon">+</span>
                                        </div>
                                        <div class="accordion-body">
                                            <p>
                                                {!! $faq->answers !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="about-image">
                            <img src="{{ $faqimage && $faqimage->image 
                                ? asset('storage/Faqs/' . $faqimage->image) 
                                : asset('frontend/assets/image/faqs.png') }}" 
                                alt="About Ecobazar">

                        </div>
                    </div>
                </div>
            </section>

<script>
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            const isActive = item.classList.contains('active');

            document.querySelectorAll('.accordion-item').forEach(i => {
                i.classList.remove('active');
            });

            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
</script>

@endsection