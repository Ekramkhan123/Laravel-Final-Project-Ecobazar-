<?php

namespace App\Models\Category;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function subCategories(): HasMany
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

