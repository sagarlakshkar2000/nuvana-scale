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
        'title' => 'Business Development Manager (BDM)',
        'job_type' => 'Full Time',
        'experience' => '1-2 Years',
        'qualification' => 'Any Graduation',
        'hiring_process' => 'Face to Face Interview',
        'location' => 'Beelwa, Jaipur',
        'summary' => 'We are looking for a motivated and enthusiastic Business Development Manager (BDM) to join our growing team. The ideal candidate will be responsible for identifying new business opportunities, building strong client relationships, and supporting the company’s sales growth. Candidates with excellent communication skills and a passion for sales and customer engagement are encouraged to apply.',
        'skills' => [
          'Strong communication and interpersonal skills',
          'Basic sales and business development knowledge',
          'Ability to build and maintain client relationships',
          'Good negotiation and presentation skills',
          'Proficiency in MS Office and business communication tools',
          'Ability to work independently and achieve targets',
          'Problem-solving and decision-making abilities',
          'Willingness to learn and adapt in a fast-paced environment'
        ],
        'responsibilities' => [
          'Identify and develop new business opportunities through market research and networking',
          'Build and maintain strong relationships with prospective and existing clients',
          'Conduct client meetings and presentations to promote company services',
          'Understand customer requirements and provide suitable business solutions',
          'Assist in preparing proposals, quotations, and business agreements',
          'Coordinate with internal teams to ensure smooth project execution',
          'Track sales activities and maintain accurate client records',
          'Achieve assigned sales targets and contribute to overall business growth',
          'Stay updated on market trends, competitors, and industry developments'
        ],
        'additional_details' => [
          'gender_preference' => 'Female Candidates Preferred',
          'work_location' => 'Beelwa, Jaipur',
          'industry' => 'Sales & Business Development',
          'joining' => 'Immediate Joiners Preferred'
        ]
      ],
      [
        'title' => 'Service Engineer',
        'job_type' => 'Full Time',
        'experience' => '1 Year',
        'qualification' => 'ITI / Diploma (EC)',
        'hiring_process' => 'Face to Face Interview',
        'location' => 'Beelwa, Jaipur',
        'summary' => 'We are seeking a dedicated and technically skilled Service Engineer to join our team. The ideal candidate will be responsible for installation, maintenance, troubleshooting, and repair of equipment and systems. The candidate should possess strong technical knowledge, problem-solving abilities, and a customer-focused approach to ensure efficient service delivery and customer satisfaction.',
        'skills' => [
          'Basic knowledge of electronics and electrical systems',
          'Troubleshooting and fault diagnosis skills',
          'Equipment installation and maintenance experience',
          'Ability to read technical drawings and manuals',
          'Good communication and customer handling skills',
          'Knowledge of preventive and corrective maintenance',
          'Ability to work independently and in a team environment',
          'Strong problem-solving and analytical skills'
        ],
        'responsibilities' => [
          'Install, inspect, maintain, and repair equipment and systems',
          'Diagnose technical issues and provide effective solutions',
          'Perform preventive and corrective maintenance activities',
          'Respond to customer service requests and technical queries',
          'Prepare service reports and maintain accurate maintenance records',
          'Coordinate with internal teams to resolve technical problems efficiently',
          'Ensure compliance with safety and quality standards during service operations',
          'Provide technical support and guidance to customers when required',
          'Monitor equipment performance and recommend improvements'
        ],
        'additional_details' => [
          'education' => 'ITI / Diploma (EC)',
          'experience_required' => '1 Year',
          'industry' => 'Engineering & Technical Services',
          'joining' => 'Immediate Joiners Preferred'
        ]
      ],
    ];

    return view('pages.career', compact('jobs'));
  }
}
