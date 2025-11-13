<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MessContact extends Model
{
    protected $table = "mess_contact";
    
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'content',
        'status'
    ];
}
