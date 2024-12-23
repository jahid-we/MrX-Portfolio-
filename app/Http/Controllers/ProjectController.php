<?php

namespace App\Http\Controllers;

use view;
use Exception; // Import Exception for error handling
use Illuminate\Http\Request; // Handles incoming HTTP requests
use App\Helper\ResponseHelper; // Custom helper for structured API responses
use App\Models\Project; // Import the Project model to interact with the database

class ProjectController extends Controller
{
    // Render the projects page view
    public function page(Request $request)
    {
        return view('pages.projects'); // Loads the "projects" view from the "pages" folder
    }

    // API endpoint to fetch project data
    public function projectsData(Request $request)
    {
        try {
            // Retrieve all project records from the database
            $data = Project::get(); // Use Project::all() for a more consistent and expressive approach
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No Project Data Found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Return success response with data
        } catch (Exception $e) {
            // Return an error response with a 500 status code for unexpected errors
            return ResponseHelper::Out('error', 'something went wrong', 500);
        }
    }
}
