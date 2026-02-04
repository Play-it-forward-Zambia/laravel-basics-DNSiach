<?php

use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    // Handle contact form submission
    return redirect('/contact')->with('success', 'Thank you for your message! We will respond shortly.');
})->name('contact.store');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    // Handle login submission
    return redirect('/dashboard')->with('success', 'Login successful!');
})->name('login.store');

Route::post('/register', function () {
    // Handle registration submission
    return redirect('/login')->with('success', 'Registration successful! Please log in.');
})->name('register.store');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/orders', function () {
        return view('admin.orders');
    })->name('admin.orders');

    Route::get('/products', function () {
        return view('admin.products');
    })->name('admin.products');

    Route::get('/customers', function () {
        return view('admin.customers');
    })->name('admin.customers');

    Route::get('/delivery', function () {
        return view('admin.delivery');
    })->name('admin.delivery');

    Route::get('/payments', function () {
        return view('admin.payments');
    })->name('admin.payments');

    Route::get('/services', function () {
        return view('admin.services');
    })->name('admin.services');

    Route::get('/reports', function () {
        return view('admin.reports');
    })->name('admin.reports');
});

