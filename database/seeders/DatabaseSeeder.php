<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Not used in this file
use Illuminate\Database\Seeder;
// Importing all the Seeder classes to be used
use Database\Seeders\AboutSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\ResumeSeeder;
use Database\Seeders\SocialSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\EducationSeeder;
use Database\Seeders\ExperienceSeeder;
use Database\Seeders\SeoPropertySeeder;
use Database\Seeders\HeroPropertySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Uncomment below to create 10 users using a factory (currently disabled)
        // User::factory(10)->create();

        // Calling each Seeder class to run and insert data into the database
        $this->call(ContactSeeder::class); // Seeds data for the Contact model
        $this->call(ExperienceSeeder::class); // Seeds data for the Experience model
        $this->call(EducationSeeder::class); // Seeds data for the Education model
        $this->call(SkillSeeder::class); // Seeds data for the Skill model
        $this->call(LanguageSeeder::class); // Seeds data for the Language model
        $this->call(ResumeSeeder::class); // Seeds data for the Resume model
        $this->call(AboutSeeder::class); // Seeds data for the About model
        $this->call(ProjectSeeder::class); // Seeds data for the Project model
        $this->call(SeoPropertySeeder::class); // Seeds data for the SeoProperty model
        $this->call(SocialSeeder::class); // Seeds data for the Social model
        $this->call(HeroPropertySeeder::class); // Seeds data for the HeroProperty model
    }
}
