<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Publications</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Contenus</li>
                        <li class="breadcrumb-item active">Publications</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.publications.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Nouvelle Publication
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
                            <i class="fas fa-newspaper"></i>
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
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">18</h3>
                            <p class="stats-label mb-0">Publiées</p>
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
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">4</h3>
                            <p class="stats-label mb-0">Brouillons</p>
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
                            <i class="fas fa-folder"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">5</h3>
                            <p class="stats-label mb-0">Catégories</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Filters & Search --}}
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
                    <label class="form-label">Catégorie</label>
                    <select class="form-select" name="category">
                        <option value="">Toutes les catégories</option>
                        <option value="actualites">Actualités</option>
                        <option value="evenements">Événements</option>
                        <option value="annonces">Annonces</option>
                        <option value="communiques">Communiqués</option>
                        <option value="rapports">Rapports</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Statut</label>
                    <select class="form-select" name="status">
                        <option value="">Tous les statuts</option>
                        <option value="published">Publié</option>
                        <option value="draft">Brouillon</option>
                        <option value="archived">Archivé</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.contenus.publications.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-redo"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Publications Table --}}
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50">
                                <input type="checkbox" class="form-check-input">
                            </th>
                            <th>Titre</th>
                            <th width="150">Catégorie</th>
                            <th width="120">Auteur</th>
                            <th width="120">Date</th>
                            <th width="100">Statut</th>
                            <th width="150" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Example Row 1 --}}
                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/60x40" alt="Image" class="rounded me-3" style="object-fit: cover;">
                                    <div>
                                        <a href="{{ route('admin.contenus.publications.show', 1) }}" class="fw-semibold text-dark text-decoration-none">
                                            Lancement de la rentrée scolaire 2024-2025
                                        </a>
                                        <div class="small text-muted">12 commentaires • 245 vues</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">Actualités</span></td>
                            <td class="text-muted">Admin MEMP</td>
                            <td class="text-muted">15 Sep 2024</td>
                            <td><span class="badge bg-success">Publié</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.publications.show', 1) }}" class="btn btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.contenus.publications.edit', 1) }}" class="btn btn-light" title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        {{-- Example Row 2 --}}
                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/60x40" alt="Image" class="rounded me-3" style="object-fit: cover;">
                                    <div>
                                        <a href="{{ route('admin.contenus.publications.show', 2) }}" class="fw-semibold text-dark text-decoration-none">
                                            Nouvelle circulaire sur les examens du CEP
                                        </a>
                                        <div class="small text-muted">5 commentaires • 128 vues</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-warning text-dark">Communiqués</span></td>
                            <td class="text-muted">Jean Kouassi</td>
                            <td class="text-muted">10 Sep 2024</td>
                            <td><span class="badge bg-success">Publié</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.publications.show', 2) }}" class="btn btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.contenus.publications.edit', 2) }}" class="btn btn-light" title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        {{-- Example Row 3 --}}
                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/60x40" alt="Image" class="rounded me-3" style="object-fit: cover;">
                                    <div>
                                        <a href="{{ route('admin.contenus.publications.show', 3) }}" class="fw-semibold text-dark text-decoration-none">
                                            Formation continue des enseignants
                                        </a>
                                        <div class="small text-muted">0 commentaires • 45 vues</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-info">Événements</span></td>
                            <td class="text-muted">Marie Diop</td>
                            <td class="text-muted">08 Sep 2024</td>
                            <td><span class="badge bg-secondary">Brouillon</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.publications.show', 3) }}" class="btn btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.contenus.publications.edit', 3) }}" class="btn btn-light" title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
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
                    <p class="text-muted mb-0">Affichage de 1 à 3 sur 24 entrées</p>
                </div>
                <div class="col-auto">
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <span class="page-link">Précédent</span>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Suivant</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
