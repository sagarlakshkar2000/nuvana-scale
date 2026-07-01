<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        // Static array of jobs as requested
        $jobs = [
            [
                'title' => 'Business development manager',
                'job_type' => 'Full Time',
                'experience' => '5 yr',
                'qualification' => 'Graduation post graduate',
                'hiring_process' => 'Face to face',
                'location' => 'Jaipur Mansarover patel marg',
                'summary' => 'We are seeking an energetic and target-driven Business Development Manager to expand our client base. You will be responsible for creating effective business plans, identifying new market opportunities, and boosting our overall sales performance.',
                'skills' => [
                    'Proven working experience as a business development manager, sales executive or a relevant role',
                    'Proven sales track record',
                    'Strong communication and negotiation skills',
                    'Ability to build rapport with clients'
                ],
                'responsibilities' => [
                    'Develop a growth strategy focused on financial gain and customer satisfaction',
                    'Conduct research to identify new markets and customer needs',
                    'Arrange business meetings with prospective clients',
                    'Promote the company’s products addressing clients’ objectives',
                    'Prepare sales contracts ensuring adherence to law-established rules and guidelines'
                ]
            ]
            // Add more jobs here later if needed
        ];

        return view('pages.career', compact('jobs'));
    }
}
