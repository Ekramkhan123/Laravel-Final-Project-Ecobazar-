@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<style>

    .order-items-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding-left: 15px;
        padding-right: 15px;
    }

    .order-items-wrapper table {
        min-width: 900px;
        white-space: nowrap;
        border-collapse: collapse;
    }

    .order-items-wrapper th,
    .order-items-wrapper td {
        vertical-align: middle;
        text-align: center;
        border: 1px solid #dee2e6;
        padding: 8px 12px;
    }

    .order-items-wrapper img {
        max-width: 50px;
        height: auto;
        object-fit: cover;
    }

    .order-items-wrapper select.form-select {
        display: inline-block;
        width: auto;
    }

    @media (max-width: 768px) {
        .order-items-wrapper th,
        .order-items-wrapper td {
            font-size: 13px;
            padding: 6px 8px;
        }

        .order-items-wrapper table {
            min-width: 700px;
        }

        .order-items-wrapper select.form-select {
            width: 100%;
            margin-bottom: 5px;
        }

        .btn-update-status {
            width: 100%;
        }
    }
</style>
@endpush

<div class="card-header">
    <h5 class="mb-0">{{ optional($order->customer)->fname ?? $order->fname }}'s orders</h5>
</div>

<div class="card-body">

    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('dashboard.orders.index') }}" class="btn btn-sm btn-primary">Orders List</a>
    </div>

    <h6 class="mb-3">
        Customer: {{ $order->fname }} {{ $order->lname }} ({{ $order->email }})
    </h6>

    <div class="order-items-wrapper">
        <table class="table table-bordered table-hover mb-4">
            <thead class="table-light">
                <tr>
                    <th>#Order</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr>
                    <td>#{{ $order->id }}</td>
                    <td>
                        <img src="{{ asset('storage/'.$item->product_image) }}" alt="{{ $item->product_title }}">
                    </td>
                    <td>{{ $item->product_title }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>৳ {{ $item->price }}</td>
                    <td>৳ {{ $item->sub_total }}</td>
                    <td>
                        <span class="badge bg-label-info">{{ $order->status }}</span>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('dashboard.orders.status.update', $order->id) }}" style="display:flex; flex-direction:column; gap:5px;">
                            @csrf
                            <select name="status" class="form-select form-select-sm">
                                @foreach(['Pending','Processing','Shipped','Completed','Canceled'] as $status)
                                    <option value="{{ $status }}" {{ $order->status == $status ? 'selected' : '' }}>
                                        {{ $status }}
                                    </option>
                                @endforeach
                            </select>
                            <button class="btn btn-success btn-sm btn-update-status">Update</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
