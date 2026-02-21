@extends('frontend.layout')

@section('frontend_content')

    <title>Receipt - {{ $order->transaction_id }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .text-end { text-align: right; }
        .action-buttons { margin-top: 20px; }
        .action-buttons button, .action-buttons a {
            padding: 10px 15px;
            margin-right: 10px;
            text-decoration: none;
            color: #f2f2f2;
            border: none;
            border-radius: 4px;
        }
        .action-buttons a {
            background-color: green;
            color: white;
        }
    </style>

        <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('frontend.index') }}"><iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon></a>
                    <span>></span>
                    <a href="#">Receipt</a>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="card p-4">
                <h2 class="mb-4">Order Receipt</h2>

                <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>

                <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>

                <p>
                    <strong>Payment Status:</strong>
                    @if($order->status === 'Processing' || $order->status === 'Complete')
                        <span style="color: green; font-weight: bold;">PAID</span>
                    @else
                        <span style="color: red; font-weight: bold;">UNPAID (Cash on Delivery)</span>
                    @endif
                </p>

                <p><strong>Customer Name:</strong> {{ $order->fname }} {{ $order->lname }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                <p><strong>Address:</strong> {{ $order->street_address }}, {{ $order->state }}, {{ $order->country }}, {{ $order->postcode }}</p>

                <table class="table table-hover table-bordered table-striped shadow-sm mt-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Title</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Price</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach($order->items as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->product_title }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->discount }}</td>
                                <td>{{ number_format($item->price, 2) }} $</td>
                                <td>{{ number_format($item->sub_total, 2) }} $</td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="5" class="text-end"><strong>Total Amount:</strong></td>
                            <td><strong>{{ number_format($order->amount, 2) }} $</strong></td>
                        </tr>

                    </tbody>
                </table>


                <div class="action-buttons">
                    <button onclick="window.print()" class="btn btn-primary">Print Receipt</button>
                    <a href="{{ route('frontend.download.receipt', $order->id) }}" class="btn btn-success">Download PDF</a>
                </div>
            </div>
        </div>

@endsection