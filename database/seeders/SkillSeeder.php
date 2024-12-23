<?php

namespace Database\Seeders;

use App\Models\Skill; // Import the Skill model to interact with the skills table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not needed in this seeder and can be removed

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert skills into the skills table using the create method
        Skill::create(['name' => 'Laravel']);  // Create a skill record for Laravel
        Skill::create(['name' => 'React']);    // Create a skill record for React
        Skill::create(['name' => 'Vue.js']);   // Create a skill record for Vue.js
        Skill::create(['name' => 'Node.js']);  // Create a skill record for Node.js
        Skill::create(['name' => 'Python']);   // Create a skill record for Python
        Skill::create(['name' => 'MySQL']);    // Create a skill record for MySQL
    }
}
