<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    // Define which attributes are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'objective',
        'core_skills',
        'experience',
        'education',
        'personal_information',
        'certifications'
    ];

    // Define how certain attributes should be cast when retrieved from the database
    protected $casts = [
        'core_skills' => 'array',
        'experience' => 'array',
        'education' => 'array',
        'personal_information' => 'array',
        'certifications' => 'array',
    ];
}
