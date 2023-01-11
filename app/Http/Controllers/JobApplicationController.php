<?php

namespace App\Http\Controllers;

use App\Models\ApplicantDetails;
use App\Models\ApplicantSocials;
use App\Models\ApplicantExperiences;
use App\Models\ApplicantEducations;
use App\Models\ApplicantPersonalInterests;
use App\Models\ApplicantSkills;

class JobApplicationController extends Controller
{
  private $applicantDetails;
  private $applicantSocials;
  private $applicantExperiences;
  private $applicantEducations;
  private $applicantPersonalInterests;
  private $applicantSkillsHigh;
  private $applicantSkillsMedium;
  private $applicantSkillsLow;

  public function __construct()
  {
    $this->applicantDetails = ApplicantDetails::get();
    $this->applicantSocials = ApplicantSocials::get();
    $this->applicantExperiences = ApplicantExperiences::get();
    $this->applicantEducations = ApplicantEducations::get();
    $this->applicantPersonalInterests = ApplicantPersonalInterests::get();
    $this->applicantSkillsHigh = ApplicantSkills::where('skill_level', 'high')->get();
    $this->applicantSkillsMedium = ApplicantSkills::where('skill_level', 'medium')->get();
    $this->applicantSkillsLow = ApplicantSkills::where('skill_level', 'low')->get();
  }

  public function cv()
  {
    return view('cv', [
      'applicantDetails' => $this->applicantDetails,
      'applicantSocials' => $this->applicantSocials,
      'applicantExperiences' => $this->applicantExperiences,
      'applicantEducations' => $this->applicantEducations,
      'applicantPersonalInterests' => $this->applicantPersonalInterests,
      'applicantSkillsHigh' => $this->applicantSkillsHigh,
      'applicantSkillsMedium' => $this->applicantSkillsMedium,
      'applicantSkillsLow' => $this->applicantSkillsLow,
    ]);
  }
}
