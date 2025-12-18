<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Prestations & Services</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Contenus</li>
                        <li class="breadcrumb-item active">Prestations</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.prestations.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Nouvelle Prestation
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
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">28</h3>
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
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">24</h3>
                            <p class="stats-label mb-0">Actives</p>
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
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">1,245</h3>
                            <p class="stats-label mb-0">Demandes</p>
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
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">8</h3>
                            <p class="stats-label mb-0">Prioritaires</p>
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
                        <input type="text" class="form-control" name="search" placeholder="Titre, description..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Catégorie</label>
                    <select class="form-select" name="category">
                        <option value="">Toutes les catégories</option>
                        <option value="administrative">Administrative</option>
                        <option value="pedagogique">Pédagogique</option>
                        <option value="technique">Technique</option>
                        <option value="financiere">Financière</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Statut</label>
                    <select class="form-select" name="status">
                        <option value="">Tous</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.contenus.prestations.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-redo"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Table --}}
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50"><input type="checkbox" class="form-check-input"></th>
                            <th>Prestation</th>
                            <th width="150">Catégorie</th>
                            <th width="120">Délai</th>
                            <th width="100">Demandes</th>
                            <th width="120">Statut</th>
                            <th width="150" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <a href="{{ route('admin.contenus.prestations.show', 1) }}" class="fw-semibold text-dark text-decoration-none">
                                    Demande d'attestation de service
                                </a>
                                <div class="small text-muted">Délivre une attestation de service pour les enseignants</div>
                            </td>
                            <td><span class="badge bg-primary">Administrative</span></td>
                            <td class="text-muted">3-5 jours</td>
                            <td class="text-center"><span class="badge bg-info">142</span></td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.prestations.show', 1) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.prestations.edit', 1) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <a href="{{ route('admin.contenus.prestations.show', 2) }}" class="fw-semibold text-dark text-decoration-none">
                                    Inscription scolaire
                                </a>
                                <div class="small text-muted">Procédure d'inscription des élèves dans les écoles publiques</div>
                            </td>
                            <td><span class="badge bg-info">Pédagogique</span></td>
                            <td class="text-muted">Immédiat</td>
                            <td class="text-center"><span class="badge bg-info">856</span></td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.prestations.show', 2) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.prestations.edit', 2) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <a href="{{ route('admin.contenus.prestations.show', 3) }}" class="fw-semibold text-dark text-decoration-none">
                                    Demande de subvention
                                </a>
                                <div class="small text-muted">Subventions pour les cantines scolaires et équipements</div>
                            </td>
                            <td><span class="badge bg-warning text-dark">Financière</span></td>
                            <td class="text-muted">15-30 jours</td>
                            <td class="text-center"><span class="badge bg-info">68</span></td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.prestations.show', 3) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.prestations.edit', 3) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
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
                    <p class="text-muted mb-0">Affichage de 1 à 3 sur 28 entrées</p>
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

</x-admin-layout>
