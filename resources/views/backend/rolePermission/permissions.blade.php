@extends('backend.layout')
@section('backend_content')

    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Assign Permission</h4>
            <a href="{{ route('dashboard.rolePermission.create.role') }}" class="btn btn-primary">Create New Role</a>
        </div>

        <div class="card-body table-responsive">

            <form action="{{ route('dashboard.rolePermission.permissions.store') }}" method="POST">
                @csrf

                <input type="hidden" name="role_name" id="" value="{{ $role->id }}">
                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Permissions Name</th>
                        <th>Actions</th>
                    </tr>
                    @forelse ($permissions as $key => $permission)
                        <tr class="text-center">
                            <td>{{ ++$key }}</td>
                            <td>
                                <label for="permission_{{ $permission->id }}">{{ $permission->name }}</label>
                            </td>
                            <td>
                                <input {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} value="{{ $permission->name }}" type="checkbox" name="permissions[]" id="permission_{{ $permission->id }}">
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="alert alert-danger text-center">No Role Found</td>
                        </tr>
                    @endforelse

                </table>
                <button type="submit" class="btn btn-primary mt-3 w-100">Submit</button>
            </form>  
        </div>
    </div>

@endsection