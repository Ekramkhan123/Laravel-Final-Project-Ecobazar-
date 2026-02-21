<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_title',
        'logo_light',
        'logo_dark',
        'favicon',
        'footer_text',
    ];
}
