<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Opportunités</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Appels d'Offre</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Appels d'Offre en Cours</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Consultez les appels d'offre et marchés publics du ministère</p>
    </div>

    {{-- Appels d'Offre Section --}}
    <div class="appels-offre-section">

        {{-- Filters --}}
        <div class="filters-box bg-light p-3 rounded mb-4">
            <div class="row align-items-center">
                <div class="col-md-4 mb-2 mb-md-0">
                    <select class="form-select">
                        <option selected>Tous les types</option>
                        <option>Fournitures</option>
                        <option>Services</option>
                        <option>Travaux</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2 mb-md-0">
                    <select class="form-select">
                        <option selected>Tous les statuts</option>
                        <option>Ouvert</option>
                        <option>Clôturé</option>
                        <option>En attente</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Rechercher...">
                </div>
            </div>
        </div>

        {{-- Offre Example (when available) --}}
        <div class="appel-offre-card mb-4 shadow-sm">
            <div class="card-ribbon bg-success text-white">
                <i class="far fa-circle-check me-1"></i> OUVERT
            </div>
            <div class="p-4">
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="offre-title mb-2">
                            <i class="far fa-file-contract text-primary me-2"></i>
                            Appel à manifestation d'intérêt dans le cadre de la constitution du répertoire des prestataires
                        </h4>
                        <p class="text-muted mb-3">
                            Le Ministère des Enseignements Maternel et Primaire lance un appel à manifestation d'intérêt
                            pour la constitution d'un répertoire de prestataires qualifiés dans différents domaines.
                        </p>
                        <div class="offre-meta">
                            <span class="badge bg-light text-dark me-2">
                                <i class="far fa-tag text-primary me-1"></i> Référence: AO/MEMP/2025/001
                            </span>
                            <span class="badge bg-light text-dark me-2">
                                <i class="far fa-calendar text-info me-1"></i> Publié le: 15 Janvier 2025
                            </span>
                            <span class="badge bg-danger">
                                <i class="far fa-clock me-1"></i> Date limite: 28 Février 2025
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 text-center d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-primary btn-lg mb-2">
                            <i class="far fa-download me-2"></i>Télécharger le dossier
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-eye me-2"></i>Voir les détails
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Empty State (when no offres) --}}
        <div class="empty-state text-center py-5">
            <div class="empty-icon mb-4">
                <i class="far fa-inbox fa-5x text-muted"></i>
            </div>
            <h4 class="text-muted mb-3">Aucun appel d'offre en cours actuellement</h4>
            <p class="text-muted mb-4">
                Consultez cette page régulièrement pour être informé des nouveaux appels d'offre.
                Vous pouvez également vous abonner à notre newsletter pour recevoir les notifications.
            </p>
            <a href="#" class="btn btn-outline-primary">
                <i class="far fa-bell me-2"></i>S'abonner aux notifications
            </a>
        </div>

        {{-- Info Box --}}
        <div class="appels-offre-info mt-5 p-4 bg-warning bg-opacity-10 border border-warning rounded">
            <h5 class="mb-3"><i class="far fa-info-circle text-warning me-2"></i>Comment participer à un appel d'offre ?</h5>
            <ol class="mb-0">
                <li class="mb-2">Téléchargez le dossier d'appel d'offre complet</li>
                <li class="mb-2">Prenez connaissance de toutes les conditions et exigences</li>
                <li class="mb-2">Préparez votre offre technique et financière</li>
                <li class="mb-2">Soumettez votre dossier avant la date limite</li>
                <li class="mb-0">Suivez les résultats publiés sur cette page</li>
            </ol>
        </div>

    </div>
</x-guest-layout>
