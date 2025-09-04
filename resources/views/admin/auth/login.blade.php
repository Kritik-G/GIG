@extends('admin.layouts.app')

@section('content')
    <style>
        /* Floating fade-in animation for login card */
        .login-card {
            opacity: 0;
            transform: translateY(20px);
            animation: floatUp 0.6s ease forwards;
        }

        @keyframes floatUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
        <div
            class="w-full max-w-md bg-white/70 backdrop-blur-xl shadow-lg rounded-2xl p-8 border border-gray-100 login-card">

            <!-- Logo / Branding -->
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="GIG Logo" class="h-16 mx-auto">
                <h2 class="mt-4 text-2xl font-bold text-gray-800">Admin Login</h2>
                <p class="text-sm text-gray-500">Sign in to manage the website</p>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login.perform') }}" class="space-y-5">
                @csrf

                <!-- Error message -->
                @if ($errors->any())
                    <div class="p-3 rounded-lg bg-red-50 text-red-600 text-sm">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required autofocus
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm text-gray-600">Remember me</span>
                    </label>

                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-2 px-4 rounded-lg font-semibold text-white bg-gradient-to-r from-blue-900 via-blue-600 to-blue-400 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition">
                    Log In
                </button>
            </form>
        </div>
    </div>
@endsection
