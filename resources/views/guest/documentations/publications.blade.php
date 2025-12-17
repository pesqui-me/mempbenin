<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Documentation</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Publications</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Publications du Ministère</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Rapports, études et documents stratégiques</p>
    </div>

    {{-- Publications Section --}}
    <div class="publications-section">

        {{-- Filters --}}
        <div class="filters-box bg-light p-3 rounded mb-4">
            <div class="row align-items-center">
                <div class="col-md-4 mb-2 mb-md-0">
                    <select class="form-select">
                        <option selected>Tous les types</option>
                        <option>Rapports annuels</option>
                        <option>Études et recherches</option>
                        <option>Guides pédagogiques</option>
                        <option>Manuels</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2 mb-md-0">
                    <select class="form-select">
                        <option selected>Toutes les années</option>
                        <option>2025</option>
                        <option>2024</option>
                        <option>2023</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Rechercher une publication...">
                </div>
            </div>
        </div>

        {{-- Publications Grid --}}
        <div class="row">

            {{-- Publication 1 --}}
            <div class="col-md-6 mb-4">
                <div class="publication-card shadow-sm h-100">
                    <div class="publication-thumbnail bg-primary text-white text-center py-5">
                        <i class="far fa-book fa-4x mb-3"></i>
                        <h6 class="text-white">Rapport Annuel 2024</h6>
                    </div>
                    <div class="publication-body p-4">
                        <span class="badge bg-primary mb-2">Rapport Annuel</span>
                        <h5 class="mb-3">Rapport Annuel des Activités 2024</h5>
                        <p class="text-muted small mb-3">
                            Bilan des activités et réalisations du ministère pour l'année académique 2023-2024.
                            Statistiques détaillées, projets réalisés et perspectives.
                        </p>
                        <div class="publication-meta mb-3">
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> Décembre 2024 •
                                <i class="far fa-file-pdf ms-2 me-1"></i> PDF •
                                <i class="far fa-download ms-2 me-1"></i> 245 téléchargements
                            </small>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-primary btn-sm flex-grow-1">
                                <i class="far fa-download me-1"></i> Télécharger
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Publication 2 --}}
            <div class="col-md-6 mb-4">
                <div class="publication-card shadow-sm h-100">
                    <div class="publication-thumbnail bg-success text-white text-center py-5">
                        <i class="far fa-chart-line fa-4x mb-3"></i>
                        <h6 class="text-white">Statistiques 2024</h6>
                    </div>
                    <div class="publication-body p-4">
                        <span class="badge bg-success mb-2">Statistiques</span>
                        <h5 class="mb-3">Annuaire Statistique de l'Éducation 2024</h5>
                        <p class="text-muted small mb-3">
                            Données statistiques complètes sur l'enseignement maternel et primaire :
                            effectifs, taux de scolarisation, infrastructures.
                        </p>
                        <div class="publication-meta mb-3">
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> Novembre 2024 •
                                <i class="far fa-file-pdf ms-2 me-1"></i> PDF •
                                <i class="far fa-download ms-2 me-1"></i> 412 téléchargements
                            </small>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-success btn-sm flex-grow-1">
                                <i class="far fa-download me-1"></i> Télécharger
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Publication 3 --}}
            <div class="col-md-6 mb-4">
                <div class="publication-card shadow-sm h-100">
                    <div class="publication-thumbnail bg-warning text-white text-center py-5">
                        <i class="far fa-graduation-cap fa-4x mb-3"></i>
                        <h6 class="text-white">Guide Pédagogique</h6>
                    </div>
                    <div class="publication-body p-4">
                        <span class="badge bg-warning mb-2">Guide</span>
                        <h5 class="mb-3">Guide de l'Enseignant Maternel</h5>
                        <p class="text-muted small mb-3">
                            Guide complet pour les enseignants du niveau maternel : méthodes pédagogiques,
                            activités d'éveil et évaluation.
                        </p>
                        <div class="publication-meta mb-3">
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> Septembre 2024 •
                                <i class="far fa-file-pdf ms-2 me-1"></i> PDF •
                                <i class="far fa-download ms-2 me-1"></i> 1,235 téléchargements
                            </small>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-warning btn-sm flex-grow-1">
                                <i class="far fa-download me-1"></i> Télécharger
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Publication 4 --}}
            <div class="col-md-6 mb-4">
                <div class="publication-card shadow-sm h-100">
                    <div class="publication-thumbnail bg-info text-white text-center py-5">
                        <i class="far fa-clipboard-list fa-4x mb-3"></i>
                        <h6 class="text-white">Plan Stratégique</h6>
                    </div>
                    <div class="publication-body p-4">
                        <span class="badge bg-info mb-2">Stratégie</span>
                        <h5 class="mb-3">Plan Sectoriel de l'Éducation 2024-2030</h5>
                        <p class="text-muted small mb-3">
                            Document stratégique définissant les orientations et objectifs du secteur
                            de l'éducation pour la période 2024-2030.
                        </p>
                        <div class="publication-meta mb-3">
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> Janvier 2024 •
                                <i class="far fa-file-pdf ms-2 me-1"></i> PDF •
                                <i class="far fa-download ms-2 me-1"></i> 876 téléchargements
                            </small>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-info btn-sm flex-grow-1">
                                <i class="far fa-download me-1"></i> Télécharger
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Newsletter Box --}}
        <div class="newsletter-box mt-5 p-4 bg-gradient-primary text-white rounded shadow">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="text-white mb-2">
                        <i class="far fa-envelope-open me-2"></i>Recevez nos nouvelles publications
                    </h4>
                    <p class="mb-0">Abonnez-vous pour être informé de la parution de nos documents</p>
                </div>
                <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                    <a href="#" class="btn btn-light btn-lg">
                        <i class="far fa-bell me-2"></i>S'abonner
                    </a>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
