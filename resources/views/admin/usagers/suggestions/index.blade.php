<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Suggestions des Usagers</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Usagers</li>
                        <li class="breadcrumb-item active">Suggestions</li>
                    </ol>
                </nav>
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
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">128</h3>
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
                        <div class="stats-icon bg-warning bg-opacity-10 text-warning me-3">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">45</h3>
                            <p class="stats-label mb-0">Nouvelles</p>
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
                            <i class="fas fa-eye"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">68</h3>
                            <p class="stats-label mb-0">En cours</p>
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
                            <h3 class="stats-value mb-0">15</h3>
                            <p class="stats-label mb-0">Traitées</p>
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
                        <input type="text" class="form-control" name="search" placeholder="Nom, email, titre...">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Catégorie</label>
                    <select class="form-select" name="category">
                        <option value="">Toutes</option>
                        <option value="infrastructure">Infrastructure</option>
                        <option value="pedagogie">Pédagogie</option>
                        <option value="administration">Administration</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Statut</label>
                    <select class="form-select" name="status">
                        <option value="">Tous</option>
                        <option value="new">Nouvelle</option>
                        <option value="reviewing">En cours</option>
                        <option value="implemented">Traitée</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.usagers.suggestions.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-redo"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Suggestions Table --}}
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50"><input type="checkbox" class="form-check-input"></th>
                            <th>Auteur</th>
                            <th>Suggestion</th>
                            <th width="120">Catégorie</th>
                            <th width="100">Statut</th>
                            <th width="120">Date</th>
                            <th width="120" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div>
                                    <div class="fw-semibold">Sophie MARTIN</div>
                                    <small class="text-muted">s.martin@email.com</small>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.usagers.suggestions.show', 1) }}" class="text-dark text-decoration-none">
                                    Améliorer les cantines scolaires avec des produits locaux
                                </a>
                            </td>
                            <td><span class="badge bg-info">Infrastructure</span></td>
                            <td><span class="badge bg-warning">Nouvelle</span></td>
                            <td class="text-muted">18 Mai 2024</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.usagers.suggestions.show', 1) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <button type="button" class="btn btn-light text-success" title="Valider"><i class="fas fa-check"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div>
                                    <div class="fw-semibold">André KOSSOU</div>
                                    <small class="text-muted">a.kossou@email.com</small>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.usagers.suggestions.show', 2) }}" class="text-dark text-decoration-none">
                                    Formation continue des enseignants en nouvelles technologies
                                </a>
                            </td>
                            <td><span class="badge bg-primary">Pédagogie</span></td>
                            <td><span class="badge bg-info">En cours</span></td>
                            <td class="text-muted">15 Mai 2024</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.usagers.suggestions.show', 2) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <button type="button" class="btn btn-light text-primary" title="Répondre"><i class="fas fa-reply"></i></button>
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
                    <p class="text-muted mb-0">Affichage de 1 à 2 sur 128 entrées</p>
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
