<?php

namespace Database\Seeders;

use App\Models\Project; // Import the Project model to interact with the projects table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder and can be removed

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first project record into the database
        Project::create([
            'title' => 'Project One', // Title of the project
            'previewLink' => 'https://example.com/project1', // Preview link to the project page
            'thumbnailLink' => 'https://example.com/images/project1.jpg', // URL of the project's thumbnail image
            'details' => 'This is a brief description of Project One.' // Short description of the project
        ]);

        // Create and insert the second project record into the database
        Project::create([
            'title' => 'Project Two', // Title of the project
            'previewLink' => 'https://example.com/project2', // Preview link to the project page
            'thumbnailLink' => 'https://example.com/images/project2.jpg', // URL of the project's thumbnail image
            'details' => 'This is a brief description of Project Two.' // Short description of the project
        ]);

        // Create and insert the third project record into the database
        Project::create([
            'title' => 'Project Three', // Title of the project
            'previewLink' => 'https://example.com/project3', // Preview link to the project page
            'thumbnailLink' => 'https://example.com/images/project3.jpg', // URL of the project's thumbnail image
            'details' => 'This is a brief description of Project Three.' // Short description of the project
        ]);
    }
}
