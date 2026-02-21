@extends('backend.layout')

@section('backend_content')
<div class="card">
    <div class="card-header">
        <h4>Edit Personnel</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('dashboard.personnel.update', $personnel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ $personnel->name }}">
            </div>

            <div class="mb-3">
                <label>Designation <span class="text-danger">*</span></label>
                <input type="text" name="designation" class="form-control" value="{{ $personnel->designation }}">
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                @if($personnel->image)
                    <img src="{{ asset('storage/personnels/'.$personnel->image) }}" alt="{{ $personnel->name }}" width="100" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Update Personnel</button>
        </form>
    </div>
</div>
@endsection
