<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'customer';

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'phone',
        'company_name',
        'street_address',
        'country',
        'state',
        'postcode',
        'profile_image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function getProfileImageUrlAttribute()
    {
        return $this->profile_image
            ? asset('storage/customers/'.$this->profile_image)
            : asset('frontend/assets/image/default-user.png');
    }
    
}
