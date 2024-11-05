<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Health Care',
                'color' => 'c2f4c7',
                'icon' => 'images/service-icon-1 1.png',
                'bg' => 'bg-[#FFD6E9]'
            ],
            [
                'title' => 'Beauty & Spa',
                'color' => 'ffc0bc',
                'icon' => 'images/service-icon-3 1.png',
                'bg' => 'bg-[#D6EBFF]'
            ],
            [
                'title' => 'Pet Training',
                'color' => 'c2e2f4',
                'icon' => 'images/service-icon-2 1.png',
                'bg' => 'bg-[#E9D6FF]'
            ],
        ];

        $importancePoints = [
            [
                'title' => 'PHYSICAL HEALTH',
                'description' => 'Nutrition and regular medical examinations help pets grow healthily and prevent diseases.',
                'image' => 'images/importance-1.png' 
            ],
            [
                'title' => 'MENTAL HEALTH',
                'description' => 'Regular interaction keeps pets happy, reduces stress, and improves behavior.',
                'image' => 'images/importance-2.png' 
            ],
            [
                'title' => 'DISEASE PREVENTION',
                'description' => 'Early recognition of signs of illness helps pets receive timely treatment.',
                'image' => 'images/importance-3.png' 
            ],
            [
                'title' => 'GOOD LIVING ENVIRONMENT',
                'description' => 'Hygiene and comfortable living space increase the quality of life for pets.',
                'image' => 'images/importance-4.png'
            ],
            [
                'title' => 'BUILD COMMUNITY',
                'description' => 'Caring for pets contributes to creating a responsible pet-loving community.',
                'image' => 'images/importance-5.png'
            ],
        ];

        $stats = [
            [
                'value' => '10+',
                'label' => 'Years of Experience'
            ],
            [
                'value' => '20',
                'label' => 'Talented Vets'
            ],
            [
                'value' => '1000+',
                'label' => 'Happy Clients'
            ],
            [
                'value' => '24/7',
                'label' => 'Support'
            ],
        ];

        $reasons = [
            [
                'title' => 'Experienced Professionals',
                'description' => "Our team consists of highly trained and passionate pet care experts dedicated to ensuring your pet's well-being.",
                'icon' => 'images/professional-icon.png'
            ],
            [
                'title' => 'Comprehensive Services',
                'description' => "From grooming to boarding, we offer a wide range of services to meet all your pet's needs under one roof.",
                'icon' => 'images/services-icon.png'
            ],
            [
                'title' => 'Loving Environment',
                'description' => "We prioritize your pet's safety and comfort, providing a nurturing and secure setting for them to thrive.",
                'icon' => 'images/environment-icon.png'
            ],
            [
                'title' => 'Customer Satisfaction',
                'description' => "We pride ourselves on exceptional customer service, with numerous happy clients who trust us.",
                'icon' => 'images/satisfaction-icon.png'
            ],
        ];

        $statistics = [
            [
                'icon' => 'images/experience-icon.png',
                'title' => 'Over 10 years of',
                'description' => 'experience'
            ],
            [
                'icon' => 'images/vets-icon.png',
                'title' => '20 talented vets',
                'description' => 'ready to help you'
            ],
            [
                'icon' => 'images/checkup-icon.png',
                'title' => 'Regular Veterinary',
                'description' => 'Check-ups'
            ],
            [
                'icon' => 'images/staff-icon.png',
                'title' => 'Enthusiastic and',
                'description' => 'friendly staff'
            ]
        ];

        return view('home', compact('services', 'importancePoints', 'stats', 'reasons', 'statistics'));
    }
}