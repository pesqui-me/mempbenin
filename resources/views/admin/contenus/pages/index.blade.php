<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Gestion des Pages</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Contenus</li>
                        <li class="breadcrumb-item active">Pages</li>
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
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">12</h3>
                            <p class="stats-label mb-0">Pages totales</p>
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
                            <h3 class="stats-value mb-0">10</h3>
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
                        <div class="stats-icon bg-info bg-opacity-10 text-info me-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">2</h3>
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
                        <div class="stats-icon bg-warning bg-opacity-10 text-warning me-3">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">5</h3>
                            <p class="stats-label mb-0">Modifiées récemment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Pages List --}}
    <div class="row">
        {{-- Institutional Pages --}}
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Pages institutionnelles</h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="fas fa-landmark"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Le Ministère</h6>
                                        <small class="text-muted">Présentation, missions, attributions</small>
                                    </div>
                                    <span class="badge bg-success">Publié</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 12 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'ministere') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>

                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-info bg-opacity-10 text-info">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Le Ministre</h6>
                                        <small class="text-muted">Biographie, cabinet, équipe</small>
                                    </div>
                                    <span class="badge bg-success">Publié</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 08 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'ministre') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>

                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-success bg-opacity-10 text-success">
                                    <i class="fas fa-handshake"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Partenaires</h6>
                                        <small class="text-muted">Partenaires techniques et financiers</small>
                                    </div>
                                    <span class="badge bg-success">Publié</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 05 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'partenaires') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>

                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Contacts</h6>
                                        <small class="text-muted">Coordonnées, localisation, horaires</small>
                                    </div>
                                    <span class="badge bg-success">Publié</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 02 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'contacts') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Utility Pages --}}
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Pages utilitaires</h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-info bg-opacity-10 text-info">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">FAQs</h6>
                                        <small class="text-muted">Questions fréquemment posées</small>
                                    </div>
                                    <span class="badge bg-success">Publié</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 15 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'faqs') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>

                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Réseaux sociaux</h6>
                                        <small class="text-muted">Liens vers les réseaux sociaux</small>
                                    </div>
                                    <span class="badge bg-success">Publié</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 10 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'reseaux-sociaux') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>

                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-success bg-opacity-10 text-success">
                                    <i class="fas fa-link"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Liens utiles</h6>
                                        <small class="text-muted">Liens vers sites partenaires</small>
                                    </div>
                                    <span class="badge bg-warning">Brouillon</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 03 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'liens-utiles') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>

                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="page-icon bg-secondary bg-opacity-10 text-secondary">
                                    <i class="fas fa-copyright"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Copyright & Mentions légales</h6>
                                        <small class="text-muted">Informations légales du site</small>
                                    </div>
                                    <span class="badge bg-success">Publié</span>
                                </div>
                                <div class="mt-2">
                                    <small class="text-muted">Modifié le 01 Jan 2024</small>
                                </div>
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('admin.contenus.pages.edit', 'copyright') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .page-icon {
            width: 45px;
            height: 45px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
    </style>

</x-admin-layout>
