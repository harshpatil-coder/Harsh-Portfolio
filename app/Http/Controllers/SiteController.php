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
            'name' => 'Harsh Patil',
            'address' => 'Ahmedabad, Gujarat, India',
            'birthday' => 'April 10, 2003',
            'age' => 22
        ];

        $education = [
            [
                'level' => 'Secondary Education',
                'degree' => 'High School',
                'school' => 'Muktijivan English Medium High School',
                'year' => '2020-2022',
                'description' => 'Completed secondary education with focus on science and mathematics, laying strong foundation for computer applications.'
            ],
            [
                'level' => 'College Education',
                'degree' => 'Bachelor of Computer Applications (BCA)',
                'school' => 'Silver Oak University',
                'year' => '2022-2025',
                'description' => 'Successfully completed BCA with expertise in web development, PHP Laravel Framework, Java programming, and IoT technologies. Specialized in creating modern web applications and exploring emerging technologies.'
            ]
        ];

        $hobbies = [
            'Web Development',
            'Learning New Technologies',
            'PHP Laravel Development',
            'Software Architecture',
            'Technical Problem Solving',
            'IoT Projects'
        ];

        return view('pages.about', compact('personalInfo', 'education', 'hobbies'));
    }    /**
     * Display the skills page.
     */
    public function skills()
    {
        $technicalSkills = [
            'Programming Languages' => ['HTML', 'CSS', 'Java', 'PHP', 'Laravel'],
            'Development Tools' => ['Visual Studio Code', 'Git', 'MySQL'],
            'Other Technical' => ['Web Development', 'Database Management', 'API Development']
        ];

        $softSkills = [
            'Creative Thinking',
            'Teamwork and Collaboration',
            'Communication Skills',
            'Time Management',
            'Problem-Solving',
            'Attention to Detail',
            'Adaptability',
            'Learning New Technologies'
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
                'technologies' => ['Canva', 'Typography', 'Color Theory'],
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
                'title' => 'School Management System Using Laravel',
                'description' => 'Conceptual design for a school management system as part of my Silver Oak University. This project demonstrates understanding of database design, user interface planning, and system workflow.',
                'technologies' => ['System Analysis', 'Database Design', 'Laravel PHP', 'Documentation'],
                'image' => 'images/projects/student-system.png',
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
