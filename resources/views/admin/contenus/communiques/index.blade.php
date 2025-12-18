<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Communiqués & Annonces</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Contenus</li>
                        <li class="breadcrumb-item active">Communiqués</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.communiques.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Nouveau Communiqué
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
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">35</h3>
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
                            <h3 class="stats-value mb-0">28</h3>
                            <p class="stats-label mb-0">Publiés</p>
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
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">12</h3>
                            <p class="stats-label mb-0">Urgents</p>
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
                            <h3 class="stats-value mb-0">4,892</h3>
                            <p class="stats-label mb-0">Vues</p>
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
                        <input type="text" class="form-control" name="search" placeholder="Titre, contenu..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Type</label>
                    <select class="form-select" name="type">
                        <option value="">Tous les types</option>
                        <option value="communique">Communiqué</option>
                        <option value="annonce">Annonce</option>
                        <option value="avis">Avis</option>
                        <option value="note">Note de service</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Priorité</label>
                    <select class="form-select" name="priority">
                        <option value="">Toutes</option>
                        <option value="urgent">Urgent</option>
                        <option value="high">Élevée</option>
                        <option value="normal">Normale</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.contenus.communiques.index') }}" class="btn btn-outline-secondary">
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
                            <th>Titre</th>
                            <th width="120">Type</th>
                            <th width="100">Priorité</th>
                            <th width="150">Date de publication</th>
                            <th width="100">Vues</th>
                            <th width="150" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <span class="badge bg-danger"><i class="fas fa-exclamation-circle"></i></span>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.contenus.communiques.show', 1) }}" class="fw-semibold text-dark text-decoration-none">
                                            Report de la date des examens du CEP
                                        </a>
                                        <div class="small text-muted">Les examens prévus pour le 15 juin sont reportés au 22 juin</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">Communiqué</span></td>
                            <td><span class="badge bg-danger">Urgent</span></td>
                            <td class="text-muted">08 Mai 2024</td>
                            <td class="text-center">1,245</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.communiques.show', 1) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.communiques.edit', 1) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <span class="badge bg-info"><i class="fas fa-info-circle"></i></span>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.contenus.communiques.show', 2) }}" class="fw-semibold text-dark text-decoration-none">
                                            Campagne de sensibilisation sur l'hygiène scolaire
                                        </a>
                                        <div class="small text-muted">Organisation d'une campagne nationale dans toutes les écoles</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-info">Annonce</span></td>
                            <td><span class="badge bg-warning text-dark">Élevée</span></td>
                            <td class="text-muted">12 Avr 2024</td>
                            <td class="text-center">892</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.communiques.show', 2) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.communiques.edit', 2) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <span class="badge bg-secondary"><i class="fas fa-file-alt"></i></span>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.contenus.communiques.show', 3) }}" class="fw-semibold text-dark text-decoration-none">
                                            Avis de recrutement d'enseignants contractuels
                                        </a>
                                        <div class="small text-muted">Le ministère recrute 500 enseignants contractuels pour l'année 2024-2025</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-success">Avis</span></td>
                            <td><span class="badge bg-secondary">Normale</span></td>
                            <td class="text-muted">20 Mar 2024</td>
                            <td class="text-center">2,156</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.communiques.show', 3) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.communiques.edit', 3) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
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
                    <p class="text-muted mb-0">Affichage de 1 à 3 sur 35 entrées</p>
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
