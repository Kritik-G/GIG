<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

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

Route::get('/newsletter/subscribe', function () {
    return view('front.newsletter.subscribe'); // create a dummy subscribe.blade.php page
})->name('newsletter.subscribe');
