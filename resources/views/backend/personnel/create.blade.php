@extends('backend.layout')

@section('backend_content')
<div class="card">
    <div class="card-header">
        <h4>Add New Personnel</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('dashboard.personnel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label>Designation <span class="text-danger">*</span></label>
                <input type="text" name="designation" class="form-control" value="{{ old('designation') }}">
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Add Personnel</button>
        </form>
    </div>
</div>
@endsection
