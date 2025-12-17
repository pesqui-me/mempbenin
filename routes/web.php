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

// Routes du menu Prestations
Route::prefix('prestations')->group(function () {
    Route::get('/catalogue', function () {
        return view('guest.prestations.catalogue');
    })->name('prestations.catalogue');

    Route::get('/services', function () {
        return view('guest.prestations.services');
    })->name('prestations.services');
});

// Routes du menu Opportunités
Route::prefix('opportunites')->group(function () {
    Route::get('/appels-offre', function () {
        return view('guest.opportunites.appels-offre');
    })->name('opportunites.appels-offre');

    Route::get('/recrutements', function () {
        return view('guest.opportunites.recrutements');
    })->name('opportunites.recrutements');
});

// Routes du menu Documentations
Route::prefix('documentations')->group(function () {
    Route::get('/textes', function () {
        return view('guest.documentations.textes');
    })->name('documentations.textes');

    Route::get('/publications', function () {
        return view('guest.documentations.publications');
    })->name('documentations.publications');

    Route::get('/mediatheque', function () {
        return view('guest.documentations.mediatheque');
    })->name('documentations.mediatheque');

    Route::get('/statistiques', function () {
        return view('guest.documentations.statistiques');
    })->name('documentations.statistiques');
});

// Route Suggestions
Route::get('/suggestions', function () {
    return view('guest.suggestions');
})->name('suggestions');

require __DIR__.'/auth.php';