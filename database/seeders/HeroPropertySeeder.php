<?php

namespace Database\Seeders;

use App\Models\Heroproperty; // Import the Heroproperty model to interact with the heroproperties table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder and can be removed

class HeroPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first hero property entry into the database
        Heroproperty::create([
            'keyLine' => 'Design &middot; Development &middot; Marketing', // Keyline or tagline for the hero section
            'title' => 'Get online and grow fast', // Main title of the hero section
            'short_title' => 'I can help your business to', // Shortened version of the title
            'img' => 'https://example.com/images/hero1.jpg' // URL of the image for the hero section
        ]);

    }
}
