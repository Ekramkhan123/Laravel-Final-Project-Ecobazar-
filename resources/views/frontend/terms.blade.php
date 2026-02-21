@extends('frontend.layout')

@section('frontend_content')

        <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('frontend.index') }}"><iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon></a>
                    <span>></span>
                    <h4>Terms & Conditions</h4>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <h2>Terms & Conditions</h2>
            <div class="card p-4 mt-3">
                {!! $terms->content ?? 'No terms added yet.' !!}
            </div>
        </div>
@endsection
