@extends('frontend.layout')

@section('frontend_content')

        <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('frontend.index') }}"><iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon></a>
                    <span>></span>
                    <h4>Privacy Policy</h4>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <h1>Privacy Policy</h1>
            <div class="mt-4">
                {!! $policy?->content !!}
            </div>
        </div>
@endsection
