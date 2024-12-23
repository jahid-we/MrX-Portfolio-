<?php

namespace App\Http\Controllers;

use view;
use App\Models\Skill; // Model for skills
use App\Models\Language; // Model for languages
use App\Models\Resume; // Model for resume data
use App\Models\Experience; // Model for experiences
use Exception; // Import Exception for error handling
use Illuminate\Http\Request; // Handles HTTP requests
use App\Models\Education; // Model for education records
use App\Helper\ResponseHelper; // Custom helper for standardized API responses

class ResumeController extends Controller
{
    // Display the resume page view
    public function page(Request $request)
    {
        return view('pages.resume'); // Returns the "resume" view from the "pages" folder
    }

    // Fetch and return all resumes
    public function resumeLink(Request $request)
    {
        try {
            $data = Resume::get(); // Retrieve all resume records
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No resume found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Success response with resume data
        } catch (Exception $e) {
            return ResponseHelper::Out('error', 'something went wrong', 500); // Error response for unexpected issues
        }
    }

    // Fetch and return all experiences
    public function experiencesData(Request $request)
    {
        try {
            $data = Experience::get(); // Retrieve all experience records
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No Experience Data found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Success response with experience data
        } catch (Exception $e) {
            return ResponseHelper::Out('error', 'something went wrong', 500); // Error response for unexpected issues
        }
    }

    // Fetch and return all education records
    public function educationData(Request $request)
    {
        try {
            $data = Education::get(); // Retrieve all education records
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No Education Data found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Success response with education data
        } catch (Exception $e) {
            return ResponseHelper::Out('error', 'something went wrong', 500); // Error response for unexpected issues
        }
    }

    // Fetch and return all skills
    public function skillsData(Request $request)
    {
        try {
            $data = Skill::get(); // Retrieve all skill records
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No Skill Data found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Success response with skill data
        } catch (Exception $e) {
            return ResponseHelper::Out('error', 'something went wrong', 500); // Error response for unexpected issues
        }
    }

    // Fetch and return all languages
    public function languageData(Request $request)
    {
        try {
            $data = Language::get(); // Retrieve all language records
            if ($data->isEmpty()) { // Check if no data exists
                return ResponseHelper::Out('error', 'No Language Data Found', 404); // Return not found response
            }
            return ResponseHelper::Out('success', $data, 200); // Success response with language data
        } catch (Exception $e) {
            return ResponseHelper::Out('error', 'something went wrong', 500); // Error response for unexpected issues
        }
    }
}
