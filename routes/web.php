<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home');
})->name('home');

// Routes du menu Ministère
Route::prefix('ministere')->group(function () {
    Route::get('/ministre', function () {
        return view('guest.ministere.ministre');
    })->name('ministere.ministre');

    Route::get('/cabinet', function () {
        return view('guest.ministere.cabinet');
    })->name('ministere.cabinet');

    Route::get('/secretariat', function () {
        return view('guest.ministere.secretariat');
    })->name('ministere.secretariat');

    Route::get('/inspection', function () {
        return view('guest.ministere.inspection');
    })->name('ministere.inspection');

    Route::get('/structures', function () {
        return view('guest.ministere.structures');
    })->name('ministere.structures');

    Route::get('/organigramme', function () {
        return view('guest.ministere.organigramme');
    })->name('ministere.organigramme');
});

require __DIR__.'/auth.php';