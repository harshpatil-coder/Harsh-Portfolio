<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }    /**
     * Display the about me page.
     */
    public function about()
    {
        $personalInfo = [
            'name' => 'Bhea Bergonia',
            'address' => 'Luna, Bolinao, Pangasinan',
            'birthday' => 'December 16, 2003',
            'age' => 21
        ];

        $education = [
            [
                'level' => 'Secondary Education',
                'degree' => 'Cookery Strand',
                'school' => 'Luna National High School',
                'year' => '2020-2022',
                'description' => 'Gained hands-on experience in food preparation and kitchen management under the Cookery strand.'
            ],
            [
                'level' => 'College Education',
                'degree' => 'Bachelor of Science in Information Technology (BSIT)',
                'school' => 'Pangasinan State University – Alaminos Campus',
                'year' => '2022-Present (3rd Year)',
                'description' => 'Currently pursuing my degree in Information Technology, continuously learning and developing skills in the IT field.'
            ]
        ];

        $hobbies = [
            'Designing and Creative Work',
            'Learning New Technologies',
            'Food Preparation and Cooking',
            'Digital Art and Graphics',
            'Reading',
            'Problem Solving'
        ];

        return view('pages.about', compact('personalInfo', 'education', 'hobbies'));
    }    /**
     * Display the skills page.
     */
    public function skills()
    {
        $technicalSkills = [
            'Office Applications' => ['Microsoft Word', 'Microsoft Excel', 'Microsoft PowerPoint'],
            'Design Tools' => ['Canva', 'Basic Graphic Design Tools', 'Digital Art Tools'],
            'Programming & Web' => ['HTML/CSS (Learning)', 'Basic Web Development', 'IT Fundamentals'],
            'Other Technical' => ['Computer Hardware Basics', 'File Management', 'Internet Research']
        ];

        $softSkills = [
            'Creative Thinking',
            'Teamwork and Collaboration',
            'Communication Skills',
            'Time Management',
            'Adaptability',
            'Problem-Solving',
            'Attention to Detail',
            'Learning Enthusiasm'
        ];

        return view('pages.skills', compact('technicalSkills', 'softSkills'));
    }    /**
     * Display the portfolio/projects page.
     */
    public function portfolio()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Digital Menu Design Project',
                'description' => 'Created a comprehensive digital menu design for a local restaurant using Canva. The project involved designing visually appealing menu layouts with food photography, proper typography, and brand-consistent color schemes.',
                'technologies' => ['Canva', 'Graphic Design', 'Typography', 'Color Theory'],
                'image' => 'images/projects/menu-design.svg',
                'github' => '#',
                'demo' => '#',
                'features' => [
                    'Modern and clean menu layout design',
                    'High-quality food photography integration',
                    'Brand-consistent color palette',
                    'Easy-to-read typography and pricing',
                    'Multiple format outputs (print and digital)'
                ]
            ],
            [
                'id' => 2,
                'title' => 'Student Information System (Concept)',
                'description' => 'Conceptual design for a student information management system as part of my BSIT coursework. This project demonstrates understanding of database design, user interface planning, and system workflow.',
                'technologies' => ['System Analysis', 'Database Design', 'UI/UX Planning', 'Documentation'],
                'image' => 'images/projects/student-system.svg',
                'github' => '#',
                'demo' => '#',
                'features' => [
                    'Student registration and enrollment system',
                    'Grade management and tracking',
                    'Course scheduling and management',
                    'User role management (admin, teacher, student)',
                    'Report generation and analytics'
                ]
            ],
            [
                'id' => 3,
                'title' => 'Personal Portfolio Website',
                'description' => 'This very portfolio website built using Laravel framework as a learning project. Demonstrates web development skills learned during BSIT studies and showcases creative design abilities.',
                'technologies' => ['Laravel', 'PHP', 'HTML', 'CSS', 'Bootstrap', 'Blade Templates'],
                'image' => 'images/projects/portfolio-website.svg',
                'github' => '#',
                'demo' => '#',
                'features' => [
                    'Responsive design for all devices',
                    'Clean and modern user interface',
                    'Contact form with validation',
                    'Project showcase with detailed descriptions',
                    'Skills and education timeline'
                ]
            ]
        ];

        return view('pages.portfolio', compact('projects'));
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000'
        ]);

        // In a real application, you would save to database or send email
        // For now, we'll just return a success message

        return back()->with('success', 'Thank you for your message! I\'ll get back to you soon.');
    }
}
