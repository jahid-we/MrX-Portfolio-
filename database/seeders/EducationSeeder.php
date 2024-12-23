<?php

namespace Database\Seeders;

use App\Models\Education; // Import the Education model to interact with the education table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder and can be removed

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first education entry into the database
        Education::create([
            'duration' => '2015 - 2019', // The duration of the education (start year - end year)
            'institutionName' => 'University of Example', // Name of the institution
            'field' => 'Computer Science', // Field of study (e.g., Computer Science)
            'details' => 'Completed a Bachelor’s degree with a focus on software development and algorithms.', // Description of the education
        ]);

        // Create and insert the second education entry into the database
        Education::create([
            'duration' => '2012 - 2015', // The duration of the education (start year - end year)
            'institutionName' => 'Example High School', // Name of the institution
            'field' => 'Science Stream', // Field of study (e.g., Science Stream)
            'details' => 'Focused on Physics, Chemistry, and Mathematics with excellent academic performance.', // Description of the education
        ]);

        // Create and insert the third education entry into the database
        Education::create([
            'duration' => '2010 - 2012', // The duration of the education (start year - end year)
            'institutionName' => 'Example Junior High', // Name of the institution
            'field' => 'General Education', // Field of study (e.g., General Education)
            'details' => 'Completed foundational education with an emphasis on science and mathematics.', // Description of the education
        ]);
    }
}
