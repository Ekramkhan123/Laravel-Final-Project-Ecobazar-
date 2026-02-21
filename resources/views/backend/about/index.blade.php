@extends('backend.layout')

@section('backend_content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0 d-flex"><span><iconify-icon icon="material-symbols:note-add-outline-sharp" width="24" height="24"></iconify-icon></span> Add About Page</h4>
        <a class="btn btn-primary" href="{{ route('dashboard.about.show') }}">Show All</a>
    </div>

    <div class="card-body">
        <form action="{{ route('dashboard.about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            @foreach(['one','two','three'] as $num)
            <div class="mb-3">
                <label>Title {{ $num }}:</label>
                <input type="text" name="title{{ $num }}" class="form-control" value="">
            </div>

            <div class="mb-3">
                <label>Description {{ $num }}:</label>
                <textarea name="description{{ $num }}" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label>Image {{ $num }}:</label>
                <input type="file" name="image{{ $num }}" class="form-control">
            </div>
            <hr>
            @endforeach

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
