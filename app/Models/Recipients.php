<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipients extends Model
{
    use HasFactory;

    public function recipients()
    {
        return $this->hasMany(ApplicantLetters::class);
    }
}
