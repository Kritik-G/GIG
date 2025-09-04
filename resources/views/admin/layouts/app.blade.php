<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Your CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    @vite('resources/css/app.css')
</head>

<!-- Main content -->

<body class="antialiased bg-gray-50 text-gray-900">

    @yield('content')

    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
