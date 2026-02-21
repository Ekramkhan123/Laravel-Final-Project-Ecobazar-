@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}">

<style>
    #policy_editor {
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
            <h4>Edit Privacy Policy</h4>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.privacy.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="mb-2">Privacy Policy Content</label>

                    <div id="policy_editor"></div>

                    <textarea hidden name="content" id="policy_content"></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100 p-3">
                    Update Policy
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
    var policyEditor = new RichTextEditor("#policy_editor");

    policyEditor.setHTMLCode(@json(old('content', $policy?->content)));

    $('form').on('submit', function () {
        $('#policy_content').val(policyEditor.getHTMLCode());
    });
</script>

@endpush
