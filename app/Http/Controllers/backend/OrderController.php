<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Customer;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class OrderController extends Controller
{
    // List all orders
    public function index()
    {
        $metaTitle = 'Customer Orders';
        $orders = Order::with('items')
                    ->get()
                    ->groupBy(function($order) {
                        return $order->customer_id ?: $order->email;
                    });

        return view('backend.orders.index', compact('orders', 'metaTitle'));
    }

    // Show single order with items
    public function show($id)
    {
        $metaTitle = 'Customers Orders Details';
        $order = Order::with('items')->findOrFail($id);
        $customerOrders = Order::with('items')
                            ->where('customer_id', $order->customer_id)
                            ->get();

        return view('backend.orders.show', compact('customerOrders', 'order', 'metaTitle'));
    }


    // Update order status
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Processing,Shipped,Completed,Canceled',
        ]);

        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        Swal::success(['title' => 'Order status updated successfully!']);
        return back();
    }
}
