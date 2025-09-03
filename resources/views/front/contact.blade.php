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
                <!-- Location card -->
                <div
                    class="p-6 rounded-lg transition transform hover:scale-105 hover:shadow-lg hover:bg-blue-50 cursor-pointer">
                    <div class="text-4xl mb-2">📍</div>
                    <p class="font-semibold">Location</p>
                    <p class="text-gray-600">Kathmandu, Nepal</p>
                </div>

                <!-- Phone card -->
                <div
                    class="p-6 rounded-lg transition transform hover:scale-105 hover:shadow-lg hover:bg-green-50 cursor-pointer">
                    <div class="text-4xl mb-2">📞</div>
                    <p class="font-semibold">Phone</p>
                    <p class="text-gray-600">
                        +977 9824927986<br>
                        +977 9814099804<br>
                        +977 9862674080
                    </p>
                </div>

                <!-- Email card -->
                <div
                    class="p-6 rounded-lg transition transform hover:scale-105 hover:shadow-lg hover:bg-orange-50 cursor-pointer">
                    <div class="text-4xl mb-2">✉️</div>
                    <p class="font-semibold">Email</p>
                    <p class="text-gray-600">Giginnovationconsultancy@gmail.com</p>
                </div>
            </div>


            <div class="mt-8 flex flex-col items-center">
                <p class="font-semibold text-gray-900 mb-4">Follow Us</p>
                <div class="flex justify-center gap-6">
                    <a href="https://facebook.com/" target="_blank"
                        class="text-gray-600 hover:text-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-label="Facebook">
                            <path
                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2v-2c0-2.21 1.79-4 4-4h2v3h-2c-1.1 0-2 .9-2 2v2h4v3h-2v6.8c4.56-.93 8-4.96 8-9.8z" />
                        </svg>
                    </a>
                    <a href="https://instagram.com/" target="_blank"
                        class="text-gray-600 hover:text-pink-600 transition-colors duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-label="Instagram">
                            <path
                                d="M12 2.16c3.21 0 3.58.01 4.84.07 1.17.05 1.81.24 2.23.4.56.22.96.49 1.38.91.42.42.69.82.91 1.38.16.42.35 1.06.4 2.23.06 1.26.07 1.63.07 4.84s-.01 3.58-.07 4.84c-.05 1.17-.24 1.81-.4 2.23-.22.56-.49.96-.91 1.38-.42.42-.82.69-1.38.91-.42.16-1.06.35-2.23.4-1.26.06-1.63.07-4.84.07s-3.58-.01-4.84-.07c-1.17-.05-1.81-.24-2.23-.4-.56-.22-.96-.49-1.38-.91-.42-.42-.69-.82-.91-1.38-.16-.42-.35-1.06-.4-2.23-.06-1.26-.07-1.63-.07-4.84s.01-3.58.07-4.84c.05-1.17.24-1.81.4-2.23.22-.56.49-.96.91-1.38.42-.42.82-.69 1.38-.91.42-.16 1.06-.35 2.23-.4 1.26-.06 1.63-.07 4.84-.07zm0-2.16C8.73 0 8.31.01 7.03.07c-1.3.06-2.19.27-2.97.58-.96.38-1.77.89-2.58 1.7S.38 3.9.38 4.86c-.31.78-.52 1.67-.58 2.97C-.01 8.31 0 8.73 0 12s.01 3.69.07 4.97c.06 1.3.27 2.19.58 2.97.38.96.89 1.77 1.7 2.58s1.62 1.32 2.58 1.7c.78.31 1.67.52 2.97.58 1.28.06 1.7.07 4.97.07s3.69-.01 4.97-.07c1.3-.06 2.19-.27 2.97-.58.96-.38 1.77-.89 2.58-1.7s1.32-1.62 1.7-2.58c.31-.78.52-1.67.58-2.97.06-1.28.07-1.7.07-4.97s-.01-3.69-.07-4.97c-.06-1.3-.27-2.19-.58-2.97-.38-.96-.89-1.77-1.7-2.58S20.1.38 19.14.58c-.78.31-1.67.52-2.97.58C15.69.01 15.27 0 12 0z" />
                            <path
                                d="M12 5.84a6.16 6.16 0 100 12.32 6.16 6.16 0 000-12.32zm0 10.16a4 4 0 110-8 4 4 0 010 8zm6.4-10.24a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
                        </svg>
                    </a>
                    <a href="https://linkedin.com/company/" target="_blank"
                        class="text-gray-600 hover:text-blue-800 transition-colors duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-label="LinkedIn">
                            <path
                                d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                        </svg>
                    </a>
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
