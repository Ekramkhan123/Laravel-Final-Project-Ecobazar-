<?php

namespace App\Models\Contact;

use App\Models\Contact\ContactEmail;
use App\Models\Contact\ContactNumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['address'];

    public function emails()
    {
        return $this->hasMany(ContactEmail::class);
    }

    public function numbers()
    {
        return $this->hasMany(ContactNumber::class);
    }
}