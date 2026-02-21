@extends('frontend.layout')

@section('frontend_content')

<form id="customer-logout-form"
      action="{{ route('frontend.customer.logout') }}"
      method="POST"
      style="display:none;">
    @csrf
</form>

<section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('frontend.index') }}">
                <iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon>
            </a>
            <span>></span>
            <a href="{{ route('frontend.customer.dashboard') }}">My Account</a>
            <span>></span>
            <a href="{{ route('frontend.customer.order.history') }}">Order History</a>
            <span>></span>
            <h4>Order Details</h4>
        </div>
    </div>
</section>

<section id="customer">
    <div class="container py-4">
        <div class="row">

            <!-- LEFT MENU -->
            <div class="col-xl-3 orderdetails_menu">
                @include('frontend.components.customer_navigation')
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-xl-9">
                <div class="card p-3">

                    <div class="card-title d-flex justify-content-between mb-3">
                        <h4>
                            Order Details
                            <span class="text-muted fs-6">
                                • {{ $order->created_at->format('F d, Y') }}
                                • {{ $order->items->count() }} Product{{ $order->items->count() > 1 ? 's' : '' }}
                            </span>
                        </h4>
                        <a href="{{ route('frontend.customer.order.history') }}" class="text-success fw-semibold">
                            Back to List
                        </a>
                    </div>

                    <div class="row mb-4">

                        <div class="col-xl-8 address">
                            <div class="row">
                                
                                <div class="col-xl-6 customer_info">
                                    <div class="billing_info">
                                        <h6 class="text-muted mb-2">BILLING ADDRESS</h6>
                                        <p class="mb-1 fw-semibold">
                                            {{ $customer->fname ?? '' }} {{ $customer->lname ?? '' }}
                                        </p>
                                        <p class="mb-1">{{ $customer->street_address ?? $order->street_address ?? '' }}</p>
                                        <p class="mb-1">
                                            {{ $customer->state ?? $order->state ?? '' }}, {{ $customer->country ?? $order->country ?? '' }}
                                            {{ $customer->postcode ?? $order->postcode ?? '' }}
                                        </p>
                                        <p class="mb-1"><strong>Email:</strong> {{ $customer->email ?? $order->email ?? '' }}</p>
                                        <p class="mb-0"><strong>Phone:</strong> {{ $customer->phone ?? $order->phone ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="col-xl-6 customer_info">
                                    <div class="shipping_info">
                                        <h6 class="text-muted mb-2">SHIPPING ADDRESS</h6>
                                        <p class="mb-1 fw-semibold">
                                            {{ $customer->fname ?? '' }} {{ $customer->lname ?? '' }}
                                        </p>
                                        <p class="mb-1">{{ $customer->street_address ?? $order->street_address ?? '' }}</p>
                                        <p class="mb-1">
                                            {{ $customer->state ?? $order->state ?? '' }}, {{ $customer->country ?? $order->country ?? '' }}
                                            {{ $customer->postcode ?? $order->postcode ?? '' }}
                                        </p>
                                        <p class="mb-1"><strong>Email:</strong> {{ $customer->email ?? $order->email ?? '' }}</p>
                                        <p class="mb-0"><strong>Phone:</strong> {{ $customer->phone ?? $order->phone ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 order_info">
                            <div class="order_summary ">
                                <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                                <p><strong>Payment Method:</strong> {{ ucfirst(str_replace('_', ' ', $order->payment_method)) }}</p>
                                <hr>
                                <p class="d-flex justify-content-between">
                                    <span>Subtotal</span>
                                    <span>৳{{ number_format($order->subtotal ?? $order->amount, 2) }}</span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span>Shipping</span>
                                    <span class="text-success">Free</span>
                                </p>
                                <hr>
                                <p class="d-flex justify-content-between fw-bold text-success">
                                    <span>Total</span>
                                    <span>৳{{ number_format($order->amount, 2) }}</span>
                                </p>
                            </div>
                        </div>

                    </div>

                    @php
                        $steps = ['Pending', 'Processing', 'Shipped', 'Completed'];
                        $currentStepIndex = array_search(ucfirst(strtolower($order->status)), $steps);
                        $totalSegments = count($steps) - 1;
                        $progressPercent = $totalSegments > 0
                            ? ($currentStepIndex / $totalSegments) * 100
                            : 0;
                    @endphp

                    <div class="order-progress mb-4">
                        <div class="progress-line" style="--progress-width: {{ $progressPercent }}%;"></div>
                        <div class="row text-center">
                            @foreach($steps as $index => $step)
                                <div class="col progress-step {{ $index < $currentStepIndex ? 'completed' : ($index === $currentStepIndex ? 'active' : '') }}">
                                    <div class="circle">
                                        @if($index < $currentStepIndex) ✓
                                        @else {{ sprintf('%02d', $index + 1) }}
                                        @endif
                                    </div>
                                    <small>{{ $step }}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th class="text-end">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->items as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/'.$item->product_image) }}" width="50">

                                                {{ $item->product_title ?? 'Product' }}
                                            </div>
                                        </td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>x{{ $item->quantity }}</td>
                                        <td class="text-end fw-semibold">
                                            ৳{{ number_format($item->sub_total, 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
