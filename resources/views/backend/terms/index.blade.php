@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}">

<style>
    #terms_editor {
        height: 400px !important;
    }

    .rte-modern.rte-desktop.rte-toolbar-default {
        min-width: 520px;
    }
</style>
@endpush

<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h4>Edit Terms & Conditions</h4>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.terms.update') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="mb-2">Terms & Conditions Content</label>

                    <div id="terms_editor"></div>

                    <textarea hidden name="content" id="terms_content"></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100 p-3">
                    Save
                </button>
            </form>

        </div>
    </div>
</div>

@endsection

@push('backend_js')

<script src="{{ asset('assets/js/rte.js') }}"></script>
<script src="{{ asset('assets/js/all_plugins.js') }}"></script>

<script>
    var termsEditor = new RichTextEditor("#terms_editor");

    termsEditor.setHTMLCode(@json(old('content', $terms->content ?? '')));

    $('form').on('submit', function () {
        $('#terms_content').val(termsEditor.getHTMLCode());
    });
</script>

@endpush
