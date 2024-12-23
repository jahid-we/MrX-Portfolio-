<?php

namespace Database\Seeders;

use App\Models\Experience; // Import the Experience model to interact with the experience table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder and can be removed

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first experience entry into the database
        Experience::create([
            'duration' => 'Jan 2020 - Dec 2022', // Duration of the job (start and end date)
            'title' => 'Software Engineer', // Job title (e.g., Software Engineer)
            'designation' => 'Full Stack Developer', // Designation or role (e.g., Full Stack Developer)
            'details' => 'Worked on developing and maintaining web applications using Laravel and Vue.js.', // Description of job responsibilities
        ]);

        // Create and insert the second experience entry into the database
        Experience::create([
            'duration' => 'Feb 2018 - Dec 2019', // Duration of the job (start and end date)
            'title' => 'Web Developer', // Job title (e.g., Web Developer)
            'designation' => 'Frontend Developer', // Designation or role (e.g., Frontend Developer)
            'details' => 'Designed and implemented user interfaces with React and collaborated with backend teams.', // Description of job responsibilities
        ]);

        // Create and insert the third experience entry into the database
        Experience::create([
            'duration' => 'Mar 2015 - Jan 2018', // Duration of the job (start and end date)
            'title' => 'Intern', // Job title (e.g., Intern)
            'designation' => 'Junior Developer', // Designation or role (e.g., Junior Developer)
            'details' => 'Assisted in coding, testing, and debugging applications under the supervision of senior developers.', // Description of job responsibilities
        ]);
    }
}
