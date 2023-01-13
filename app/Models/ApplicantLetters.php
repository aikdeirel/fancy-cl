<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantLetters extends Model
{
    use HasFactory;

    public function ApplicantLetters()
    {
        return $this->belongsTo(Recipients::class);
    }
}
