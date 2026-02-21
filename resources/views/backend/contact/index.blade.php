@extends('backend.layout')
@section('backend_content')
@push('backend_css')
    <link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}"> 
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <div class="content-wrapper">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 d-flex"><span><iconify-icon icon="material-symbols:note-add-outline-sharp" width="24" height="24"></iconify-icon></span>Contact Add</h4>
                <a class="btn btn-primary" href="{{ Route('dashboard.contact.show') }}">Show All</a>
            </div>

        <div class="card-body">

            <form action="{{ route('dashboard.contact.store') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-lg-12">
                        <label class="mb-1" for="address">Address:<span class="text-danger">*</span></label>
                        <input name="address" type="text" class="form-control p-3 mb-3" placeholder="Address" required>
                        @error('address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <label class="mb-1">Email(s)</label>
                        <div id="email-inputs-container">
                            <div class="email-input-group mb-3">
                                <input type="email" name="emails[]" class="form-control p-2" placeholder="Email address" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mb-3" id="add-email-btn">
                            + Add Another Email
                        </button>
                        @error('emails.*')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <label class="mb-1">Phone Number(s)</label>
                        <div id="number-inputs-container">
                            <div class="number-input-group mb-3">
                                <input type="text" name="numbers[]" class="form-control p-2" placeholder="Phone number" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mb-3" id="add-number-btn">
                            + Add Another Number
                        </button>
                        @error('numbers.*')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-12 mt-2">
                        <button type="submit" class="btn btn-primary mt-4 p-3 w-100">Submit</button>
                    </div>

                </div>
            </form>

        </div>
        </div>
    </div>
@endsection


@push('backend_js')

<script src="{{ asset('assets/js/rte.js') }}"></script>
<script src="{{ asset('assets/js/all_plugins.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@endpush