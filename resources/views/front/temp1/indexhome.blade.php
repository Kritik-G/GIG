@extends('front.layouts.app')

@section('content')
    <style>
        /* Container */
        .container-max {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        /* Section padding */
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

        /* Buttons */
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

        /* Fade-in animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hero gradient */
        .hero-gradient {
            background: linear-gradient(to right, #1e3a8a, #4f46e5);
        }

        /* Featured service */
        .featured-service {
            border: 2px solid #3b82f6;
        }

        /* Animations */
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
        <div class="container-max mx-auto py-24 relative z-10">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                <div class="fade-in">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Smart Attendance, Seamless Learning
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-blue-100">
                        Transform school operations with e-HAZIR, our UHF RFID-based attendance and management system.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary text-center">Get Consultation</a>
                        <a href="#services" class="btn-outline text-center">Explore e-HAZIR</a>
                    </div>
                </div>
                <div class="fade-in mt-12 lg:mt-0">
                    <img src="{{ asset('images/ehazir-hero.png') }}" alt="e-HAZIR System"
                        class="w-full h-auto rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-gray-50 py-20">
        <div class="container-max mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Solutions</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Empowering schools and businesses with innovative technology solutions.
                </p>
            </div>

            <!-- Featured e-HAZIR Product -->
            <div
                class="relative py-24 bg-gradient-to-r from-blue-700 via-indigo-600 to-purple-600 text-white overflow-hidden">
                <div class="container-max mx-auto relative z-10">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                        <div class="relative fade-in">
                            <div
                                class="rounded-xl shadow-2xl overflow-hidden transform transition-transform duration-500 hover:scale-105 animate-pulse-glow">
                                <img src="{{ asset('images/ehazir-dashboard.png') }}" alt="e-HAZIR Dashboard"
                                    class="w-full h-auto">
                                <div class="absolute top-4 right-4 text-6xl animate-bounce-spin">📡</div>
                            </div>
                        </div>
                        <div class="fade-in mt-12 lg:mt-0">
                            <h2 class="text-4xl md:text-5xl font-extrabold mb-4 animate-pulse-text">
                                e-HAZIR: Smart Attendance Solution
                            </h2>
                            <p class="text-xl md:text-2xl mb-6">
                                Automate attendance, track buses, and manage school operations with our UHF RFID system.
                            </p>
                            <div class="bg-white text-gray-900 rounded-xl p-6 mb-6 shadow-xl relative overflow-hidden">
                                <div class="featured-slider space-y-3 font-semibold text-lg">
                                    <div>✅ Real-time UHF RFID attendance</div>
                                    <div>✅ GPS bus tracking for safety</div>
                                    <div>✅ Mobile app for parents & teachers</div>
                                    <div>✅ Offline mode & analytics</div>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ route('products.ams') }}" class="btn-primary relative group overflow-hidden">
                                    Learn More
                                </a>
                                <a href="{{ route('contact') }}" class="btn-outline">
                                    Request a Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl animate-pulse-slow">
                </div>
                <div
                    class="absolute bottom-0 right-0 w-72 h-72 bg-blue-400 opacity-20 rounded-full blur-3xl animate-pulse-slow">
                </div>
            </div>

            <!-- Other Services -->
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8 mt-12">
                @php
                    $otherServices = [
                        [
                            'icon' => '💡',
                            'title' => 'IT Consultancy',
                            'desc' => 'Strategic guidance for digital transformation.',
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'Mobile App Development',
                            'desc' => 'Custom apps for seamless user experiences.',
                        ],
                        [
                            'icon' => '🤖',
                            'title' => 'Web Development',
                            'desc' => 'Modern, responsive web solutions.',
                        ],
                        [
                            'icon' => '💻',
                            'title' => 'Custom Software',
                            'desc' => 'Tailored software for your unique needs.',
                        ],
                        [
                            'icon' => '📊',
                            'title' => 'Data Analytics',
                            'desc' => 'Actionable insights for smarter decisions.',
                        ],
                    ];
                @endphp
                @foreach ($otherServices as $service)
                    <div
                        class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition-shadow duration-300 fade-in">
                        <div class="text-4xl mb-4 animate-bounce-spin">{{ $service['icon'] }}</div>
                        <h3 class="text-xl font-bold mb-2">{{ $service['title'] }}</h3>
                        <p class="text-gray-600">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="container-max mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Hear from schools and organizations using e-HAZIR and our services.
                </p>
            </div>
            @php
                $testimonials = [
                    [
                        'quote' => 'e-HAZIR streamlined our attendance and improved parent communication!',
                        'author' => 'Rita Sharma',
                        'position' => 'Principal',
                        'company' => 'Kathmandu Model School',
                        'rating' => 5,
                    ],
                    [
                        'quote' => 'Their RFID system is reliable and easy to use for our staff.',
                        'author' => 'Suresh Thapa',
                        'position' => 'Admin Head',
                        'company' => 'Nepal Education Academy',
                        'rating' => 4,
                    ],
                    [
                        'quote' => 'GIG’s consultancy transformed our digital operations.',
                        'author' => 'Anita Gurung',
                        'position' => 'Operations Head',
                        'company' => 'Sunrise Academy',
                        'rating' => 5,
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-gray-50 rounded-lg p-8 fade-in">
                        <div class="flex mb-4">
                            @for ($i = 0; $i < $testimonial['rating']; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <blockquote class="text-gray-700 italic mb-4">"{{ $testimonial['quote'] }}"</blockquote>
                        <div class="font-semibold text-gray-900">{{ $testimonial['author'] }}</div>
                        <div class="text-sm text-gray-600">{{ $testimonial['position'] }} | {{ $testimonial['company'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section class="bg-gray-50 py-20">
        <div class="container-max mx-auto">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Our experts drive innovation in education and technology solutions.
                </p>
            </div>
            @php
                $team = [
                    [
                        'name' => 'Suman Shrestha',
                        'position' => 'CEO & Founder',
                        'photo' => 'team1.jpg',
                        'linkedin' => 'https://linkedin.com/in/sumanshrestha',
                    ],
                    [
                        'name' => 'Ravi Nepal',
                        'position' => 'CTO',
                        'photo' => 'team2.jpg',
                        'linkedin' => 'https://linkedin.com/in/ravinepal',
                    ],
                    [
                        'name' => 'Pooja Adhikari',
                        'position' => 'Head of Operations',
                        'photo' => 'team3.jpg',
                        'linkedin' => 'https://linkedin.com/in/poojaadhikari',
                    ],
                    [
                        'name' => 'Nabin Karki',
                        'position' => 'Lead Software Engineer',
                        'photo' => 'team4.jpg',
                        'linkedin' => 'https://linkedin.com/in/nabinkarki',
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-4 gap-8">
                @foreach ($team as $member)
                    <div class="team-member bg-white rounded-lg shadow-lg overflow-hidden text-center fade-in">
                        <img src="{{ asset('images/team/' . $member['photo']) }}" alt="{{ $member['name'] }}"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-1">{{ $member['name'] }}</h3>
                            <p class="text-gray-600 mb-4">{{ $member['position'] }}</p>
                            <a href="{{ $member['linkedin'] }}" target="_blank"
                                class="text-blue-600 font-semibold hover:text-blue-700">LinkedIn</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA / Contact -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container-max mx-auto text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Transform Your School?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Contact us to discover how e-HAZIR can enhance your institution’s efficiency.
            </p>
            <a href="{{ route('contact') }}"
                class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all">
                Get Free Consultation
            </a>
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
