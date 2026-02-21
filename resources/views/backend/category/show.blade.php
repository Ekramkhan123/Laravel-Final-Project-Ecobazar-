@extends('backend.layout')
@section('backend_content')

@push('backend_css')
<style>
    .action_btn {
        display: inline-flex;
        line-height: 0;
        align-items: center;
    }

    .category-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding-left: 15px;
        padding-right: 15px;
    }

    .category-table-wrapper table {
        min-width: 900px;
        white-space: nowrap;
        border-collapse: collapse;
    }

    .category-table-wrapper th,
    .category-table-wrapper td {
        vertical-align: middle;
        text-align: center;
        border: 1px solid #dee2e6;
        padding: 8px 12px;
    }

    .category-table-wrapper img {
        width: 100px;
        height: 80px;
        object-fit: cover;
        border-radius: 3px;
    }

    @media (max-width: 768px) {
        .category-table-wrapper th,
        .category-table-wrapper td {
            font-size: 13px;
            padding: 6px 8px;
        }

        .category-table-wrapper table {
            min-width: 700px;
        }

        .action_btn {
            margin-bottom: 5px;
        }
    }
</style>
@endpush

<div class="card p-3">
    <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
        <h4 class="mb-0 d-flex">
            <span><iconify-icon icon="material-symbols:perm-device-information" width="28" height="28"></iconify-icon></span>
            Formation of Categories
        </h4>
        <a class="btn btn-primary d-flex mt-2 mt-md-0" href="{{ Route('dashboard.category.index') }}">
            Add New Category
            <span style="margin-left:10px;">
                <iconify-icon icon="material-symbols-light:add-box-rounded" width="24" height="24"></iconify-icon>
            </span>
        </a>
    </div>

    <div class="card-body category-table-wrapper">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Meta Title</th>
                    <th>Meta Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $key => $category)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        @if ($category->image)
                            <img src="{{ asset('storage/category/'.$category->image) }}" alt="">
                        @else
                            <p class="badge bg-danger">No Image Found</p>
                        @endif
                    </td>
                    <td>
                        @if ($category->status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                    <td>{{ $category->meta_title ?? 'N/A' }}</td>
                    <td>{{ $category->meta_description ?? 'N/A' }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm action_btn" href="{{ route('dashboard.category.edit', $category->id) }}">
                            <span><iconify-icon icon="mdi:edit-box-outline" width="24" height="24"></iconify-icon></span>
                        </a>
                        <a class="btn btn-danger btn-sm action_btn" href="{{ route('dashboard.category.delete', $category->id) }}">
                            <span><iconify-icon icon="mdi:delete-outline" width="24" height="24"></iconify-icon></span>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">
                        <span class="alert alert-danger d-block mt-3">No Category Found !!!</span>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3 border-top pt-3">
            {{ $categories->links() }}
        </div>
    </div>
</div>

@endsection
