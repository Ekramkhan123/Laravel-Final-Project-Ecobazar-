<?php

namespace App\Models\Contact;

use App\Models\Contact\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactNumber extends Model
{
    use HasFactory;

    protected $fillable = ['contact_id', 'number'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
