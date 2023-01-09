<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEducations extends Model
{
    use HasFactory;

    protected $dates = [
        'education_from',
        'education_to',
    ];
}
