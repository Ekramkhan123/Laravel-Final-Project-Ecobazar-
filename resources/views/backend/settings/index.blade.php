@extends('backend.layout')

@section('backend_content')
<div class="card-body">
    <h4 class="mb-4">Website Settings</h4>

    <form action="{{ route('dashboard.settings.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Website Title</label>
            <input type="text" name="site_title"
                   class="form-control"
                   value="{{ $setting->site_title ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Logo (Light)</label>
            <input type="file" name="logo_light" class="form-control">
            @if($setting && $setting->logo_light)
                <img class="img-fluid bg-dark p-2 m-2" src="{{ asset('storage/'.$setting->logo_light) }}"
                     height="60" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Logo (Dark)</label>
            <input type="file" name="logo_dark" class="form-control">
            @if($setting && $setting->logo_dark)
                <img class="img-fluid bg-light p-2 m-2" src="{{ asset('storage/'.$setting->logo_dark) }}"
                     height="60" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Favicon</label>
            <input type="file" name="favicon" class="form-control">
            @if($setting && $setting->favicon)
                <img src="{{ asset('storage/'.$setting->favicon) }}"
                     height="32" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Footer Copyright Text</label>
            <input type="text"
                name="footer_text"
                class="form-control"
                placeholder="© 2025 Your Company. All rights reserved."
                value="{{ $setting->footer_text ?? '' }}">
        </div>

        <button class="btn btn-primary">Save Settings</button>
    </form>
</div>
@endsection
