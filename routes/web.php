<?php

use App\Http\Controllers\AppsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redirect root to dashboard
Route::get('/', function () {
    return view('index');
})->name('dashboard');

// Authentication Routes
Route::get('/login', function () {
    return view('auth-card.sign-in');
})->name('login');

Route::get('/register', function () {
    return view('auth-card.sign-up');
})->name('register');

Route::get('/password/reset', function () {
    return view('auth-card.reset-pass');
})->name('password.request');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard.home');

// Apps Routes
Route::prefix('apps')->name('apps.')->group(function () {
    Route::get('/manage', [AppsController::class, 'manage'])->name('manage');
    
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/grid', [AppsController::class, 'projectsGrid'])->name('grid');
        Route::get('/details/{id?}', [AppsController::class, 'projectsDetails'])->name('details');
    });
});

// User Routes (placeholders)
Route::get('/profile', function () {
    return view('apps.users-profile');
})->name('profile');

Route::get('/settings', function () {
    return view('apps.users-account-settings');
})->name('settings');
