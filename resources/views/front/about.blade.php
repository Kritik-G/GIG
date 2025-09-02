@extends('front.layouts.app')

@section('content')
    <style>
        /* Same CSS as index */
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

        @media (max-width:1024px) {
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

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-gradient text-white overflow-hidden">
        <div class="container-max mx-auto py-24 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight fade-in">About GIG Innovations</h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 fade-in">
                We are committed to delivering innovative solutions that empower businesses to grow and thrive.
            </p>
            <a href="{{ route('contact') }}" class="btn-primary fade-in">Get in Touch</a>
        </div>
    </section>

    <!-- Our Mission -->
    <section class="bg-gray-50 py-20">
        <div class="container-max mx-auto text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Mission</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">To provide cutting-edge technology solutions that
                transform businesses, improve efficiency, and drive innovation.</p>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-20">
        <div class="container-max mx-auto lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div class="fade-in">
                <img src="{{ asset('images/about-hero.jpg') }}" alt="Our Story" class="w-full h-auto rounded-lg shadow-2xl">
            </div>
            <div class="fade-in mt-12 lg:mt-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Story</h2>
                <p class="text-gray-600 mb-4">
                    Founded with a passion for innovation, GIG Innovations has been helping organizations embrace digital
                    transformation, optimize operations, and achieve measurable results.
                </p>
                <p class="text-gray-600">
                    Our team combines expertise in technology, strategy, and consulting to deliver solutions tailored to
                    your
                    unique business needs.
                </p>
            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section class="bg-gray-50 py-20">
        <div class="container-max mx-auto text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-12">Meet Our Team</h2>
            @php
                $team = [
                    [
                        'name' => 'Alice Johnson',
                        'position' => 'CEO & Founder',
                        'photo' => 'team1.jpg',
                        'linkedin' => '#',
                    ],
                    ['name' => 'Bob Smith', 'position' => 'CTO', 'photo' => 'team2.jpg', 'linkedin' => '#'],
                    [
                        'name' => 'Cathy Lee',
                        'position' => 'Head of Operations',
                        'photo' => 'team3.jpg',
                        'linkedin' => '#',
                    ],
                    [
                        'name' => 'David Kim',
                        'position' => 'Lead Software Engineer',
                        'photo' => 'team4.jpg',
                        'linkedin' => '#',
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

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="container-max mx-auto text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-12">What Our Clients Say</h2>
            @php
                $testimonials = [
                    [
                        'quote' => 'This company helped us revolutionize our operations!',
                        'author' => 'Alice Johnson',
                        'position' => 'CEO',
                        'company' => 'TechCorp',
                        'rating' => 5,
                    ],
                    [
                        'quote' => 'Their RFID solution is highly accurate and easy to use.',
                        'author' => 'Bob Smith',
                        'position' => 'HR Manager',
                        'company' => 'Global Industries',
                        'rating' => 4,
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-gray-50 rounded-lg p-8 fade-in">
                        <blockquote class="text-gray-700 italic mb-4">"{{ $testimonial['quote'] }}"</blockquote>
                        <div class="font-semibold text-gray-900">{{ $testimonial['author'] }}</div>
                        <div class="text-sm text-gray-600">{{ $testimonial['position'] }} | {{ $testimonial['company'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fadeElements = document.querySelectorAll('.fade-in');
                setTimeout(() => {
                    fadeElements.forEach((el, idx) => setTimeout(() => el.classList.add('visible'), idx * 150))
                }, 200);
            });
        </script>
    @endpush
@endsection
