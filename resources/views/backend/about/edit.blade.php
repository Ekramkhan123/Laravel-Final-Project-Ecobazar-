@extends('backend.layout')

@section('backend_content')
<div class="card">
    <div class="card-header">
        <h4>Edit About Page</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('dashboard.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            @foreach(['one','two','three'] as $num)
            <div class="mb-3">
                <label>Title {{ $num }}:</label>
                <input type="text" name="title{{ $num }}" class="form-control" value="{{ $about->{'title'.$num} ?? '' }}">
            </div>

            <div class="mb-3">
                <label>Description {{ $num }}:</label>
                <textarea name="description{{ $num }}" class="form-control" rows="4">{{ $about->{'description'.$num} ?? '' }}</textarea>
            </div>

            <div class="mb-3">
                <label>Image {{ $num }}:</label>
                <input type="file" name="image{{ $num }}" class="form-control mt-1">
                @if(isset($about->{'image'.$num}) && !empty($about->{'image'.$num}))
                    <img src="{{ asset('storage/About/'.$about->{'image'.$num}) }}" width="100" class="mt-2">
                @endif
            </div>
            <hr>
            @endforeach

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection
