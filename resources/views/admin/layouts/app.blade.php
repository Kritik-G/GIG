<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
            background-color: #f4f6f9;
        }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            background-color: #1e293b;
            color: #fff;
            transition: all 0.3s;
        }

        .sidebar a {
            display: block;
            color: #fff;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        s .sidebar .side-link:hover {
            color: #00CFCF;
            transform: translateY(-2px);
        }

        .sidebar a:hover {
            background: linear-gradient(90deg, #2563eb, #3b82f6);
            transform: translateX(3px);
        }

        .sidebar a.active {
            background: linear-gradient(90deg, #1e3a8a, #2563eb, #3b82f6);
            font-weight: 600;
        }


        /* Content padding */
        .content {
            padding: 20px;
            min-height: 100vh;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    @include('admin.layouts.navbar')

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 col-md-3 p-0">
                @include('admin.layouts.sidebar')
            </div>

            <!-- Main Content -->
            <div class="col-lg-10 col-md-9 content">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
