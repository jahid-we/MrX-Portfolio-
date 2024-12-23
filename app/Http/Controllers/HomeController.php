<?php

namespace App\Http\Controllers;

use view;
use App\Models\About; // Model for the "About" section
use App\Models\Social; // Model for social media links or data
use Illuminate\Http\Request; // Handles incoming HTTP requests
use App\Models\Heroproperty; // Model for hero section properties
use App\Helper\ResponseHelper; // Custom helper for consistent API responses

class HomeController extends Controller
{
    // Method to render the home page view
    function page(Request $request) {
        return view('pages.home'); // Returns the "home" view from the "pages" folder
    }

    // Method to fetch hero section data
    function heroData(Request $request) {
       try {
           $data = Heroproperty::get(); // Retrieve all hero section records
           if ($data->isEmpty()) { // Check if no data exists
            return ResponseHelper::Out('error', 'No Hero Data found', 404); // Return not found response
        }
           return ResponseHelper::Out('success', $data, 200); // Return success response with data
       } catch (Exception $e) {
           return ResponseHelper::Out('error', 'something went wrong', 500); // Handle errors with a consistent response
       }
    }

    // Method to fetch "About" section data
    function aboutData(Request $request) {
        try {
            $data = About::get(); // Retrieve all "About" section records
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No About Data found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Return success response with data
        } catch (Exception $e) {
            return ResponseHelper::Out('error', 'something went wrong', 500); // Handle errors with a consistent response
        }
    }

    // Method to fetch social media data
    function socialData(Request $request) {
        try {
            $data = Social::get(); // Retrieve all social media records
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No Social Data found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Return success response with data
        } catch (Exception $e) {
            return ResponseHelper::Out('error', 'something went wrong', 500); // Handle errors with a consistent response
        }
    }
}
