<?php

namespace Database\Seeders;

use App\Models\About; // Import the About model to interact with the About table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder, so it's not necessary

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first About entry into the database
        About::create([
            'title' => 'About Us', // The title for the first About record
            'details' => 'We are a team of passionate developers committed to providing top-notch solutions.' // The details for the first About record
        ]);

    }
}
