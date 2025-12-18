<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Préoccupations & Plaintes</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Usagers</li>
                        <li class="breadcrumb-item active">Préoccupations</li>
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
                        <div class="stats-icon bg-danger bg-opacity-10 text-danger me-3">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">86</h3>
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
                            <h3 class="stats-value mb-0">32</h3>
                            <p class="stats-label mb-0">En attente</p>
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
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">38</h3>
                            <p class="stats-label mb-0">En traitement</p>
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
                            <h3 class="stats-value mb-0">16</h3>
                            <p class="stats-label mb-0">Résolues</p>
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
                        <input type="text" class="form-control" name="search" placeholder="Nom, école, sujet...">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Priorité</label>
                    <select class="form-select" name="priority">
                        <option value="">Toutes</option>
                        <option value="high">Haute</option>
                        <option value="medium">Moyenne</option>
                        <option value="low">Basse</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Statut</label>
                    <select class="form-select" name="status">
                        <option value="">Tous</option>
                        <option value="pending">En attente</option>
                        <option value="processing">En traitement</option>
                        <option value="resolved">Résolue</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.usagers.preoccupations.index') }}" class="btn btn-outline-secondary">
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
                            <th>Auteur</th>
                            <th>Préoccupation</th>
                            <th width="100">Priorité</th>
                            <th width="120">Statut</th>
                            <th width="120">Date</th>
                            <th width="120" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div>
                                    <div class="fw-semibold">Marie KOSSOU</div>
                                    <small class="text-muted">École Primaire Akpakpa</small>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.usagers.preoccupations.show', 1) }}" class="text-dark text-decoration-none">
                                    Manque de manuels scolaires pour la classe de CE2
                                </a>
                            </td>
                            <td><span class="badge bg-danger">Haute</span></td>
                            <td><span class="badge bg-warning">En attente</span></td>
                            <td class="text-muted">19 Mai 2024</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.usagers.preoccupations.show', 1) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <button type="button" class="btn btn-light text-info" title="Traiter"><i class="fas fa-tasks"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div>
                                    <div class="fw-semibold">Paul ADANDÉ</div>
                                    <small class="text-muted">École Publique Cotonou</small>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.usagers.preoccupations.show', 2) }}" class="text-dark text-decoration-none">
                                    Problème de salubrité dans les toilettes de l'école
                                </a>
                            </td>
                            <td><span class="badge bg-warning text-dark">Moyenne</span></td>
                            <td><span class="badge bg-info">En traitement</span></td>
                            <td class="text-muted">17 Mai 2024</td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.usagers.preoccupations.show', 2) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <button type="button" class="btn btn-light text-success" title="Résoudre"><i class="fas fa-check"></i></button>
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
                    <p class="text-muted mb-0">Affichage de 1 à 2 sur 86 entrées</p>
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
