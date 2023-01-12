<?php

namespace App\Http\Controllers;

use App\Models\ApplicantDetails;
use App\Models\ApplicantSocials;
use App\Models\ApplicantExperiences;
use App\Models\ApplicantEducations;
use App\Models\ApplicantLetters;
use App\Models\ApplicantPersonalInterests;
use App\Models\ApplicantSkills;
use App\Models\Recipients;

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
  private $applicantLetters;
  private $recipient;

  public function __construct()
  {
    $this->applicantDetails = ApplicantDetails::get();
    $this->applicantSocials = ApplicantSocials::get();
  }

  public function index()
  {
    return view('index', [
      'applicantDetails' => $this->applicantDetails,
      'applicantSocials' => $this->applicantSocials,
    ]);
  }

  public function cv()
  {
    $this->applicantExperiences = ApplicantExperiences::get();
    $this->applicantEducations = ApplicantEducations::get();
    $this->applicantPersonalInterests = ApplicantPersonalInterests::get();
    $this->applicantSkillsHigh = ApplicantSkills::where('skill_level', 'high')->get();
    $this->applicantSkillsMedium = ApplicantSkills::where('skill_level', 'medium')->get();
    $this->applicantSkillsLow = ApplicantSkills::where('skill_level', 'low')->get();

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

  public function cl()
  {
    $this->applicantLetters = ApplicantLetters::get();
    $this->recipient = Recipients::where('id', 1)->first();

    return view('cl', [
      'applicantDetails' => $this->applicantDetails,
      'applicantSocials' => $this->applicantSocials,
      'applicantLetters' => $this->applicantLetters,
      'recipient' => $this->recipient,
    ]);
  }
}
