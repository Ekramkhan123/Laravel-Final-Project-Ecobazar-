@extends('backend.layout')
@section('backend_content')

<style>
    @media (max-width: 991px) {
        .user-card .row > div {
            margin-bottom: 10px;
            text-align: center;
        }

        .user-card .d-flex {
            justify-content: center !important;
            gap: 15px;
        }
    }

    @media (max-width: 576px) {
        .user-card img {
            margin: 0 auto;
            display: block;
        }
    }
</style>

        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">User Lists</h4>
            <a href="{{ route('dashboard.rolePermission.create.user') }}" class="btn btn-primary">Create New Users</a>
        </div>
@forelse ($users as $key => $user)
    <div class="card p-4 m-4 shadow-sm user-card">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-md-2 mb-3 mb-md-0">
                <span style="background:#79da7d;width:40px;height:40px;display:flex;border-radius:50%;align-items:center;justify-content:center;color:aliceblue;margin:auto;">
                    {{ ++$key }}
                </span>
            </div>

            <div class="col-12 col-md-3 col-lg-2">
                <span>{{ Str::upper($user->name) }}</span>
            </div>

            <div class="col-12 col-md-3 col-lg-2">
                <span>{{ Str::lower($user->email) }}</span>
            </div>

            <div class="col-12 col-md-2 col-lg-2">
                <img style="width:80px; border-radius: 10px;" 
                    src="{{ $user->image ? asset( 'storage/profile/' . $user->image) : asset('assets/img/placeholder/placeholder.png') }}" 
                    alt="">
            </div>

            <div class="col-12 col-md-2 col-lg-2">
                <div class="d-flex justify-content-lg-between justify-content-center">
                    <a style="text-decoration:none;color:#79da7d;" href="{{ route('dashboard.rolePermission.edit.user', $user->id) }}">
                        <iconify-icon icon="fa7-regular:edit" width="28" height="28"></iconify-icon>
                    </a>
                    <a style="text-decoration:none;color:rgb(243, 114, 114);" href="{{ route('dashboard.rolePermission.delete.user', $user->id) }}">
                        <iconify-icon icon="fluent:delete-32-regular" width="28" height="28"></iconify-icon>
                    </a>
                    <a style="text-decoration:none;color:#79da7d;" href="{{ route('dashboard.rolePermission.role.list', $user->id) }}">
                        <iconify-icon icon="ic:outline-admin-panel-settings" width="28" height="28"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>   
@empty
    <div class="card p-4 m-4 shadow-sm user-card text-danger text-center">
        <b>No Data Found !!!</b>
    </div> 
@endforelse

@endsection
