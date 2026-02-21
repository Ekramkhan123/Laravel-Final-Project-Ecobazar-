<?php
namespace App\Traits;

use App\Models\Product\Product;

trait HasDefaultProduct
{
    protected function getDefaultProduct()
    {
        return Product::inRandomOrder()->first();
    }
}
