<?php

namespace Database\Seeders;

use App\Models\Resume; // Import the Resume model to interact with the resumes table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder and can be removed

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first resume record into the database
        Resume::create(['downloadLink' => 'https://example.com/resume1.pdf']); // Insert the resume download link

    }
}
