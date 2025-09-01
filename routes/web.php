<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('front.index'); // make sure your index.blade.php is in resources/views/front/
})->name('home');

// Contact page (dummy)
Route::get('/contact', function () {
    return view('front.contact'); // create a simple contact.blade.php
})->name('contact');

// Products > UHF RFID Attendance Management Solution (dummy)
Route::get('/products/ams', function () {
    return view('front.products.ams'); // create a dummy ams.blade.php page
})->name('products.ams');

// Optional: catch-all route for other dummy pages
Route::get('/dummy/{page}', function ($page) {
    return "<h1>Dummy page: {$page}</h1>";
})->name('dummy');

Route::get('/newsletter/subscribe', function () {
    return view('front.newsletter.subscribe'); // create a dummy subscribe.blade.php page
})->name('newsletter.subscribe');
