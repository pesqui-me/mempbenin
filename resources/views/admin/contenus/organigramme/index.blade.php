<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Organigramme</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Contenus</li>
                        <li class="breadcrumb-item active">Organigramme</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.contenus.organigramme.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Nouveau Poste
                    </a>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-download me-2"></i>Exporter PDF
                    </button>
                </div>
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
                            <p class="stats-label mb-0">Postes</p>
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
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">8</h3>
                            <p class="stats-label mb-0">Directions</p>
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
                            <h3 class="stats-value mb-0">18</h3>
                            <p class="stats-label mb-0">Cadres</p>
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
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">6</h3>
                            <p class="stats-label mb-0">Vacants</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Organizational Chart View --}}
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title mb-0">Structure organisationnelle</h5>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-outline-secondary active">
                        <i class="fas fa-sitemap me-1"></i>Vue hiérarchique
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-list me-1"></i>Vue liste
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body" style="overflow-x: auto;">
            <div class="org-chart" style="min-width: 800px;">
                {{-- Minister Level --}}
                <div class="text-center mb-4">
                    <div class="org-box org-level-1 mx-auto" style="max-width: 300px;">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Avatar" class="rounded-circle me-3">
                            <div class="text-start">
                                <h6 class="mb-0">Salimane KARIMOU</h6>
                                <p class="text-muted small mb-0">Ministre</p>
                                <div class="mt-1">
                                    <a href="{{ route('admin.contenus.organigramme.edit', 1) }}" class="btn btn-sm btn-link p-0 me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Cabinet Level --}}
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="org-box org-level-2">
                            <div class="d-flex align-items-center">
                                <div class="org-icon bg-primary me-2">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Jean AKPAKI</h6>
                                    <p class="text-muted small mb-0">Directeur de Cabinet</p>
                                    <div class="mt-1">
                                        <a href="{{ route('admin.contenus.organigramme.edit', 2) }}" class="btn btn-sm btn-link p-0">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="org-box org-level-2">
                            <div class="d-flex align-items-center">
                                <div class="org-icon bg-info me-2">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Marie KPONTON</h6>
                                    <p class="text-muted small mb-0">Secrétaire Générale</p>
                                    <div class="mt-1">
                                        <a href="{{ route('admin.contenus.organigramme.edit', 3) }}" class="btn btn-sm btn-link p-0">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="org-box org-level-2">
                            <div class="d-flex align-items-center">
                                <div class="org-icon bg-success me-2">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Poste Vacant</h6>
                                    <p class="text-muted small mb-0">Conseiller Technique</p>
                                    <span class="badge bg-warning text-dark">Vacant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Directions Level --}}
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="org-box org-level-3">
                            <div class="org-icon bg-secondary mb-2">
                                <i class="fas fa-school"></i>
                            </div>
                            <h6 class="mb-0">Direction des Enseignements</h6>
                            <p class="text-muted small mb-1">Dr. Pierre ASSOGBA</p>
                            <a href="{{ route('admin.contenus.organigramme.edit', 4) }}" class="btn btn-sm btn-link p-0">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="org-box org-level-3">
                            <div class="org-icon bg-secondary mb-2">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h6 class="mb-0">Direction des Examens</h6>
                            <p class="text-muted small mb-1">Mme Sophie DOSSOU</p>
                            <a href="{{ route('admin.contenus.organigramme.edit', 5) }}" class="btn btn-sm btn-link p-0">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="org-box org-level-3">
                            <div class="org-icon bg-secondary mb-2">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <h6 class="mb-0">Direction des RH</h6>
                            <p class="text-muted small mb-1">M. André HOUNGBO</p>
                            <a href="{{ route('admin.contenus.organigramme.edit', 6) }}" class="btn btn-sm btn-link p-0">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="org-box org-level-3">
                            <div class="org-icon bg-secondary mb-2">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h6 class="mb-0">Direction des Statistiques</h6>
                            <p class="text-muted small mb-1">M. Thomas KEKE</p>
                            <a href="{{ route('admin.contenus.organigramme.edit', 7) }}" class="btn btn-sm btn-link p-0">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- List Table View --}}
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Liste des postes</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Poste</th>
                            <th>Titulaire</th>
                            <th>Direction/Service</th>
                            <th width="120">Niveau</th>
                            <th width="100">Statut</th>
                            <th width="150" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Ministre</strong>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/32" alt="Avatar" class="rounded-circle me-2">
                                    <div>
                                        <div>Salimane KARIMOU</div>
                                        <small class="text-muted">ministre@memp.bj</small>
                                    </div>
                                </div>
                            </td>
                            <td>Cabinet du Ministre</td>
                            <td><span class="badge bg-danger">Niveau 1</span></td>
                            <td><span class="badge bg-success">Occupé</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.organigramme.edit', 1) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Directeur de Cabinet</strong>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/32" alt="Avatar" class="rounded-circle me-2">
                                    <div>
                                        <div>Jean AKPAKI</div>
                                        <small class="text-muted">j.akpaki@memp.bj</small>
                                    </div>
                                </div>
                            </td>
                            <td>Cabinet du Ministre</td>
                            <td><span class="badge bg-warning text-dark">Niveau 2</span></td>
                            <td><span class="badge bg-success">Occupé</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.organigramme.edit', 2) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Conseiller Technique</strong>
                            </td>
                            <td>
                                <span class="text-muted fst-italic">Poste vacant</span>
                            </td>
                            <td>Cabinet du Ministre</td>
                            <td><span class="badge bg-warning text-dark">Niveau 2</span></td>
                            <td><span class="badge bg-warning text-dark">Vacant</span></td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.contenus.organigramme.edit', 3) }}" class="btn btn-light" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-light text-danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .org-chart {
            font-family: Arial, sans-serif;
        }
        .org-box {
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            transition: all 0.3s;
        }
        .org-box:hover {
            border-color: #102c57;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .org-level-1 {
            border-color: #102c57;
            background: linear-gradient(135deg, #102c57 0%, #1a3a6b 100%);
            color: white;
        }
        .org-level-1 .text-muted {
            color: rgba(255,255,255,0.8) !important;
        }
        .org-level-2 {
            border-color: #3498db;
        }
        .org-level-3 {
            border-color: #95a5a6;
            text-align: center;
        }
        .org-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
    </style>

</x-admin-layout>
