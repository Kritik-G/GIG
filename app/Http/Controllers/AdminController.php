<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming a User model for user management

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     * Apply admin middleware to all methods.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        // Placeholder data for dashboard metrics
        $userCount = User::count();
        $attendanceToday = 0; // Replace with actual Attendance model query if applicable
        $settingsCount = 0; // Replace with actual Setting model query if applicable

        return view('admin.dashboard', compact('userCount', 'attendanceToday', 'settingsCount'));
    }

    /**
     * Display the users management page.
     */
    public function users()
    {
        return view('admin.users');
    }

    /**
     * Display the e-HAZIR management page.
     */
    public function ehazir()
    {
        return view('admin.ehazir');
    }

    /**
     * Display the attendance analytics page.
     */
    public function analytics()
    {
        return view('admin.analytics');
    }

    /**
     * Display the system settings page.
     */
    public function settings()
    {
        return view('admin.settings');
    }
}
