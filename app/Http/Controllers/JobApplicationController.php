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
  private $applicantSkillsBackend;
  private $applicantSkillsDatabase;
  private $applicantSkillsFrontend;
  private $applicantSkillsBasic;
  private $applicantSkillsMisc;
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
    $this->applicantExperiences = ApplicantExperiences::orderBy('experience_from', 'desc')->get();
    $this->applicantEducations = ApplicantEducations::orderBy('education_from', 'desc')->get();
    $this->applicantPersonalInterests = ApplicantPersonalInterests::get();
    $this->applicantSkillsBackend = ApplicantSkills::where('skill_category', 'backend')->orderBy('skill_order')->get();
    $this->applicantSkillsDatabase = ApplicantSkills::where('skill_category', 'database')->orderBy('skill_order')->get();
    $this->applicantSkillsFrontend = ApplicantSkills::where('skill_category', 'frontend')->orderBy('skill_order')->get();
    $this->applicantSkillsBasic = ApplicantSkills::where('skill_category', 'basic')->orderBy('skill_order')->get();
    $this->applicantSkillsMisc = ApplicantSkills::where('skill_category', 'misc')->orderBy('skill_order')->get();

    return view('cv', [
      'applicantDetails' => $this->applicantDetails,
      'applicantSocials' => $this->applicantSocials,
      'applicantExperiences' => $this->applicantExperiences,
      'applicantEducations' => $this->applicantEducations,
      'applicantPersonalInterests' => $this->applicantPersonalInterests,
      'applicantSkillsBackend' => $this->applicantSkillsBackend,
      'applicantSkillsDatabase' => $this->applicantSkillsDatabase,
      'applicantSkillsFrontend' => $this->applicantSkillsFrontend,
      'applicantSkillsBasic' => $this->applicantSkillsBasic,
      'applicantSkillsMisc' => $this->applicantSkillsMisc,
    ]);
  }

  public function cl()
  {
    $recipientId = env('RECIPIENT_ID');
    $this->applicantLetters = ApplicantLetters::where('recipients_id', $recipientId)->get();
    $this->recipient = Recipients::where('id', $recipientId)->first();

    return view('cl', [
      'applicantDetails' => $this->applicantDetails,
      'applicantSocials' => $this->applicantSocials,
      'applicantLetters' => $this->applicantLetters,
      'recipient' => $this->recipient,
    ]);
  }
}
