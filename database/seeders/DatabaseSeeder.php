<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantDetails;
use App\Models\ApplicantEducations;
use App\Models\ApplicantSocials;
use App\Models\ApplicantExperiences;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ApplicantDetails::factory(5)->create();
        ApplicantSocials::factory(2)->create();
        ApplicantExperiences::factory(3)->create();
        ApplicantEducations::factory(3)->create();
    }
}
