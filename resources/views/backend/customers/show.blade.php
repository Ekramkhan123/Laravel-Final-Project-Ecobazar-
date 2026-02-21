@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<style>

    .customer-profile-img {
        width: 100%;
        max-width: 200px;
        height: auto;
        object-fit: cover;
        border-radius: 8px;
    }

    .customer-orders-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .customer-orders-wrapper table {
        min-width: 600px;
        white-space: nowrap;
    }

    .customer-orders-wrapper th,
    .customer-orders-wrapper td {
        vertical-align: middle;
    }

    @media (max-width:768px){
        .row.mb-4 {
            flex-direction: column;
        }

        .row.mb-4 > div {
            width: 100%;
            margin-bottom: 15px;
        }

        .customer-orders-wrapper td,
        .customer-orders-wrapper th {
            font-size: 13px;
            padding: 8px;
        }

        .btn-sm {
            padding: 4px 8px;
            font-size: 12px;
        }
    }
</style>
@endpush

<div class="container p-3">
    <h4>Customer Details</h4>

    <div class="card">
        <div class="card-body">

            <div class="row mb-4">
                <div class="col-md-3 text-center">
                    <img src="{{ $customer->profile_image && \Storage::disk('public')->exists('customers/'.$customer->profile_image) 
                                ? asset('storage/customers/'.$customer->profile_image) 
                                : asset('assets/img/placeholder/placeholder.png') }}"
                        class="customer-profile-img"
                        alt="{{ $customer->fname }} {{ $customer->lname }}">
                </div>


                <div class="col-md-9">
                    <p><strong>Name:</strong> {{ $customer->fname }} {{ $customer->lname }}</p>
                    <p><strong>Email:</strong> {{ $customer->email }}</p>
                    <p><strong>Phone:</strong> {{ $customer->phone ?? 'N/A' }}</p>
                    <p><strong>Company:</strong> {{ $customer->company_name ?? 'N/A' }}</p>
                    <p><strong>Address:</strong>
                        {{ $customer->street_address ?? 'N/A' }},
                        {{ $customer->state ?? 'N/A' }},
                        {{ $customer->country ?? 'N/A' }} - {{ $customer->postcode ?? 'N/A' }}
                    </p>
                </div>
            </div>

            <hr>

            <h5 class="mb-3">Order History</h5>

            @if($orders->count())
                <div class="customer-orders-wrapper">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="min-width:80px">Order ID</th>
                                <th style="min-width:100px">Total Items</th>
                                <th style="min-width:100px">Status</th>
                                <th style="min-width:120px">Order Date</th>
                                <th style="min-width:100px">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>#{{ $order->id }}</td>
                                    <td>{{ $order->items->count() }}</td>
                                    <td>
                                        <span class="badge bg-info">
                                            {{ $order->status ?? 'Pending' }}
                                        </span>
                                    </td>
                                    <td>{{ $order->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.orders.show', $order->id) }}"
                                           class="btn btn-sm btn-primary">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">No orders found for this customer.</p>
            @endif

        </div>
    </div>
</div>
@endsection
