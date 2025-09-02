<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        $services = [
            ['icon' => '💡', 'title' => 'Innovation Consulting', 'desc' => 'Strategic guidance to innovate and grow.'],
            ['icon' => '⚡', 'title' => 'Digital Transformation', 'desc' => 'Modernize operations with advanced technologies.'],
            ['icon' => '🤖', 'title' => 'IoT Integration', 'desc' => 'Connect devices and systems seamlessly.'],
            ['icon' => '💻', 'title' => 'Custom Software Development', 'desc' => 'Tailored solutions for your unique needs.'],
            ['icon' => '📊', 'title' => 'Data Analytics & AI', 'desc' => 'Actionable insights powered by AI.'],
            // Add more services here
        ];

        $products = [
            ['image' => 'ams-dashboard.png', 'title' => 'UHF RFID Attendance Solution', 'desc' => 'Automated attendance system with dashboards and reports.'],
            ['image' => 'product2.png', 'title' => 'IoT Smart Devices', 'desc' => 'Connect and manage devices seamlessly.'],
            ['image' => 'product3.png', 'title' => 'AI Analytics Suite', 'desc' => 'Actionable insights powered by AI.'],
            // Add more products here
        ];

        return view('front.services', compact('services', 'products'));
    }
}
