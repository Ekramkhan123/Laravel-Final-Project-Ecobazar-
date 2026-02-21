<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model {
    use HasFactory;

    protected $fillable = [
        'customer_id', 'email', 'fname', 'lname', 'phone', 'note', 'amount', 'currency', 'status', 'transaction_id',
        'company_name', 'street_address', 'country', 'state', 'postcode','payment_method'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function items() {
        return $this->hasMany(OrderItem::class);
    }
}

