<!DOCTYPE html>
<html>
<head>
    <title>Receipt - {{ $order->transaction_id }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .text-end {
            text-align: right;
        }
    </style>
</head>
<body>

<h2>Order Receipt</h2>

<p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>

<p>
    <strong>Payment Status:</strong>
    @if(in_array($order->status, ['Processing', 'Complete']))
        PAID
    @else
        UNPAID (Cash on Delivery)
    @endif
</p>

<p><strong>Customer Name:</strong> {{ $order->fname }} {{ $order->lname }}</p>
<p><strong>Email:</strong> {{ $order->email }}</p>
<p><strong>Phone:</strong> {{ $order->phone }}</p>
<p><strong>Address:</strong>
    {{ $order->street_address }},
    {{ $order->state }},
    {{ $order->country }},
    {{ $order->postcode }}
</p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Qty</th>
            <th>Discount</th>
            <th>Price</th>
            <th>Sub Total</th>
        </tr>
    </thead>
    <tbody>
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
            <td colspan="5" class="text-end"><strong>Total</strong></td>
            <td><strong>{{ number_format($order->amount, 2) }} $</strong></td>
        </tr>
    </tbody>
</table>

</body>
</html>
