<!-- Footer Section -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container-max mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-4">GIG Innovation & Consultancy Pvt. Ltd.</h3>
                <p class="text-gray-400 mb-4">
                    Empowering with innovative solutions.
                </p>
                <div class="flex space-x-4">
                    <a href="https://facebook.com/" target="_blank"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2v-2c0-2.21 1.79-4 4-4h2v3h-2c-1.1 0-2 .9-2 2v2h4v3h-2v6.8c4.56-.93 8-4.96 8-9.8z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.22-1.79L9 14v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1h-4v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                        </svg>
                    </a>
                    <a href="https://linkedin.com/" target="_blank"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}"
                            class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Home</a></li>
                    <li><a href="{{ route('services') }}"
                            class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Services &
                            Products</a></li>
                    <li><a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-blue-400 transition-colors duration-300">About Us</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-4">Contact Us</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><span class="font-semibold">Email:</span> <a href="mailto:Giginnovationconsultancy@gmail.com"
                            class="hover:text-blue-400 transition-colors duration-300">Giginnovationconsultancy@gmail.com</a>
                    </li>
                    <li><span class="font-semibold">Phone:</span> <a href="tel:+9779824927986"
                            class="hover:text-blue-400 transition-colors duration-300">+977 9824927986</a></li>
                    <li><a href="tel:+9779814099804" class="hover:text-blue-400 transition-colors duration-300">+977
                            9814099804</a></li>
                    <li><a href="tel:+9779862674080" class="hover:text-blue-400 transition-colors duration-300">+977
                            9862674080</a></li>
                    <li><span class="font-semibold">Address:</span> Kathmandu, Nepal</li>
                </ul>
            </div>

            <!-- Newsletter Signup -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-4">Newsletter</h3>
                <p class="text-gray-400 mb-4">Stay updated with our latest innovations and e-HAZIR updates.</p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email"
                        class="w-full px-4 py-3 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600"
                        required>
                    <button type="submit" class="btn-primary w-full">Subscribe</button>
                </form>
            </div>
        </div>
        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 mt-12 pt-6 text-center text-gray-400 fade-in">
            <p>&copy; 2025 GIG Innovation & Consultancy Pvt. Ltd. All rights reserved.</p>
        </div>
    </div>
</footer>
