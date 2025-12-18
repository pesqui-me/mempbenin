<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Gestion des Utilisateurs</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Administration</li>
                        <li class="breadcrumb-item active">Utilisateurs</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.administration.utilisateurs.create') }}" class="btn btn-primary">
                    <i class="fas fa-user-plus me-2"></i>Nouvel Utilisateur
                </a>
            </div>
        </div>
    </div>

    {{-- Stats Cards --}}
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-primary bg-opacity-10 text-primary me-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">24</h3>
                            <p class="stats-label mb-0">Total</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-success bg-opacity-10 text-success me-3">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">20</h3>
                            <p class="stats-label mb-0">Actifs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-warning bg-opacity-10 text-warning me-3">
                            <i class="fas fa-user-clock"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">4</h3>
                            <p class="stats-label mb-0">Inactifs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-info bg-opacity-10 text-info me-3">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">5</h3>
                            <p class="stats-label mb-0">Administrateurs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Filters --}}
    <div class="card mb-4">
        <div class="card-body">
            <form action="" method="GET" class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Rechercher</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control" name="search" placeholder="Nom, email...">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Rôle</label>
                    <select class="form-select" name="role">
                        <option value="">Tous</option>
                        <option value="admin">Administrateur</option>
                        <option value="editor">Éditeur</option>
                        <option value="moderator">Modérateur</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Statut</label>
                    <select class="form-select" name="status">
                        <option value="">Tous</option>
                        <option value="active">Actif</option>
                        <option value="inactive">Inactif</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.administration.utilisateurs.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-redo"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Users Table --}}
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50"><input type="checkbox" class="form-check-input"></th>
                            <th>Utilisateur</th>
                            <th width="150">Rôle</th>
                            <th width="150">Dernière connexion</th>
                            <th width="100">Statut</th>
                            <th width="150" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle me-2">AD</div>
                                    <div>
                                        <div class="fw-semibold">Admin MEMP</div>
                                        <small class="text-muted">admin@memp.bj</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger">Administrateur</span></td>
                            <td class="text-muted">Aujourd'hui, 14:30</td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.administration.utilisateurs.show', 1) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.administration.utilisateurs.edit', 1) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle me-2">JD</div>
                                    <div>
                                        <div class="fw-semibold">Jean DUPONT</div>
                                        <small class="text-muted">j.dupont@memp.bj</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">Éditeur</span></td>
                            <td class="text-muted">18 Mai 2024, 16:45</td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.administration.utilisateurs.show', 2) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.administration.utilisateurs.edit', 2) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="row align-items-center">
                <div class="col">
                    <p class="text-muted mb-0">Affichage de 1 à 2 sur 24 entrées</p>
                </div>
                <div class="col-auto">
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled"><span class="page-link">Précédent</span></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <style>
        .avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #102c57;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }
    </style>

</x-admin-layout>
