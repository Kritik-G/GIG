@extends('front.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient text-white overflow-hidden">
        <div class="container-max mx-auto py-24 relative z-10">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                <div class="fade-in">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        GIG Innovation & Consultancy
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-blue-100">
                        Founded in 2023 in Kathmandu, Nepal, we empower schools and businesses with innovative solutions
                        like e-HAZIR, our RFID-based school management system.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary text-center">Get Consultation</a>
                        <a href="#services" class="btn-outline text-center">Explore Services</a>
                    </div>
                </div>
                <div class="fade-in mt-12 lg:mt-0">
                    <img src="{{ asset('images/hero-ehazir.png') }}" alt="e-HAZIR School Management"
                        class="w-full h-auto rounded-lg shadow-2xl">
                    <!-- [Replace 'hero-ehazir.png' with the actual image path for your hero image] -->
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-gray-50 py-20">
        <div class="container-max mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">We provide innovative solutions to transform education
                    and business operations.</p>
            </div>

            <!-- Featured e-HAZIR Service -->
            <div class="relative py-24 bg-blue-900 text-white overflow-hidden">
                <div class="container-max mx-auto relative z-10">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                        <div class="relative fade-in">
                            <div
                                class="rounded-xl shadow-2xl overflow-hidden transform transition-transform duration-500 hover:scale-105 animate-pulse-glow">
                                <img src="{{ asset('images/ehazir-dashboard.png') }}" alt="e-HAZIR School Management"
                                    class="w-full h-auto">
                                <div class="absolute top-4 right-4 text-6xl animate-bounce-spin">📡</div>
                            </div>
                        </div>
                        <div class="fade-in mt-12 lg:mt-0">
                            <h2 class="text-4xl md:text-5xl font-extrabold mb-4 animate-pulse-text">
                                e-HAZIR: Smart School Management
                            </h2>
                            <p class="text-xl md:text-2xl mb-6">
                                Automated attendance and school management with UHF RFID, GPS tracking, and mobile apps for
                                seamless learning.
                            </p>
                            <div class="bg-white text-gray-900 rounded-xl p-6 mb-6 shadow-xl relative overflow-hidden">
                                <div class="featured-slider space-y-3 font-semibold text-lg">
                                    <div>✅ Real-time RFID attendance tracking</div>
                                    <div>✅ GPS bus tracking for parents</div>
                                    <div>✅ Comprehensive analytics & reports</div>
                                    <div>✅ Offline Mode Support</div>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ route('services') }}" class="btn-primary relative group overflow-hidden">
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
                    $services = [
                        [
                            'icon' => '📋',
                            'title' => 'Management Tools',
                            'desc' =>
                                'Comprehensive tools for exams, assignments, leave, teacher, library, and vehicle management.',
                        ],
                        [
                            'icon' => '📊',
                            'title' => 'Analytics & Reporting',
                            'desc' => 'Detailed analytics and report generation for data-driven insights.',
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


            <!-- View More Button -->
            <div class="text-center mt-12 fade-in">
                <a href="{{ route('services') }}" class="btn-primary px-8 py-4 text-lg">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="container-max mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Success stories from schools and businesses using e-HAZIR
                    and our services.</p>
            </div>
            @php
                $testimonials = [
                    [
                        'quote' => '["e-HAZIR transformed our school’s attendance system!"]',
                        'author' => '[Testimonial Author 1 Name]',
                        'position' => '[Testimonial Author 1 Position]',
                        'company' => '[Testimonial Author 1 School/Company]',
                        'rating' => 5,
                    ],
                    [
                        'quote' => '["The RFID solution is seamless and reliable."]',
                        'author' => '[Testimonial Author 2 Name]',
                        'position' => '[Testimonial Author 2 Position]',
                        'company' => '[Testimonial Author 2 School/Company]',
                        'rating' => 4,
                    ],
                    [
                        'quote' => '["GIG’s solutions streamlined our operations."]',
                        'author' => '[Testimonial Author 3 Name]',
                        'position' => '[Testimonial Author 3 Position]',
                        'company' => '[Testimonial Author 3 School/Company]',
                        'rating' => 5,
                    ],
                    // [Add actual testimonials here, including quote, author, position, and school/company name]
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
                        <div class="text-sm text-gray-600">{{ $testimonial['position'] }} |
                            {{ $testimonial['company'] }}
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
                    Our team of experts drives innovation with e-HAZIR and tailored solutions for our clients.
                </p>
            </div>
            @php
                $team = [
                    [
                        'name' => '[Team Member 1 Name]',
                        'position' => '[Team Member 1 Position]',
                        'photo' => '[team-member-1-photo.jpg]',
                        'linkedin' => '[Team Member 1 LinkedIn URL]',
                    ],
                    [
                        'name' => '[Team Member 2 Name]',
                        'position' => '[Team Member 2 Position]',
                        'photo' => '[team-member-2-photo.jpg]',
                        'linkedin' => '[Team Member 2 LinkedIn URL]',
                    ],
                    [
                        'name' => '[Team Member 3 Name]',
                        'position' => '[Team Member 3 Position]',
                        'photo' => '[team-member-3-photo.jpg]',
                        'linkedin' => '[Team Member 3 LinkedIn URL]',
                    ],
                    [
                        'name' => '[Team Member 4 Name]',
                        'position' => '[Team Member 4 Position]',
                        'photo' => '[team-member-4-photo.jpg]',
                        'linkedin' => '[Team Member 4 LinkedIn URL]',
                    ],
                    // [Add actual team member details here, including name, position, photo filename, and LinkedIn URL]
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
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ignite Your Digital Revolution!</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Reach out to our experts to kickstart your journey toward smarter, seamless operations!
            </p>
            <a href="{{ route('contact') }}"
                class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all">Get
                Free Consultation</a>
        </div>
    </section>

    <!-- Scripts -->
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
