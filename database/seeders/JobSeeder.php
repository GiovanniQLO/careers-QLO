<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    public function run()
    {
        Job::create([
            'title' => 'Client Services Clerk-Las Vegas, Nevada.',
            'company' => 'Quiroga Law Office, PLLC',
            'type' => 'Full Time',
            'location' => 'US',
            'description' => 'Join us in giving immigrants a voice.',
            'jobType' => 'Support',
            'skills' => ['Results Orientation','Adaptation To Change','Teamwork','Customer Service','Conflict Resolution'],
            'languages' => ['Spanish','English'],
            'urgent' => true
        ]);

        Job::create([
            'title' => 'Client Service Coordinator - Tacoma, WA',
            'company' => 'Quiroga Law Office PLLC',
            'type' => 'Full Time',
            'location' => 'US',
            'description' => 'Together we can transform the lives of immigrants.',
            'jobType' => 'Support',
            'skills' => ['Sales','Communication Skill','Relationship','Client Services'],
            'languages' => ['Spanish','English'],
            'urgent' => true
        ]);

        Job::create([
            'title' => 'Case Support Assistant',
            'company' => 'Quiroga Law Office, PLLC',
            'type' => 'Full Time',
            'location' => 'Remote',
            'description' => 'Who We Are The Quiroga Law Office PLLC was founded in 2009.',
            'jobType' => 'Legal',
            'skills' => ['Team Mentality','Customer Service','Bilingual','C1','Tech Savvy','Microsoft Office','Detail-Oriented','Reliable'],
            'languages' => ['English','Spanish'],
            'urgent' => true
        ]);

        Job::create([
            'title' => 'Webmaster (Senior - Home Office)',
            'company' => 'Quiroga Law Office',
            'type' => 'Full Time',
            'location' => 'Remote',
            'description' => 'You will own the planning, development, and maintenance of our websites.',
            'jobType' => 'Tech',
            'skills' => ['WordPress','HTML','CSS','JavaScript','SEO','WCAG','OWASP','Web Security','GA4','Google Search Console','Automation','AWS LightSail','Zapier'],
            'languages' => ['English','Spanish'],
            'urgent' => true
        ]);
    }
}

