<x-admin-layout>
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Mon Compte</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Paramètres</li>
                        <li class="breadcrumb-item active">Mon compte</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <form action="{{ route('admin.administration.parametres.compte.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations personnelles</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <div class="avatar-circle-xl mx-auto mb-3">AD</div>
                            <input type="file" class="d-none" id="avatarInput" name="avatar" accept="image/*">
                            <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('avatarInput').click()">
                                <i class="fas fa-camera me-2"></i>Changer la photo
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prénom</label>
                                <input type="text" class="form-control" name="first_name" value="Admin">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" name="last_name" value="MEMP">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="admin@memp.bj">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text" class="form-control" name="phone" value="+229 21 30 XX XX">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Fonction</label>
                                <input type="text" class="form-control" name="function" value="Administrateur système">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Sécurité</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Mot de passe actuel</label>
                            <input type="password" class="form-control" name="current_password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nouveau mot de passe</label>
                            <input type="password" class="form-control" name="password">
                            <small class="text-muted">Laisser vide pour ne pas modifier</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirmer le nouveau mot de passe</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="two_factor" id="twoFactor">
                            <label class="form-check-label" for="twoFactor">
                                Activer l'authentification à deux facteurs (2FA)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Préférences</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Langue</label>
                            <select class="form-select" name="language">
                                <option value="fr" selected>Français</option>
                                <option value="en">English</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fuseau horaire</label>
                            <select class="form-select" name="timezone">
                                <option value="Africa/Porto-Novo" selected>Africa/Porto-Novo (GMT+1)</option>
                                <option value="UTC">UTC (GMT+0)</option>
                            </select>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="notifications_email" id="notifEmail" checked>
                            <label class="form-check-label" for="notifEmail">
                                Recevoir les notifications par email
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="notifications_browser" id="notifBrowser" checked>
                            <label class="form-check-label" for="notifBrowser">
                                Activer les notifications du navigateur
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Enregistrer les modifications
                    </button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
                        Annuler
                    </a>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Sessions actives</h5>
                </div>
                <div class="card-body">
                    <div class="session-item mb-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fw-semibold">
                                    <i class="fas fa-desktop text-primary me-2"></i>Bureau Windows
                                </div>
                                <small class="text-muted">Chrome • Porto-Novo, Bénin</small>
                                <div class="small text-success mt-1">Session actuelle</div>
                            </div>
                        </div>
                    </div>
                    <div class="session-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fw-semibold">
                                    <i class="fas fa-mobile-alt text-info me-2"></i>iPhone
                                </div>
                                <small class="text-muted">Safari • Il y a 2 heures</small>
                            </div>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations du compte</h5>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <small class="text-muted">Membre depuis</small>
                        <div><strong>15 Janvier 2024</strong></div>
                    </div>
                    <div class="mb-2">
                        <small class="text-muted">Dernière connexion</small>
                        <div><strong>Aujourd'hui à 14:30</strong></div>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted">Rôle</small>
                        <div><span class="badge bg-danger">Administrateur</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .avatar-circle-xl {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #102c57;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 40px;
        }
        .session-item {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }
        .session-item:last-child {
            border-bottom: none;
        }
    </style>
</x-admin-layout>
