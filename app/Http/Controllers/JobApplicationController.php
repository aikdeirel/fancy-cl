<?php

namespace App\Http\Controllers;

use App\Models\Applicant;

class JobApplicationController extends Controller
{
  public $applicant;

  public function __construct()
  {
    $this->applicant = Applicant::where('id', 1)->firstOrNew();
  }

  public function cv()
  {
    dd($this->applicant);
  }
}
