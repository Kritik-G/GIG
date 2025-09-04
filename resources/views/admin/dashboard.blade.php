@extends('admin.layouts.app')

@section('content')
    <style>
        /* Sidebar and dashboard styling */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #1e3a8a;
            color: white;
            flex-shrink: 0;
            padding: 2rem 1rem;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .sidebar a {
            display: block;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 0.5rem;
            transition: background 0.3s;
            color: white;
        }

        .sidebar a:hover {
            background: #2563eb;
        }

        .main-content {
            flex-grow: 1;
            padding: 2rem;
            background: #f9fafb;
        }

        .card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .card p {
            color: #6b7280;
            /* Tailwind gray-500 */
        }
    </style>

    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>GIG Admin</h2>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            {{-- <a href="{{ route('services.index') }}">Services</a>
            <a href="{{ route('team.index') }}">Team</a>
            <a href="{{ route('testimonials.index') }}">Testimonials</a> --}}
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card">
                    <h3>Total Services</h3>
                    <p>10</p>
                </div>
                <div class="card">
                    <h3>Total Team Members</h3>
                    <p>5</p>
                </div>
                <div class="card">
                    <h3>Total Testimonials</h3>
                    <p>8</p>
                </div>
            </div>

            <div class="mt-8 card">
                <h3>Welcome to the GIG Admin Dashboard</h3>
                <p>Use the sidebar to navigate and manage services, team members, and testimonials.</p>
            </div>
        </div>
    </div>
@endsection
