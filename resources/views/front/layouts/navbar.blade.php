<style>
    /* Navbar Base */
    nav {
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.85);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    nav .nav-container {
        padding: 0.75rem 1.5rem;
        /* slimmer height */
    }

    /* Links */
    .nav-link {
        position: relative;
        font-weight: 600;
        transition: color 0.3s ease, transform 0.2s ease;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 0%;
        height: 2px;
        background: linear-gradient(90deg, #1e3a8a, #2563eb, #3b82f6);
        transition: width 0.3s ease;
    }

    .nav-link:hover {
        color: #2563eb;
        transform: translateY(-2px);
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    .nav-link.active {
        color: #2563eb;
    }

    /* CTA Button */
    .cta-btn {
        padding: 0.5rem 1.2rem;
        background: linear-gradient(90deg, #1e3a8a, #2563eb, #3b82f6);
        color: #fff !important;
        border-radius: 25px;
        font-weight: 600;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .cta-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(37, 99, 235, 0.4);
    }

    /* Mobile Menu Animation */
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

<nav class="shadow-md fixed w-full z-50">
    <div class="nav-container w-full flex items-center justify-between">
        <!-- Left: Logo -->
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="flex items-center space-x-1">
                <img src="{{ asset('images/logo.png') }}" alt="GIG Logo" class="h-10">
                <span class="hidden md:block font-bold -ml-1">
                    <span
                        class="text-xl bg-gradient-to-b from-[#4DA6FF] to-[#2D3DFF] bg-clip-text text-transparent">GIG</span>
                    <span class="text-l text-[#00CFCF]"> Innovation</span>
                    <span class="text-l bg-gradient-to-b from-[#FF9966] to-[#FF4D33] bg-clip-text text-transparent">
                        & Consultancy
                    </span>
                </span>
            </a>
        </div>

        <!-- Right: Navigation links -->
        <div class="hidden lg:flex items-center space-x-8">
            <a href="{{ route('home') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('services') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('about') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            <a href="{{ route('contact') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            <a href="{{ route('contact') }}" class="cta-btn">Get Started</a>
        </div>

        <!-- Mobile Hamburger -->
        <div class="lg:hidden flex items-center">
            <button id="mobile-menu-button" aria-label="Toggle mobile menu" class="focus:outline-none">
                <svg class="w-8 h-8 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white shadow-md">
        <div class="flex flex-col px-6 py-4 space-y-4">
            <a href="{{ route('home') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('services') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('about') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            <a href="{{ route('contact') }}"
                class="nav-link text-gray-800 {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            <a href="{{ route('contact') }}" class="cta-btn text-center">Get Started</a>
        </div>
    </div>
</nav>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(() => mobileMenu.classList.add('fade-in'), 10);
                } else {
                    mobileMenu.classList.remove('fade-in');
                    setTimeout(() => mobileMenu.classList.add('hidden'), 300);
                }
            });

            // Close menu on link click
            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('fade-in');
                    setTimeout(() => mobileMenu.classList.add('hidden'), 300);
                });
            });
        });
    </script>
@endpush
