@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<style>

    .customer-orders-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .customer-orders-wrapper table {
        min-width: 700px;
        white-space: nowrap;
    }

    .customer-orders-wrapper th,
    .customer-orders-wrapper td {
        vertical-align: middle;
    }

    @media (max-width: 768px) {
        .card{
            padding: 20px;
        }
        
        .customer-orders-wrapper th,
        .customer-orders-wrapper td {
            font-size: 13px;
            padding: 6px 8px;
        }

        .customer-orders-wrapper table {
            min-width: 600px;
        }

        .customer-orders-wrapper h6 {
            font-size: 14px;
        }
    }
</style>
@endpush
<div class="card p-2">
        <div class="card-header">
            <h5 class="mb-0">All Customer Orders</h5>
        </div>

        <div class="card-body customer-orders-wrapper">

        @foreach($orders as $customerOrders)
            @php
                $firstOrder = $customerOrders->first();
            @endphp
            <h6 class="mb-2">
                Customer: {{ $firstOrder->fname }} {{ $firstOrder->lname }} ({{ $firstOrder->email }})
            </h6>

            <table class="table table-bordered table-hover mb-4">
                <thead class="table-light">
                    <tr>
                        <th>#Order</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Order date</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customerOrders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>৳ {{ $order->amount }}</td>
                        <td>
                            <span class="badge bg-label-info">{{ $order->status }}</span>
                        </td>
                        <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                        <td>
                            <a href="{{ route('dashboard.orders.show', $order->id) }}" class="btn btn-sm btn-primary">
                                View
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach

    </div>
</div>

@endsection
