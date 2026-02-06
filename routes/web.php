<?php

use App\Http\Controllers\AppsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SocialiteController;
use Illuminate\Support\Facades\Route;

// Guest Routes (Login, Register, OAuth)
Route::middleware('guest')->group(function () {
    // Manual Authentication
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    
    Route::get('/password/reset', function () {
        return view('auth-card.reset-pass');
    })->name('password.request');
    
    // OAuth Routes
    Route::get('/auth/{provider}/redirect', [SocialiteController::class, 'redirectToProvider'])
        ->name('socialite.redirect');
    Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback'])
        ->name('socialite.callback');
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    
    // Dashboard
    Route::get('/', function () {
        return view('index');
    })->name('dashboard');
    
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard.home');

    Route::get('/dashboard/rules', function () {
        return view('dashboard.rules');
    })->name('dashboard.rules');

    Route::get('/dashboard/rules/create', function () {
        return view('dashboard.rules-create');
    })->name('dashboard.rules.create');
    
    // Apps Routes
    Route::prefix('apps')->name('apps.')->group(function () {
        Route::get('/manage', [AppsController::class, 'manage'])->name('manage');
        
        Route::prefix('projects')->name('projects.')->group(function () {
            Route::get('/grid', [AppsController::class, 'projectsGrid'])->name('grid');
            Route::get('/details/{id?}', [AppsController::class, 'projectsDetails'])->name('details');
        });
        
        // Tasks
        Route::prefix('task')->name('task.')->group(function () {
            Route::get('/list', function () { return view('apps.task.list'); })->name('list');
            Route::get('/create', function () { return view('apps.task.create'); })->name('create');
            Route::get('/details', function () { return view('apps.task.details'); })->name('details');
        });
    });
    
    // User Routes
    Route::get('/profile', function () {
        return view('apps.users-profile');
    })->name('profile');
    
    Route::get('/settings', function () {
        return view('apps.users-account-settings');
    })->name('settings');
});
