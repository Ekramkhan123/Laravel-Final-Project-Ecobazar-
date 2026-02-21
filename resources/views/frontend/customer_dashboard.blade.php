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
                <h4>
                    Dashboard
                </h4>
            </div>
        </div>
    </section>

    <section id="customer">
        <div class="container py-4">
            <div class="row">

                <!-- LEFT MENU -->
                <div class="col-xl-3 dashboard_menu">
                    @include('frontend.components.customer_navigation')
                </div>


                <!-- RIGHT CONTENT -->
                <div class="col-xl-9 dashboard">

                    <div class="row">
                        <div class="col-xl-6 profile_part">
                            <div class="card">
                            <div class="customer_profile text-center">
                                <img src="{{ $customer->profile_image_url }}">

                                <h4>{{ $customer->fname }} {{ $customer->lname }}</h4>
                                <p>Customer</p>

                                <a href="{{ route('frontend.customer.setting') }}">Edit Profile</a>
                            </div>

                            </div>
                        </div>

                        <div class="col-xl-6 address_part">
                            <div class="card">
                                <div class="customer_address">
                                    <p>BILLING ADDRESS</p>

                                    <h4>{{ $customer->fname }} {{ $customer->lname }}</h4>

                                    <h5>
                                        {{ $customer->street_address }},
                                        {{ $customer->state }},
                                        {{ $customer->country }}
                                        {{ $customer->postcode }}
                                    </h5>

                                    <h6>{{ $customer->email }}</h6>
                                    <h6>{{ $customer->phone }}</h6>

                                    <a href="{{ route('frontend.customer.setting') }}">Edit Address</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="customer_orders">
                        <div class="card">
                            <div class="card-header justify-content-between d-flex align-items-center">
                                <h4>Recent Order History</h4>
                                <a href="{{ route('frontend.customer.order.history') }}">View All</a>
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
                                                <span class="status {{ strtolower($order->status) }}">
                                                    {{ $order->status }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('frontend.customer.order.details', $order->id) }}" class="btn">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection

@push('scripts')
<script>
    document.querySelectorAll('#dashboardMenu .list-group-item').forEach(item => {
        item.addEventListener('click', function () {
            document.querySelectorAll('#dashboardMenu .list-group-item')
                .forEach(li => li.classList.remove('active'));

            this.classList.add('active');
        });
    });
</script>
@endpush
