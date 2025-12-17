<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Opportunités</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Recrutements</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Offres de Recrutement</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Découvrez les opportunités de carrière au sein du ministère</p>
    </div>

    {{-- Recrutements Section --}}
    <div class="recrutements-section">

        {{-- Filters --}}
        <div class="filters-box bg-light p-3 rounded mb-4">
            <div class="row align-items-center">
                <div class="col-md-4 mb-2 mb-md-0">
                    <select class="form-select">
                        <option selected>Tous les postes</option>
                        <option>Enseignants</option>
                        <option>Personnel administratif</option>
                        <option>Personnel technique</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2 mb-md-0">
                    <select class="form-select">
                        <option selected>Tous les niveaux</option>
                        <option>Débutant</option>
                        <option>Intermédiaire</option>
                        <option>Confirmé</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Rechercher un poste...">
                </div>
            </div>
        </div>

        {{-- Recrutement Example (when available) --}}
        <div class="recrutement-card mb-4 shadow-sm">
            <div class="card-ribbon bg-success text-white">
                <i class="far fa-briefcase me-1"></i> OUVERT
            </div>
            <div class="p-4">
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="recrutement-title mb-2">
                            <i class="far fa-chalkboard-teacher text-primary me-2"></i>
                            Recrutement de 500 instituteurs adjoints - Session 2025
                        </h4>
                        <p class="text-muted mb-3">
                            Le Ministère lance le recrutement de 500 instituteurs adjoints pour renforcer le corps
                            enseignant des écoles primaires publiques sur l'ensemble du territoire national.
                        </p>
                        <div class="recrutement-details mb-3">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <small class="text-muted d-block">Type de contrat</small>
                                    <strong>Fonction publique</strong>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <small class="text-muted d-block">Nombre de postes</small>
                                    <strong>500 postes</strong>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <small class="text-muted d-block">Niveau requis</small>
                                    <strong>BAC + Formation</strong>
                                </div>
                            </div>
                        </div>
                        <div class="recrutement-meta">
                            <span class="badge bg-light text-dark me-2">
                                <i class="far fa-calendar text-info me-1"></i> Publié le: 10 Janvier 2025
                            </span>
                            <span class="badge bg-danger">
                                <i class="far fa-clock me-1"></i> Candidatures jusqu'au: 28 Février 2025
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 text-center d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-primary btn-lg mb-2">
                            <i class="far fa-file-download me-2"></i>Dossier de candidature
                        </a>
                        <a href="#" class="btn btn-success mb-2">
                            <i class="far fa-paper-plane me-2"></i>Postuler en ligne
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-info-circle me-2"></i>Plus d'infos
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Empty State (when no recrutements) --}}
        <div class="empty-state text-center py-5">
            <div class="empty-icon mb-4">
                <i class="far fa-user-times fa-5x text-muted"></i>
            </div>
            <h4 class="text-muted mb-3">Aucun recrutement en cours actuellement</h4>
            <p class="text-muted mb-4">
                Les offres de recrutement sont publiées selon les besoins du ministère.
                Abonnez-vous pour être alerté dès qu'une nouvelle offre est disponible.
            </p>
            <a href="#" class="btn btn-outline-primary">
                <i class="far fa-bell me-2"></i>Recevoir les alertes recrutement
            </a>
        </div>

        {{-- Info Boxes --}}
        <div class="row mt-5">
            <div class="col-md-6 mb-4">
                <div class="info-card bg-primary bg-opacity-10 border border-primary p-4 rounded h-100">
                    <h5 class="mb-3"><i class="far fa-user-graduate text-primary me-2"></i>Vous êtes candidat ?</h5>
                    <ul class="mb-0">
                        <li class="mb-2">Consultez régulièrement cette page</li>
                        <li class="mb-2">Préparez votre dossier à l'avance</li>
                        <li class="mb-2">Respectez les délais de candidature</li>
                        <li class="mb-0">Suivez les résultats des concours</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="info-card bg-success bg-opacity-10 border border-success p-4 rounded h-100">
                    <h5 class="mb-3"><i class="far fa-file-alt text-success me-2"></i>Documents généralement requis</h5>
                    <ul class="mb-0">
                        <li class="mb-2">Copie du diplôme légalisée</li>
                        <li class="mb-2">Acte de naissance</li>
                        <li class="mb-2">Certificat de nationalité</li>
                        <li class="mb-2">Casier judiciaire</li>
                        <li class="mb-0">CV et lettre de motivation</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
