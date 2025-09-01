<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIG</title>

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Optional: favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body class="antialiased bg-gray-50 text-gray-900">

    <!-- Header (if you have one) -->
    @includeIf('front.layouts.header')

    <!-- Navbar -->
    @include('front.layouts.navbar')

    <!-- Main content -->
    <div class="pt-20"> <!-- To offset fixed navbar height -->
        @yield('content')
    </div>

    <!-- Footer (if you have one) -->
    @includeIf('front.layouts.footer')

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @stack('scripts')

</body>

</html>
