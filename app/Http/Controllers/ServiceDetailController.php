<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function service_detail()
    {
        $service_detail = [
            [
                'name' => 'Health Care',
                'description' => 'Professional veterinary care and pet psychology services.',
                'icon' => 'health-icon.png',
                'color' => 'green-200',
            ],
            [
                'name' => 'Beauty & Spa',
                'description' => 'Grooming, bathing, and relaxation treatments for your pets.',
                'icon' => 'beauty-icon.png',
                'color' => 'pink-200',
            ],
            [
                'name' => 'Pet Training',
                'description' => 'Expert training sessions for better behavior and obedience.',
                'icon' => 'training-icon.png',
                'color' => 'blue-200',
            ],
            [
                'name' => 'Accommodation',
                'description' => "Comfortable boarding facilities for your pets when you're away.",
                'icon' => 'accommodation-icon.png',
                'color' => 'purple-200',
            ],
        ];

        return view('pages.service_detail', compact('service_detail'));
    }
}
