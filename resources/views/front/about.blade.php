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
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight fade-in">About GIG Innovation &
                Consultancy</h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 fade-in">
                Smart Attendance, Seamless Learning with e-HAZIR!
            </p>
            <a href="{{ route('contact') }}" class="btn-primary fade-in">Get in Touch</a>
        </div>
    </section>

    <!-- Our Mission -->
    <section class="bg-gray-50 py-20">
        <div class="container-max mx-auto text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Mission</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">To deliver cutting-edge solutions for business growth and
                efficiency, with a strong focus on customer satisfaction and tailored innovations.</p>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-20">
        <div class="container-max mx-auto lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div class="fade-in">
                <img src="{{ asset('images/gig-story.jpg') }}" alt="Our Story" class="w-full h-auto rounded-lg shadow-2xl">
                <!-- [Replace 'gig-story.jpg' with the actual image path for your company’s story image] -->
            </div>
            <div class="fade-in mt-12 lg:mt-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Story</h2>
                <p class="text-gray-600 mb-4">
                    Founded in 2023 in Kathmandu, Nepal, GIG Innovation & Consultancy Pvt. Ltd. was born with a vision to
                    transform education through technology. Our flagship product, e-HAZIR, revolutionizes school operations
                    with UHF RFID-based attendance and comprehensive management tools.
                </p>
                <p class="text-gray-600">
                    Our team of professionals specializes in IT consulting, delivering tailored solutions for schools and
                    businesses across education and technology.
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

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="container-max mx-auto text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-12">What Our Clients Say</h2>
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
                        'quote' => '["Services form GIG  is seamless and reliable."]',
                        'author' => '[Testimonial Author 2 Name]',
                        'position' => '[Testimonial Author 2 Position]',
                        'company' => '[Testimonial Author 2 School/Company]',
                        'rating' => 4,
                    ],
                    // [Add actual testimonials here, including quote, author, position, and school/company name]
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
