<?php

namespace App\Models\Product;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductAdditionalInfo extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'weight', 'color', 'type'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

