<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

// Homepage
Route::get('/', function () {
    return view('front.index'); // make sure your index.blade.php is in resources/views/front/
})->name('home');

// Show Contact Us page
Route::get('/contact', function () {
    return view('front.contact'); // make sure your blade is at resources/views/front/contact.blade.php
})->name('contact');

// Handle form submission
Route::post('/contact/send', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

// Services
Route::get('/services', [ServicesController::class, 'services'])->name('services');

// about
Route::get('/about', function () {
    return view('front.about');
})->name('about');




//dummy routes
// Products - UHF RFID Attendance Management
Route::get('/products/ams', function () {
    return view('front.products.ams'); // Create a dummy view at resources/views/front/products/ams.blade.php
})->name('products.ams');
// Products - IoT Gateway
Route::get('/products/iot-gateway', function () {
    return view('front.products.iot-gateway'); // Dummy view
})->name('products.iot-gateway');
// Products - AI Analytics Suite
Route::get('/products/analytics-suite', function () {
    return view('front.products.analytics-suite'); // Dummy view
})->name('products.analytics-suite');
// Products - Custom ERP Solution
Route::get('/products/erp-solution', function () {
    return view('front.products.erp-solution'); // Dummy view
})->name('products.erp-solution');
// Optional: catch-all route for other dummy pages
Route::get('/dummy/{page}', function ($page) {
    return "<h1>Dummy page: {$page}</h1>";
})->name('dummy');




// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Forgot password page (if you have one)
Route::get('/password/request', function () {
    return view('auth.passwords.email'); // or your custom Blade view
})->name('password.request');


// Admin dashboard route 
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});




// Dashboard route
Route::get('/dashboard', function () {
    return view('admin.dashboard'); // Dummy dashboard page
})->name('dashboard');

// Users route
Route::get('/users', function () {
    return view('admin.users'); // Dummy users page
})->name('users');

// Reports route
Route::get('/reports', function () {
    return view('admin.reports'); // Dummy reports page
})->name('reports');

// Settings route
Route::get('/settings', function () {
    return view('admin.settings'); // Dummy settings page
})->name('settings');



// Logout route (dummy)
Route::get('/logout', function () {
    return redirect()->route('home'); // Just redirect for now
})->name('logout');
