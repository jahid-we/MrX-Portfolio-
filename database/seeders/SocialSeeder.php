<?php

namespace Database\Seeders;

use App\Models\Social; // Import the Social model to interact with the socials table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not needed in this seeder and can be removed

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a record into the socials table using the create method
        Social::create([
            'twitterLink' => 'https://twitter.com/example',  // Twitter profile link
            'githubLink' => 'https://github.com/example',    // GitHub profile link
            'linkedinLink' => 'https://linkedin.com/in/example' // LinkedIn profile link
        ]);
    }
}
