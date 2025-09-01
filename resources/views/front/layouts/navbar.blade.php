@push('styles')
    <style>
        /* Navbar sticky & shadow */
        nav {
            transition: all 0.3s ease;
        }

        /* Optional mobile fade-in effect */
        #mobile-menu.fade-in {
            animation: slideDown 0.3s ease forwards;
        }

        @keyframes slideDown {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="container-max mx-auto flex items-center justify-between py-4 px-4 lg:px-0">
            <!-- Left: Navigation links -->
            <div class="hidden lg:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600 font-semibold transition">Home</a>
                <a href="#services" class="text-gray-800 hover:text-blue-600 font-semibold transition">Services</a>
                <a href="{{ route('products.ams') }}"
                    class="text-gray-800 hover:text-blue-600 font-semibold transition">Products</a>
                <a href="{{ route('contact') }}"
                    class="text-gray-800 hover:text-blue-600 font-semibold transition">Contact</a>
            </div>

            <!-- Right: Logo -->
            <div class="flex items-center lg:order-last">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="h-12">
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <div class="lg:hidden flex items-center">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="w-8 h-8 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white shadow-md">
            <div class="flex flex-col px-4 py-4 space-y-4">
                <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600 font-semibold transition">Home</a>
                <a href="#services" class="text-gray-800 hover:text-blue-600 font-semibold transition">Services</a>
                <a href="{{ route('products.ams') }}"
                    class="text-gray-800 hover:text-blue-600 font-semibold transition">Products</a>
                <a href="{{ route('contact') }}"
                    class="text-gray-800 hover:text-blue-600 font-semibold transition">Contact</a>
            </div>
        </div>
    </nav>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');

                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    mobileMenu.classList.toggle('fade-in'); // optional animation
                });
            });
        </script>
    @endpush
