@extends('backend.layout')
@section('backend_content')

    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Roles</h4>
            <a href="{{ route('dashboard.rolePermission.create.role') }}" class="btn btn-primary">Create New Role</a>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered">
                <tr class="text-center">
                    <th>#</th>
                    <th>Role Name</th>
                    <th>Actions</th>
                </tr>
                @forelse ($roles as $key => $role)
                    <tr class="text-center">
                        <td>{{ ++$key }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a style="text-decoration:none;color:#79da7d;" href="{{ route('dashboard.rolePermission.edit.role', $role->id) }}">
                                <iconify-icon icon="fa7-regular:edit" width="28" height="28"></iconify-icon>
                            </a>
                            <a style="text-decoration:none;color:rgb(243, 114, 114);" href="{{ route('dashboard.rolePermission.delete.role', $role->id) }}">
                                <iconify-icon icon="fluent:delete-32-regular" width="28" height="28"></iconify-icon>
                            </a>
                            <a href="{{ route('dashboard.rolePermission.permissions', $role->id) }}"><iconify-icon icon="akar-icons:key" width="24" height="24"></iconify-icon></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="alert alert-danger text-center">No Role Found</td>
                    </tr>
                @endforelse

            </table>
        </div>
    </div>

@endsection