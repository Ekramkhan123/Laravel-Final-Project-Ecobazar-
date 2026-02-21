<?php

namespace App\Models\Product;

use App\Models\Image\Image;
use App\Models\Product\Tag;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\ProductAdditionalInfo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category\Category;

class Product extends Model
{

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function additionalInfo()
    {
        return $this->hasOne(ProductAdditionalInfo::class);
    }
}
