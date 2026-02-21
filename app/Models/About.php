<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'titleone','titletwo','titlethree',
        'imageone','imagetwo','imagethree',
        'descriptionone','descriptiontwo','descriptionthree'
    ];
}
