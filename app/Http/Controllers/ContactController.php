<?php

namespace App\Http\Controllers;

use view;
use Exception; // Import Exception for error handling
use Illuminate\Http\Request; // Handles HTTP requests
use App\Models\Contact; // Model for storing contact requests
use App\Helper\ResponseHelper; // Helper for standardized API responses

class ContactController extends Controller
{
    // Method to render the contact page view
    public function page(Request $request)
    {
        return view('pages.contact'); // Loads the "contact" view from the "pages" folder
    }

    // Method to handle contact form submissions
    public function contactRequest(Request $request)
    {
        try {
            // Create a new contact record in the database
            $contact = Contact::create([
                'name' => $request->input('name'), // Get 'name' input from the request
                'email' => $request->input('email'), // Get 'email' input
                'phone' => $request->input('phone'), // Get 'phone' input
                'message' => $request->input('message') // Get 'message' input
            ]);

            // Return success response
            return ResponseHelper::Out('success', 'Your message has been sent successfully', 200);
        } catch (Exception $e) {
            // Handle any unexpected errors and return an error response
            return ResponseHelper::Out('error', 'something went wrong', 500);
        }
    }
}

