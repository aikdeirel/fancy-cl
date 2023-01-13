<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantDetails;
use App\Models\ApplicantEducations;
use App\Models\ApplicantSocials;
use App\Models\ApplicantExperiences;
use App\Models\ApplicantLetters;
use App\Models\ApplicantPersonalInterests;
use App\Models\ApplicantSkills;
use App\Models\Recipients;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ApplicantDetails::factory(3)->create();
        ApplicantSocials::factory(2)->create();
        ApplicantExperiences::factory(3)->create();
        ApplicantEducations::factory(3)->create();
        ApplicantPersonalInterests::factory(3)->create();
        ApplicantSkills::factory(15)->create();
        Recipients::factory(3)->create();
        ApplicantLetters::factory(5)->create();
    }
}
