<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CdfBursaryApplication extends Model
{
    use HasFactory;
    /**
    *@var array
    **/
    protected $fillable=[
        'gender',
        'institution_type',
        'institution_name',
        'campus',
        'faculty',
        'course',
        'mode_of_study',
        'year_of_study',
        'expected_completion_date',
        'personal_phone_number',
        'institution_telephone_number',
        'amount_applied_for',
        'chief_verification_code',
        'religious_leader_verification_code',
    ];
}
