<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    /**
    *@var array
    **/
    protected $fillable=[
        'firstname',
        'lastname',
        'dob',
        'schoolcode',
        'admissionnumber',
        'email',
        'yearofstudy',
        'password',
        'confirmpassword',
        'role',

    ];
}
