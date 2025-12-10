<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Posts
    Route::get('/posts', function () {
        return 'Posts Index';
    })->name('posts.index');

    // Communiques
    Route::get('/communiques', function () {
        return 'Communiques Index';
    })->name('communiques.index');

    // Categories
    Route::get('/categories', function () {
        return 'Categories Index';
    })->name('categories.index');

    // Media
    Route::get('/media', function () {
        return 'Media Index';
    })->name('media.index');

    // Users
    Route::get('/users', function () {
        return 'Users Index';
    })->name('users.index');

    // Settings
    Route::get('/settings', function () {
        return 'Settings Index';
    })->name('settings.index');

    // Profile
    Route::get('/profile', function () {
        return 'Profile Edit';
    })->name('profile.edit');
});

require __DIR__.'/auth.php';
