<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantExperiences extends Model
{
    use HasFactory;

    protected $dates = [
        'experience_from',
        'experience_to',
    ];
}
