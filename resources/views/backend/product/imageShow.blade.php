@extends('backend.layout')
@section('backend_content')

@push('backend_css')
<style>
    .action_btn {
        display: inline-flex;
        line-height: 0;
        align-items: center;
    }

    .product-image-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding-left: 15px;
        padding-right: 15px;
    }

    .product-image-table-wrapper table {
        min-width: 700px;
        white-space: nowrap;
        border-collapse: collapse;
    }

    .product-image-table-wrapper th,
    .product-image-table-wrapper td {
        vertical-align: middle;
        border: 1px solid #dee2e6;
        padding: 8px 12px;
        text-align: center;
    }

    .product-image-table-wrapper td img {
        max-width: 100px;
        max-height: 100px;
        object-fit: cover;
        margin: 2px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    @media (max-width: 768px) {
        .product-image-table-wrapper table {
            min-width: 600px;
        }

        .product-image-table-wrapper th,
        .product-image-table-wrapper td {
            font-size: 13px;
            padding: 6px 8px;
        }

        .product-image-table-wrapper td img {
            max-width: 70px;
            max-height: 70px;
        }
    }

    @media (max-width: 576px) {
        .product-image-table-wrapper table {
            min-width: 500px;
        }

        .action_btn {
            margin-bottom: 5px;
        }
    }
</style>
@endpush

<div class="content-wrapper">
    <div class="card p-2">
        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h4 class="card-title mb-0">Product Images</h4>
            <a class="btn btn-primary d-flex mt-2 mt-md-0" href="{{ route('dashboard.product.image') }}">
                Add New Images
                <span style="margin-left:10px;">
                    <iconify-icon icon="material-symbols-light:add-box-rounded" width="24" height="24"></iconify-icon>
                </span>
            </a>
        </div>

        <div class="card-body product-image-table-wrapper">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Product Images</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($images as $key => $image)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $image->title }}</td>
                            <td>
                                @if ($image->images)
                                    @forelse ($image->images as $child)
                                        <img src="{{ asset('storage/' . $child->image) }}" alt="Product Image">
                                    @empty
                                        <span class="badge bg-danger">No Image Found</span>
                                    @endforelse
                                @else
                                    <span class="badge bg-danger">No Image Found</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm action_btn" href="{{ route('dashboard.product.image.edit', $image->id) }}">
                                    <iconify-icon icon="mdi:edit-box-outline" width="24" height="24"></iconify-icon>
                                </a>
                                <a class="btn btn-danger btn-sm action_btn" href="#">
                                    <iconify-icon icon="mdi:delete-outline" width="24" height="24"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                <div class="alert alert-danger d-block mt-3">No Products Found!!!</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3 border-top pt-3">
                {{ $images->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
