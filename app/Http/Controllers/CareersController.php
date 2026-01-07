<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index()
    {
        $testimonials = collect([
            (object)[
                'quote' => 'Working here has been an amazing experience. The team is supportive and the projects are challenging.',
                'name' => 'Jane Smith',
                'role' => 'Senior Developer',
                'location' => 'New York'
            ],
            (object)[
                'quote' => 'I\'ve grown professionally more in the past year here than in my previous three years elsewhere.',
                'name' => 'John Doe',
                'role' => 'Project Manager',
                'location' => 'San Francisco'
            ],
            (object)[
                'quote' => 'The work-life balance and company culture make this the best place I\'ve ever worked.',
                'name' => 'Robert Johnson',
                'role' => 'Designer',
                'location' => 'Austin'
            ]
        ]);

        $positions = collect([
            (object)[
                'title' => 'Frontend Developer',
                'description' => 'We\'re looking for a skilled Frontend Developer to join our team and help build amazing user experiences.',
                'location' => 'Remote',
                'type' => 'Full-time',
                'experience' => '2+ years',
                'apply_url' => '#'
            ],
            (object)[
                'title' => 'Backend Developer',
                'description' => 'Join our backend team to develop and maintain our server-side applications and APIs.',
                'location' => 'On-site',
                'type' => 'Full-time',
                'experience' => '3+ years',
                'apply_url' => '#'
            ],
            (object)[
                'title' => 'UX/UI Designer',
                'description' => 'Create beautiful and intuitive user interfaces for our web and mobile applications.',
                'location' => 'Hybrid',
                'type' => 'Full-time',
                'experience' => '2+ years',
                'apply_url' => '#'
            ],
            (object)[
                'title' => 'Project Manager',
                'description' => 'Lead cross-functional teams to deliver projects on time and within budget.',
                'location' => 'On-site',
                'type' => 'Full-time',
                'experience' => '4+ years',
                'apply_url' => '#'
            ]
        ]);

        return view('careers', compact('testimonials', 'positions'));
    }

    public function jobs()
    {
        return view('jobs');
    }
}