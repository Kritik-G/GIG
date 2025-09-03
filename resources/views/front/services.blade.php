@extends('front.layouts.app')

@section('content')
    <style>
        /* [Original CSS remains unchanged] */
        .container-max {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .section-padding {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        @media (max-width: 1024px) {
            .section-padding {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #2563eb;
            color: #fff;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #1e40af;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #eff6ff;
            color: #eff6ff;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background-color: #2563eb;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-gradient {
            background: linear-gradient(to right, #1e3a8a, #4f46e5);
        }

        .featured-service {
            border: 2px solid #3b82f6;
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
            }

            50% {
                box-shadow: 0 0 60px rgba(255, 255, 255, 0.4);
            }
        }

        .animate-pulse-glow {
            animation: pulse-glow 2s infinite;
        }

        @keyframes bounce-spin {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            25% {
                transform: translateY(-10px) rotate(15deg);
            }

            50% {
                transform: translateY(-15px) rotate(-10deg);
            }

            75% {
                transform: translateY(-10px) rotate(10deg);
            }
        }

        .animate-bounce-spin {
            animation: bounce-spin 2.5s infinite;
        }

        @keyframes pulse-text {

            0%,
            100% {
                color: #ffffff;
            }

            50% {
                color: #facc15;
            }
        }

        .animate-pulse-text {
            animation: pulse-text 2s infinite;
        }

        @keyframes pulse-slow {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.1;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.2;
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 6s infinite;
        }

        .featured-slider div {
            display: none;
        }

        .featured-slider div:first-child {
            display: block;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-gradient text-white overflow-hidden">
        <div class="container-max mx-auto py-24 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight fade-in">Our Services & Products</h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 fade-in">
                Discover our innovative solutions designed to empower your organization with smart technology.
            </p>
            <a href="#RFID" class="btn-primary fade-in">Explore Now</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-gray-50 py-20">
        <div class="container-max mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    We offer a range of services to streamline operations and enhance connectivity for your organization.
                </p>
            </div>
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
                @php
                    $services = [
                        [
                            'icon' => '📋',
                            'title' => 'Management Tools',
                            'desc' =>
                                'Comprehensive tools for exams, assignments, leave, teacher, library, and vehicle management.',
                        ],
                        [
                            'icon' => '📢',
                            'title' => 'Communication & Notices',
                            'desc' =>
                                'Seamless communication and notice distribution for teachers, parents, and students.',
                        ],
                        [
                            'icon' => '📊',
                            'title' => 'Analytics & Reporting',
                            'desc' => 'Detailed analytics and report generation for data-driven insights.',
                        ],
                        [
                            'icon' => '🔧',
                            'title' => 'System Integrations',
                            'desc' => 'Integrations for electric bell, calendar, events, and security features.',
                        ],
                        [
                            'icon' => '🖨️',
                            'title' => 'ID Card & Marksheet Generation',
                            'desc' => 'Automated generation of printable ID cards and marksheets.',
                        ],
                    ];
                @endphp
                @foreach ($services as $service)
                    <div
                        class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition-shadow duration-300 fade-in">
                        <div class="text-4xl mb-4 animate-bounce-spin">{{ $service['icon'] }}</div>
                        <h3 class="text-xl font-bold mb-2">{{ $service['title'] }}</h3>
                        <p class="text-gray-600">{{ $service['desc'] }}</p>
                        <a href="{{ route('contact') }}"
                            class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                            Learn More
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Product: UHF RFID Attendance Solution -->
    <section id="RFID" class="relative py-24 bg-blue-900 text-white overflow-hidden">
        <div class="container-max mx-auto relative z-10">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                <div class="relative fade-in">
                    <div
                        class="rounded-xl shadow-2xl overflow-hidden transform transition-transform duration-500 hover:scale-105 animate-pulse-glow">
                        <img src="{{ asset('images/ams-dashboard.png') }}" alt="UHF RFID Attendance Management"
                            class="w-full h-auto">
                        <div class="absolute top-4 right-4 text-6xl animate-bounce-spin">📡</div>
                    </div>
                </div>
                <div class="fade-in mt-12 lg:mt-0">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-4 animate-pulse-text">
                        UHF RFID Attendance Solution
                    </h2>
                    <p class="text-xl md:text-2xl mb-6">
                        A robust system for automated attendance, GPS bus tracking, and student management.
                    </p>
                    <div class="bg-white text-gray-900 rounded-xl p-6 mb-6 shadow-xl relative overflow-hidden">
                        <div class="featured-slider space-y-3 font-semibold text-lg">
                            <div>✅ Automated UHF RFID Attendance</div>
                            <div>✅ Real-time GPS Bus Tracking</div>
                            <div>✅ Comprehensive Student Management</div>
                            <div>✅ Offline Mode Support</div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary relative group overflow-hidden">
                            Learn More
                        </a>
                        <a href="{{ route('contact') }}" class="btn-outline">
                            Request a Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-400 opacity-20 rounded-full blur-3xl animate-pulse-slow">
        </div>
    </section>

    <!-- Other Products Section -->
    <section class="bg-gray-50 py-20">
        <div class="container-max mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Other Products</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Explore our innovative products designed to enhance organizational efficiency.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $products = [
                        [
                            'icon' => '📋',
                            'title' => 'Smart Management Suite',
                            'desc' =>
                                'Comprehensive tools for exams, assignments, leave, teacher, and vehicle management.',
                            'route' => 'products.management-suite',
                        ],
                        [
                            'icon' => '📊',
                            'title' => 'Analytics & Reporting Platform',
                            'desc' => 'Advanced analytics and marksheet generation for actionable insights.',
                            'route' => 'products.analytics-platform',
                        ],
                        [
                            'icon' => '🔗',
                            'title' => 'Integrated School System',
                            'desc' => 'Seamless integrations for communication, notices, events, and security.',
                            'route' => 'products.school-system',
                        ],
                    ];
                @endphp
                @foreach ($products as $product)
                    <div
                        class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition-shadow duration-300 fade-in">
                        <div class="text-4xl mb-4 animate-bounce-spin">{{ $product['icon'] }}</div>
                        <h3 class="text-xl font-bold mb-2">{{ $product['title'] }}</h3>
                        <p class="text-gray-600">{{ $product['desc'] }}</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                            Learn More
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Fade-in elements
                const fadeElements = document.querySelectorAll('.fade-in');
                setTimeout(() => {
                    fadeElements.forEach((el, idx) => setTimeout(() => el.classList.add('visible'), idx * 150));
                }, 200);

                // Featured Slider Animation
                const slides = document.querySelectorAll('.featured-slider div');
                let idx = 0;
                setInterval(() => {
                    slides.forEach((s, i) => s.style.display = i === idx ? 'block' : 'none');
                    idx = (idx + 1) % slides.length;
                }, 2500);
            });
        </script>
    @endpush
@endsection
