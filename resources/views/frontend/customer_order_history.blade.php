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
                <h4>Order History</h4>
            </div>
        </div>
    </section>

    <section id="customer">
        <div class="container">
            <div class="row">
                <!-- LEFT MENU -->
                <div class="col-xl-3 order_menu">
                    @include('frontend.components.customer_navigation')
                </div>
                <!-- RIGHT CONTENT -->
                <div class="col-xl-9 ">
                    <div class="customer_orders">
                        <div class="card">
                            <div class="card-header justify-content-between d-flex align-items-center">
                                <h4>Order History</h4>
                            </div>

                            <div class="table-responsive p-3">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $order)
                                        <tr>
                                            <td>#{{ $order->id }}</td>

                                            <td>{{ $order->created_at->format('d M, Y') }}</td>

                                            <td>
                                                ${{ number_format($order->amount, 2) }}
                                                ({{ $order->items->count() }} Products)
                                            </td>

                                            <td>
                                                <span
                                                    @switch($order->status)
                                                        @case('pending') @break
                                                        @case('processing') @break
                                                        @case('shipped') @break
                                                        @case('completed') @break
                                                        @default
                                                    @endswitch
                                                ">
                                                    {{ ucfirst($order->status) }}
                                                </span>
                                            </td>

                                            <td>
                                                <a href="{{ route('frontend.customer.order.details', $order->id) }}"
                                                class="btn">
                                                    View Details
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">
                                                No orders found.
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>

                                </table>
                            </div>
                             <div class="page_slider">
                                <div class="pagination">
                                    {!! $orders->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


