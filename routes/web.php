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

// Routes Admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Contenus
    Route::prefix('contenus')->name('contenus.')->group(function () {
        // Publications
        Route::prefix('publications')->name('publications.')->group(function () {
            Route::get('/', function () {
                return view('admin.contenus.publications.index');
            })->name('index');
            Route::get('/create', function () {
                return view('admin.contenus.publications.create');
            })->name('create');
            Route::post('/', function () {
                return redirect()->route('admin.contenus.publications.index');
            })->name('store');
            Route::get('/{id}', function ($id) {
                return view('admin.contenus.publications.show', compact('id'));
            })->name('show');
            Route::get('/{id}/edit', function ($id) {
                return view('admin.contenus.publications.edit', compact('id'));
            })->name('edit');
            Route::put('/{id}', function ($id) {
                return redirect()->route('admin.contenus.publications.show', $id);
            })->name('update');
            Route::delete('/{id}', function ($id) {
                return redirect()->route('admin.contenus.publications.index');
            })->name('destroy');
        });

        // Textes & Législations
        Route::prefix('textes')->name('textes.')->group(function () {
            Route::get('/', function () {
                return view('admin.contenus.textes.index');
            })->name('index');
            Route::get('/create', function () {
                return view('admin.contenus.textes.create');
            })->name('create');
            Route::post('/', function () {
                return redirect()->route('admin.contenus.textes.index');
            })->name('store');
            Route::get('/{id}', function ($id) {
                return view('admin.contenus.textes.show', compact('id'));
            })->name('show');
            Route::get('/{id}/edit', function ($id) {
                return view('admin.contenus.textes.edit', compact('id'));
            })->name('edit');
            Route::put('/{id}', function ($id) {
                return redirect()->route('admin.contenus.textes.show', $id);
            })->name('update');
            Route::delete('/{id}', function ($id) {
                return redirect()->route('admin.contenus.textes.index');
            })->name('destroy');
        });

        // Prestations
        Route::prefix('prestations')->name('prestations.')->group(function () {
            Route::get('/', function () {
                return view('admin.contenus.prestations.index');
            })->name('index');
            Route::get('/create', function () {
                return view('admin.contenus.prestations.create');
            })->name('create');
            Route::post('/', function () {
                return redirect()->route('admin.contenus.prestations.index');
            })->name('store');
            Route::get('/{id}', function ($id) {
                return view('admin.contenus.prestations.show', compact('id'));
            })->name('show');
            Route::get('/{id}/edit', function ($id) {
                return view('admin.contenus.prestations.edit', compact('id'));
            })->name('edit');
            Route::put('/{id}', function ($id) {
                return redirect()->route('admin.contenus.prestations.show', $id);
            })->name('update');
            Route::delete('/{id}', function ($id) {
                return redirect()->route('admin.contenus.prestations.index');
            })->name('destroy');
        });

        // Communiqués
        Route::prefix('communiques')->name('communiques.')->group(function () {
            Route::get('/', function () {
                return view('admin.contenus.communiques.index');
            })->name('index');
            Route::get('/create', function () {
                return view('admin.contenus.communiques.create');
            })->name('create');
            Route::post('/', function () {
                return redirect()->route('admin.contenus.communiques.index');
            })->name('store');
            Route::get('/{id}', function ($id) {
                return view('admin.contenus.communiques.show', compact('id'));
            })->name('show');
            Route::get('/{id}/edit', function ($id) {
                return view('admin.contenus.communiques.edit', compact('id'));
            })->name('edit');
            Route::put('/{id}', function ($id) {
                return redirect()->route('admin.contenus.communiques.show', $id);
            })->name('update');
            Route::delete('/{id}', function ($id) {
                return redirect()->route('admin.contenus.communiques.index');
            })->name('destroy');
        });

        // Organigramme
        Route::prefix('organigramme')->name('organigramme.')->group(function () {
            Route::get('/', function () {
                return view('admin.contenus.organigramme.index');
            })->name('index');
            Route::get('/create', function () {
                return view('admin.contenus.organigramme.create');
            })->name('create');
            Route::post('/', function () {
                return redirect()->route('admin.contenus.organigramme.index');
            })->name('store');
            Route::get('/{id}/edit', function ($id) {
                return view('admin.contenus.organigramme.edit', compact('id'));
            })->name('edit');
            Route::put('/{id}', function ($id) {
                return redirect()->route('admin.contenus.organigramme.index');
            })->name('update');
            Route::delete('/{id}', function ($id) {
                return redirect()->route('admin.contenus.organigramme.index');
            })->name('destroy');
        });

        // Médias
        Route::prefix('medias')->name('medias.')->group(function () {
            Route::get('/', function () {
                return view('admin.contenus.medias.index');
            })->name('index');
            Route::post('/upload', function () {
                return redirect()->route('admin.contenus.medias.index');
            })->name('upload');
            Route::delete('/{id}', function ($id) {
                return redirect()->route('admin.contenus.medias.index');
            })->name('destroy');
        });

        Route::get('/pages', function () {
            return view('admin.contenus.pages');
        })->name('pages');
    });

    // Gestion des usagers
    Route::prefix('usagers')->name('usagers.')->group(function () {
        Route::get('/audiences', function () {
            return view('admin.usagers.audiences');
        })->name('audiences');

        Route::get('/suggestions', function () {
            return view('admin.usagers.suggestions');
        })->name('suggestions');

        Route::get('/preoccupations', function () {
            return view('admin.usagers.preoccupations');
        })->name('preoccupations');
    });

    // Administration
    Route::prefix('administration')->name('administration.')->group(function () {
        Route::get('/utilisateurs', function () {
            return view('admin.administration.utilisateurs');
        })->name('utilisateurs');

        Route::get('/parametres', function () {
            return view('admin.administration.parametres');
        })->name('parametres');
    });
});

require __DIR__.'/auth.php';