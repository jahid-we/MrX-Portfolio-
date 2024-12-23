<?php

namespace Database\Seeders;

use App\Models\Contact; // Import the Contact model to interact with the contact table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder, so it's not necessary

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the first contact entry into the database
        Contact::create([
            'name' => 'John Doe', // Name of the first contact
            'email' => 'john.doe@example.com', // Email of the first contact
            'phone' => '1234567890', // Phone number of the first contact
            'message' => 'Hello, I am interested in your services.', // Message from the first contact
        ]);

    }
}
