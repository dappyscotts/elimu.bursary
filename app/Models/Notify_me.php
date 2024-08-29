<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notify_me extends Model
{
    use HasFactory;
    /**
    *@var array
    **/
    protected $fillable=[
        'email',
        'phone_number',

    ];
}
