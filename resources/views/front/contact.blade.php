@extends('front.layouts.app')

@section('content')
    <style>
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

        input,
        textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            border: 1px solid #ddd;
            margin-bottom: 1rem;
            font-size: 1rem;
            transition: border 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #2563eb;
            outline: none;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-gradient text-white overflow-hidden">
        <div class="container-max mx-auto py-24 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight fade-in">Contact Us</h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 fade-in">
                Have questions about e-HAZIR or need help? Reach out to our team and we’ll get back to you promptly.
            </p>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="bg-gray-50 py-20 fade-in">
        <div class="container-max mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Contact Information</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Connect with GIG Innovation & Consultancy for support or inquiries about our solutions.
            </p>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-4xl mb-2">📍</div>
                    <p class="font-semibold">Location</p>
                    <p class="text-gray-600">Kathmandu, Nepal</p>
                </div>
                <div>
                    <div class="text-4xl mb-2">📞</div>
                    <p class="font-semibold">Phone</p>
                    <p class="text-gray-600">+977 9824927986<br>+977 9814099804<br>+977 9862674080</p>
                </div>
                <div>
                    <div class="text-4xl mb-2">✉️</div>
                    <p class="font-semibold">Email</p>
                    <p class="text-gray-600">Giginnovationconsultancy@gmail.com</p>
                </div>
            </div>
            <div class="mt-8">
                <p class="font-semibold">Follow Us</p>
                <div class="flex justify-center gap-4 mt-2">
                    <a href="https://facebook.com/ehazirnepal" target="_blank"
                        class="text-blue-600 hover:text-blue-700">Facebook</a>
                    <a href="https://instagram.com/e_hazir" target="_blank"
                        class="text-blue-600 hover:text-blue-700">Instagram</a>
                    <a href="https://linkedin.com/company/gig-innovation-consultancy" target="_blank"
                        class="text-blue-600 hover:text-blue-700">LinkedIn</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-20 fade-in">
        <div class="container-max mx-auto lg:grid lg:grid-cols-2 lg:gap-16 items-start">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Send Us a Message</h2>
                <p class="text-gray-600 mb-8">
                    Fill out the form below and our team will respond promptly.
                </p>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn-primary">Send Message</button>
                </form>
            </div>
            <div class="mt-12 lg:mt-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Find Us Here</h2>
                <div class="w-full h-96 rounded-lg overflow-hidden shadow-lg">
                    <iframe class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.637750372927!2d85.31912961506247!3d27.717245982789297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190f0c0d9e01%3A0xa6e9f0ebc1b1c9c9!2sKathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1693620000000!5m2!1sen!2snp"
                        allowfullscreen></iframe>
                </div>
                <!-- [Replace the iframe src with a more specific Google Maps embed URL if you have an exact address for GIG Innovation & Consultancy] -->
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
