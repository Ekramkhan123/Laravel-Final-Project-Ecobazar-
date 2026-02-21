@extends('backend.layout')

@section('backend_content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
.stat-card{
    transition:.3s;
    border-radius:15px;
    background:linear-gradient(135deg,#667eea,#764ba2);
    color:white;
}

.stat-card .counter{
    color: white;
}

.stat-card:hover{
    transform:translateY(-6px);
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

.stat-card.light{
    background:linear-gradient(135deg,#43cea2,#185a9d);
}

.stat-card.orange{
    background:linear-gradient(135deg,#f7971e,#ffd200);
}

.stat-card.red{
    background:linear-gradient(135deg,#ff416c,#ff4b2b);
}

.mini-card{
    border-radius:12px;
    transition:.3s;
}

.mini-card:hover{
    transform:translateY(-4px);
}

.table-hover tbody tr:hover{
    background:#f5f7ff;
}

.badge-status{
    padding:6px 12px;
    border-radius:20px;
}
</style>

<div class="container-fluid animate__animated animate__fadeIn">

    <div class="d-flex justify-content-between mb-4 p-2">
        <div>
            <h3 class="fw-bold">Welcome Back !</h3>
            <small class="text-muted">{{ date('l, d M Y') }}</small>
        </div>
    </div>

    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card stat-card p-4">
                <small>Products</small>
                <h2 class="counter">{{ $stats['products'] }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card light p-4">
                <small>Categories</small>
                <h2 class="counter">{{ $stats['categories'] }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card orange p-4">
                <small>Customers</small>
                <h2 class="counter">{{ $stats['customers'] }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card red p-4">
                <small>Personnel</small>
                <h2 class="counter">{{ $stats['personnels'] }}</h2>
            </div>
        </div>

    </div>

    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card mini-card p-3 shadow-sm">
                <small>Total Orders</small>
                <h4 class="counter">{{ $stats['orders_total'] }}</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mini-card p-3 shadow-sm">
                <small>Pending</small>
                <h4 class="counter">{{ $stats['orders_pending'] }}</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mini-card p-3 shadow-sm">
                <small>Completed</small>
                <h4 class="counter">{{ $stats['orders_completed'] }}</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mini-card p-3 shadow-sm">
                <small>Revenue</small>
                <h4>${{ number_format($stats['revenue'],2) }}</h4>
            </div>
        </div>

    </div>

    <div class="row g-4 pb-2">

        <div class="col-md-6 animate__animated animate__fadeInLeft">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">Latest Orders</div>

                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($stats['latest_orders'] as $order)
                        <tr>
                            <td>#{{ $order->id }}</td>
                            <td>
                                <span class="badge-status bg-secondary text-white">
                                {{ $order->status }}
                                </span>
                            </td>
                            <td>${{ $order->items->sum(fn($i)=>$i->price*$i->quantity) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">No Orders</td></tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

        <div class="col-md-6 animate__animated animate__fadeInRight">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">Low Stock Products</div>

                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Stock</th>
                        </tr>
                    </thead>

                    <tbody>
                    @forelse($stats['low_stock'] as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>
                                <span class="badge bg-danger">
                                {{ $product->is_stock }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">All Good 👍</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
            </div>
        </div>

    </div>

</div>

<script>
document.querySelectorAll('.counter').forEach(counter => {
    let target = +counter.innerText;
    counter.innerText = 0;

    let update = () => {
        let current = +counter.innerText;
        let increment = target / 60;

        if (current < target) {
            counter.innerText = Math.ceil(current + increment);
            setTimeout(update, 20);
        } else {
            counter.innerText = target;
        }
    };
    update();
});
</script>

@endsection