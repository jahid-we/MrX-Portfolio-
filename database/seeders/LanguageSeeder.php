<?php

namespace Database\Seeders;

use App\Models\Language; // Import the Language model to interact with the languages table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder and can be removed

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first language record into the database
        Language::create(['name' => 'English']); // Insert 'English' into the 'name' column of the languages table

        // Create and insert the second language record into the database
        Language::create(['name' => 'Hindi']); // Insert 'Hindi' into the 'name' column of the languages table

        // Create and insert the third language record into the database
        Language::create(['name' => 'Bengali']); // Insert 'Bengali' into the 'name' column of the languages table
    }
}
