@extends('backend.layout')
@section('backend_content')

@push('backend_css')
<style>
    .action_btn {
        display: inline-flex;
        line-height: 0;
        align-items: center;
    }

    .product-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding-left: 15px;
        padding-right: 15px;
    }

    .product-table-wrapper table {
        min-width: 1200px;
        white-space: nowrap;
        border-collapse: collapse;
    }

    .product-table-wrapper th,
    .product-table-wrapper td {
        vertical-align: middle;
        border: 1px solid #dee2e6;
        padding: 8px 12px;
        text-align: center;
    }

    .product-table-wrapper td {
        text-align: start;
    }

    @media (max-width: 768px) {
        .product-table-wrapper table {
            min-width: 1000px;
        }

        .product-table-wrapper th,
        .product-table-wrapper td {
            font-size: 13px;
            padding: 6px 8px;
        }

        .action_btn {
            margin-bottom: 5px;
        }
    }

    @media (max-width: 576px) {
        .product-table-wrapper table {
            min-width: 900px;
        }
    }
</style>
@endpush

<div class="content-wrapper">
    <div class="card p-3">
        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h4 class="card-title mb-0">All Products</h4>
            <a class="btn btn-primary d-flex mt-2 mt-md-0" href="{{ route('dashboard.product.index') }}">
                Add New Product
                <span style="margin-left:10px;">
                    <iconify-icon icon="material-symbols-light:add-box-rounded" width="24" height="24"></iconify-icon>
                </span>
            </a>
        </div>

        <div class="card-body product-table-wrapper">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Tag(s)</th>
                        <th>Descriptions</th>
                        <th>Features</th>
                        <th>Additional Information</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->dis_price ?? 'N/A' }}</td>
                            <td>
                                @foreach ($product->tags as $tag)
                                    <span class="badge bg-info text-dark mb-1">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td>{!! Str::limit($product->description ?? 'N/A', 50, '...') !!}</td>
                            <td>{!! Str::limit($product->features ?? 'N/A', 50, '...') !!}</td>
                            <td>
                                <strong>Weight:</strong> {{ $product->additionalInfo->weight ?? 'N/A' }}<br>
                                <strong>Color:</strong> {{ $product->additionalInfo->color ?? 'N/A' }}<br>
                                <strong>Type:</strong> {{ $product->additionalInfo->type ?? 'N/A' }}
                            </td>
                            <td>
                                <span class="badge bg-{{ $product->is_stock == 1 ? 'info' : 'danger' }}">
                                    {{ $product->is_stock == 1 ? 'In Stock' : 'Out of Stock' }}
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-{{ $product->status == 1 ? 'success' : 'warning' }}">
                                    {{ $product->status == 1 ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>{{ $product->meta_title ?? 'N/A' }}</td>
                            <td>{{ $product->meta_description ?? 'N/A' }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm action_btn" href="{{ route('dashboard.product.edit', $product->id) }}">
                                    <iconify-icon icon="mdi:edit-box-outline" width="24" height="24"></iconify-icon>
                                </a>
                                <a class="btn btn-danger btn-sm action_btn" href="{{ route('dashboard.product.delete', $product->id) }}">
                                    <iconify-icon icon="mdi:delete-outline" width="24" height="24"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="13" class="text-center">
                                <div class="alert alert-danger d-block mt-3">No Products Found!!!</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3 border-top pt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
