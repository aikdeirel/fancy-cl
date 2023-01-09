<?php

namespace App\Http\Controllers;

use App\Models\ApplicantDetails;
use App\Models\ApplicantSocials;
use App\Models\ApplicantExperiences;
use App\Models\ApplicantEducations;
use App\Models\ApplicantPersonalInterests;

class JobApplicationController extends Controller
{
  private $applicantDetails;
  private $applicantSocials;
  private $applicantExperiences;
  private $applicantEducations;
  private $applicantPersonalInterests;

  public function __construct()
  {
    $this->applicantDetails = ApplicantDetails::get();
    $this->applicantSocials = ApplicantSocials::get();
    $this->applicantExperiences = ApplicantExperiences::get();
    $this->applicantEducations = ApplicantEducations::get();
    $this->applicantPersonalInterests = ApplicantPersonalInterests::get();
  }

  public function cv()
  {
    return view('cv', [
      'applicantDetails' => $this->applicantDetails,
      'applicantSocials' => $this->applicantSocials,
      'applicantExperiences' => $this->applicantExperiences,
      'applicantEducations' => $this->applicantEducations,
      'applicantPersonalInterests' => $this->applicantPersonalInterests,
    ]);
  }
}
