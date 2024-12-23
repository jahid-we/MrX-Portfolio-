<?php

namespace Database\Seeders;

use App\Models\Seoproperty; // Import the Seoproperty model to interact with the seoproperties table
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // This trait is not used in this seeder and can be removed

class SeoPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and insert the SEO properties for the home page
        Seoproperty::create([
            'pageName' => 'home', // The page name (home page)
            'title' => 'Home Page', // The title for SEO
            'keywords' => 'home, website, seo', // The keywords for SEO
            'description' => 'Welcome to the home page of our website.', // Description for SEO
            'ogSiteName' => 'MyWebsite', // Open Graph site name
            'ogUrl' => 'https://example.com', // Open Graph URL for the page
            'ogTitle' => 'Home Page', // Open Graph title for the page
            'ogDescription' => 'Description of the home page.', // Open Graph description
            'ogImage' => 'https://example.com/images/home.jpg' // Open Graph image for the page
        ]);

        // Create and insert the SEO properties for the resume page
        Seoproperty::create([
            'pageName' => 'resume', // The page name (resume page)
            'title' => 'Resume', // The title for SEO
            'keywords' => 'resume, portfolio, skills', // The keywords for SEO
            'description' => 'My professional resume.', // Description for SEO
            'ogSiteName' => 'MyWebsite', // Open Graph site name
            'ogUrl' => 'https://example.com/resume', // Open Graph URL for the page
            'ogTitle' => 'Resume', // Open Graph title for the page
            'ogDescription' => 'Description of my resume.', // Open Graph description
            'ogImage' => 'https://example.com/images/resume.jpg' // Open Graph image for the page
        ]);

        // Create and insert the SEO properties for the projects page
        Seoproperty::create([
            'pageName' => 'projects', // The page name (projects page)
            'title' => 'Projects', // The title for SEO
            'keywords' => 'projects, portfolio, work', // The keywords for SEO
            'description' => 'My projects and work showcase.', // Description for SEO
            'ogSiteName' => 'MyWebsite', // Open Graph site name
            'ogUrl' => 'https://example.com/projects', // Open Graph URL for the page
            'ogTitle' => 'Projects', // Open Graph title for the page
            'ogDescription' => 'Description of my projects.', // Open Graph description
            'ogImage' => 'https://example.com/images/projects.jpg' // Open Graph image for the page
        ]);

        // Create and insert the SEO properties for the contact page
        Seoproperty::create([
            'pageName' => 'contact', // The page name (contact page)
            'title' => 'Contact', // The title for SEO
            'keywords' => 'contact, get in touch, reach out', // The keywords for SEO
            'description' => 'Contact me for inquiries and collaborations.', // Description for SEO
            'ogSiteName' => 'MyWebsite', // Open Graph site name
            'ogUrl' => 'https://example.com/contact', // Open Graph URL for the page
            'ogTitle' => 'Contact', // Open Graph title for the page
            'ogDescription' => 'Description of the contact page.', // Open Graph description
            'ogImage' => 'https://example.com/images/contact.jpg' // Open Graph image for the page
        ]);
    }
}
