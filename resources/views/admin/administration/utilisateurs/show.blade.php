<x-admin-layout>
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Profil Utilisateur</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.administration.utilisateurs.index') }}">Utilisateurs</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.administration.utilisateurs.edit', 1) }}" class="btn btn-primary">
                        <i class="fas fa-edit me-2"></i>Modifier
                    </a>
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fas fa-trash me-2"></i>Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="avatar-circle-xl mx-auto mb-3">AD</div>
                    <h4 class="mb-1">Admin MEMP</h4>
                    <p class="text-muted mb-3">Administrateur système</p>
                    <span class="badge bg-success mb-3">Actif</span>
                    <hr>
                    <div class="text-start">
                        <div class="mb-2">
                            <small class="text-muted"><i class="fas fa-envelope me-2"></i>Email</small>
                            <div><strong>admin@memp.bj</strong></div>
                        </div>
                        <div class="mb-2">
                            <small class="text-muted"><i class="fas fa-phone me-2"></i>Téléphone</small>
                            <div><strong>+229 21 30 XX XX</strong></div>
                        </div>
                        <div class="mb-0">
                            <small class="text-muted"><i class="fas fa-calendar me-2"></i>Membre depuis</small>
                            <div><strong>15 Jan 2024</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Activité récente</h5>
                </div>
                <div class="card-body">
                    <div class="activity-item">
                        <div class="activity-icon bg-primary"><i class="fas fa-edit"></i></div>
                        <div class="activity-content">
                            <div class="activity-title">A modifié une publication</div>
                            <small class="text-muted">Aujourd'hui à 14:30</small>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon bg-success"><i class="fas fa-plus"></i></div>
                        <div class="activity-content">
                            <div class="activity-title">A créé un nouveau communiqué</div>
                            <small class="text-muted">Hier à 10:15</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Permissions</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted mb-3">Contenus</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" checked disabled>
                                <label class="form-check-label">Créer</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" checked disabled>
                                <label class="form-check-label">Modifier</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" checked disabled>
                                <label class="form-check-label">Supprimer</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted mb-3">Administration</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" checked disabled>
                                <label class="form-check-label">Gérer utilisateurs</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" checked disabled>
                                <label class="form-check-label">Gérer paramètres</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .avatar-circle-xl {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #102c57;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 32px;
        }
        .activity-item {
            display: flex;
            align-items-start;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        .activity-item:last-child {
            border-bottom: none;
        }
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
        }
    </style>
</x-admin-layout>
