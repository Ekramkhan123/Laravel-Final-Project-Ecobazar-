<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product\Product;
use App\Models\Category\Category;
use App\Models\Customer;
use App\Models\Personnel;
use App\Models\OrderItem;

class Dashboard
{
    public static function stats()
    {
        $revenue = OrderItem::whereHas('order', function ($q) {
            $q->where('status', 'Completed');
        })->selectRaw('SUM(price * quantity) as total')->value('total');

        return [
            'categories' => Category::count(),
            'products' => Product::count(),
            'customers' => Customer::count(),
            'personnels' => Personnel::count(),

            'orders_total' => Order::count(),
            'orders_pending' => Order::where('status', 'Pending')->count(),
            'orders_completed' => Order::where('status', 'Completed')->count(),

            'revenue' => $revenue ?? 0,

            'latest_orders' => Order::latest()->take(5)->get(),

            'low_stock' => Product::where('is_stock', '<=', 5)->take(5)->get(),
        ];
    }
}
