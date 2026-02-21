<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;

class CustomerController extends Controller
{
    // Customer list
    public function index()
    {
        $metaTitle = 'Customers';
        $customers = Customer::latest()->get();
        return view('backend.customers.index', compact('customers', 'metaTitle'));
    }

    // Customer details & orders
    public function show($id)
    {
        $metaTitle = 'Customer Details';
        $customer = Customer::findOrFail($id);

        $orders = Order::with('items')
            ->where('customer_id', $customer->id)
            ->get();

        return view('backend.customers.show', compact('customer', 'orders', 'metaTitle'));
    }
}
