<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait HasMeta
{
    public function generateMeta($title = null, $description = null)
    {
        $metaTitle = $title ?? config('app.name');
        $metaDescription = $description 
            ? Str::limit(strip_tags($description), 160) 
            : config('app.description', 'Default site description');

        return compact('metaTitle', 'metaDescription');
    }
}
