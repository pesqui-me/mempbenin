<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Demandes d'Audience</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Usagers</li>
                        <li class="breadcrumb-item active">Audiences</li>
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
                            <i class="fas fa-calendar-alt"></i>
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
                        <div class="stats-icon bg-warning bg-opacity-10 text-warning me-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">18</h3>
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
                        <div class="stats-icon bg-success bg-opacity-10 text-success me-3">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">20</h3>
                            <p class="stats-label mb-0">Confirmées</p>
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
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">4</h3>
                            <p class="stats-label mb-0">Terminées</p>
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
                        <input type="text" class="form-control" name="search" placeholder="Nom, email, sujet...">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Statut</label>
                    <select class="form-select" name="status">
                        <option value="">Tous</option>
                        <option value="pending">En attente</option>
                        <option value="confirmed">Confirmée</option>
                        <option value="completed">Terminée</option>
                        <option value="cancelled">Annulée</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-select" name="date">
                </div>
                <div class="col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-filter me-1"></i>Filtrer
                        </button>
                        <a href="{{ route('admin.usagers.audiences.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-redo"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Audiences Table --}}
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50"><input type="checkbox" class="form-check-input"></th>
                            <th>Demandeur</th>
                            <th>Sujet</th>
                            <th width="150">Date souhaitée</th>
                            <th width="100">Statut</th>
                            <th width="150" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle me-2">JD</div>
                                    <div>
                                        <div class="fw-semibold">Jean DUPONT</div>
                                        <small class="text-muted">jean.dupont@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.usagers.audiences.show', 1) }}" class="text-dark text-decoration-none">
                                    Projet de construction d'école
                                </a>
                            </td>
                            <td class="text-muted">25 Mai 2024, 10:00</td>
                            <td><span class="badge bg-warning">En attente</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.usagers.audiences.show', 1) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <button type="button" class="btn btn-success" title="Confirmer"><i class="fas fa-check"></i></button>
                                    <button type="button" class="btn btn-danger" title="Annuler"><i class="fas fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle me-2">MA</div>
                                    <div>
                                        <div class="fw-semibold">Marie AKPAKI</div>
                                        <small class="text-muted">m.akpaki@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.usagers.audiences.show', 2) }}" class="text-dark text-decoration-none">
                                    Recrutement enseignants
                                </a>
                            </td>
                            <td class="text-muted">22 Mai 2024, 14:00</td>
                            <td><span class="badge bg-success">Confirmée</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.usagers.audiences.show', 2) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
                                    <button type="button" class="btn btn-info" title="Marquer terminée"><i class="fas fa-check-double"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle me-2">PK</div>
                                    <div>
                                        <div class="fw-semibold">Pierre KPONTON</div>
                                        <small class="text-muted">p.kponton@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.usagers.audiences.show', 3) }}" class="text-dark text-decoration-none">
                                    Partenariat ONG éducation
                                </a>
                            </td>
                            <td class="text-muted">20 Mai 2024, 09:00</td>
                            <td><span class="badge bg-info">Terminée</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.usagers.audiences.show', 3) }}" class="btn btn-light" title="Voir"><i class="fas fa-eye"></i></a>
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
