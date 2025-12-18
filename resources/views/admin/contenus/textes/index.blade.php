<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Textes & Législations</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Contenus</li>
                        <li class="breadcrumb-item active">Textes & Législations</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.textes.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Nouveau Texte
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
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">42</h3>
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
                        <div class="stats-icon bg-info bg-opacity-10 text-info me-3">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">15</h3>
                            <p class="stats-label mb-0">Lois</p>
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
                            <i class="fas fa-scroll"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">18</h3>
                            <p class="stats-label mb-0">Décrets</p>
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
                            <i class="fas fa-clipboard"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">9</h3>
                            <p class="stats-label mb-0">Arrêtés</p>
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
                        <input type="text" class="form-control" name="search" placeholder="Titre, référence, numéro..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Type de texte</label>
                    <select class="form-select" name="type">
                        <option value="">Tous les types</option>
                        <option value="loi">Loi</option>
                        <option value="decret">Décret</option>
                        <option value="arrete">Arrêté</option>
                        <option value="circulaire">Circulaire</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Année</label>
                    <select class="form-select" name="year">
                        <option value="">Toutes</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.contenus.textes.index') }}" class="btn btn-outline-secondary">
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
                            <th width="150">Référence</th>
                            <th width="100">Année</th>
                            <th width="120">Date</th>
                            <th width="150" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <a href="{{ route('admin.contenus.textes.show', 1) }}" class="fw-semibold text-dark text-decoration-none">
                                    Loi portant orientation de l'éducation nationale
                                </a>
                                <div class="small text-muted">Définit les objectifs et principes de l'éducation</div>
                            </td>
                            <td><span class="badge bg-primary">Loi</span></td>
                            <td class="text-muted">N°2003-17</td>
                            <td class="text-muted">2003</td>
                            <td class="text-muted">11 Nov 2003</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.textes.show', 1) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.textes.edit', 1) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <a href="{{ route('admin.contenus.textes.show', 2) }}" class="fw-semibold text-dark text-decoration-none">
                                    Décret portant organisation du CEP
                                </a>
                                <div class="small text-muted">Modalités d'organisation de l'examen</div>
                            </td>
                            <td><span class="badge bg-success">Décret</span></td>
                            <td class="text-muted">N°2024-045</td>
                            <td class="text-muted">2024</td>
                            <td class="text-muted">15 Jan 2024</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.textes.show', 2) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.textes.edit', 2) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <a href="{{ route('admin.contenus.textes.show', 3) }}" class="fw-semibold text-dark text-decoration-none">
                                    Arrêté fixant les programmes scolaires
                                </a>
                                <div class="small text-muted">Programmes officiels du primaire</div>
                            </td>
                            <td><span class="badge bg-warning text-dark">Arrêté</span></td>
                            <td class="text-muted">N°2024-128</td>
                            <td class="text-muted">2024</td>
                            <td class="text-muted">03 Mar 2024</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.textes.show', 3) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.contenus.textes.edit', 3) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
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
                    <p class="text-muted mb-0">Affichage de 1 à 3 sur 42 entrées</p>
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
