@extends('backend.layout')
@section('backend_content')

    <div class="card p-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Role Create</h4>
            <a href="{{ route('dashboard.rolePermission.role.all') }}" class="btn btn-primary">List Of All Roles</a>
        </div>

        <div class="card-body">
            <form action="{{ route('dashboard.rolePermission.store.role') }}" method="post">
            @csrf

                <label for="name">Role Name:</label>
                <input type="text" name="role_name" class="form-control p-2" placeholder="Role name">
                <button type="submit" class="btn btn-primary mt-3 w-100">Submit</button>
            </form>
        </div>
    </div>

@endsection