<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Prestations</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Notre Catalogue</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Notre Catalogue de Prestations</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Découvrez l'ensemble des services offerts par le Ministère</p>
    </div>

    {{-- Prestations Grid --}}
    <div class="prestations-section">
        <div class="row">

            {{-- Prestation 1 --}}
            <div class="col-md-6 mb-4">
                <div class="prestation-card shadow-sm h-100">
                    <div class="prestation-icon-wrapper">
                        <div class="prestation-icon bg-primary text-white">
                            <i class="far fa-chalkboard-teacher fa-3x"></i>
                        </div>
                    </div>
                    <div class="prestation-card-body p-4">
                        <h4 class="prestation-title mb-3">Formation des instituteurs adjoints à titre payant</h4>
                        <p class="prestation-description text-muted mb-3">
                            Programme de formation professionnelle pour les aspirants instituteurs adjoints.
                            Formation complète avec certification officielle.
                        </p>
                        <div class="prestation-details mb-3">
                            <span class="badge bg-info me-2"><i class="far fa-clock me-1"></i> Durée : 2 ans</span>
                            <span class="badge bg-warning"><i class="far fa-users me-1"></i> Places limitées</span>
                        </div>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="far fa-file-alt me-2"></i>Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            {{-- Prestation 2 --}}
            <div class="col-md-6 mb-4">
                <div class="prestation-card shadow-sm h-100">
                    <div class="prestation-icon-wrapper">
                        <div class="prestation-icon bg-success text-white">
                            <i class="far fa-graduation-cap fa-3x"></i>
                        </div>
                    </div>
                    <div class="prestation-card-body p-4">
                        <h4 class="prestation-title mb-3">Formation des instituteurs adjoints à titre boursier</h4>
                        <p class="prestation-description text-muted mb-3">
                            Formation gratuite sur concours pour les meilleurs candidats.
                            Bourse d'études complète avec engagement de service.
                        </p>
                        <div class="prestation-details mb-3">
                            <span class="badge bg-success me-2"><i class="far fa-gift me-1"></i> Gratuit</span>
                            <span class="badge bg-primary"><i class="far fa-trophy me-1"></i> Sur concours</span>
                        </div>
                        <a href="#" class="btn btn-outline-success btn-sm">
                            <i class="far fa-file-alt me-2"></i>Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            {{-- Prestation 3 --}}
            <div class="col-md-6 mb-4">
                <div class="prestation-card shadow-sm h-100">
                    <div class="prestation-icon-wrapper">
                        <div class="prestation-icon bg-warning text-white">
                            <i class="far fa-edit fa-3x"></i>
                        </div>
                    </div>
                    <div class="prestation-card-body p-4">
                        <h4 class="prestation-title mb-3">Rectification d'erreurs sur les attestations et diplômes</h4>
                        <p class="prestation-description text-muted mb-3">
                            Service de correction des erreurs administratives sur les documents officiels
                            délivrés par la direction des examens et concours.
                        </p>
                        <div class="prestation-details mb-3">
                            <span class="badge bg-warning me-2"><i class="far fa-hourglass-half me-1"></i> Délai : 15 jours</span>
                            <span class="badge bg-secondary"><i class="far fa-file-invoice me-1"></i> Documents requis</span>
                        </div>
                        <a href="#" class="btn btn-outline-warning btn-sm">
                            <i class="far fa-file-alt me-2"></i>Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            {{-- Prestation 4 --}}
            <div class="col-md-6 mb-4">
                <div class="prestation-card shadow-sm h-100">
                    <div class="prestation-icon-wrapper">
                        <div class="prestation-icon bg-danger text-white">
                            <i class="far fa-certificate fa-3x"></i>
                        </div>
                    </div>
                    <div class="prestation-card-body p-4">
                        <h4 class="prestation-title mb-3">Autorisation de diriger un établissement privé</h4>
                        <p class="prestation-description text-muted mb-3">
                            Obtention de l'autorisation officielle pour l'ouverture et la direction
                            d'un établissement d'enseignement privé.
                        </p>
                        <div class="prestation-details mb-3">
                            <span class="badge bg-danger me-2"><i class="far fa-clipboard-check me-1"></i> Dossier complet</span>
                            <span class="badge bg-info"><i class="far fa-calendar me-1"></i> Délai : 1 mois</span>
                        </div>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-file-alt me-2"></i>Voir les détails
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Info Box --}}
        <div class="prestations-info-box mt-4 p-4 bg-light rounded border-start border-primary border-5">
            <h4 class="mb-3"><i class="far fa-info-circle text-primary me-2"></i>Comment bénéficier de nos prestations ?</h4>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="step-item text-center">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-2" style="width: 50px; height: 50px; line-height: 50px;">
                            <strong>1</strong>
                        </div>
                        <h6>Consultez les détails</h6>
                        <p class="small text-muted mb-0">Informez-vous sur les conditions et documents requis</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="step-item text-center">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-2" style="width: 50px; height: 50px; line-height: 50px;">
                            <strong>2</strong>
                        </div>
                        <h6>Préparez votre dossier</h6>
                        <p class="small text-muted mb-0">Rassemblez tous les documents nécessaires</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="step-item text-center">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-2" style="width: 50px; height: 50px; line-height: 50px;">
                            <strong>3</strong>
                        </div>
                        <h6>Soumettez votre demande</h6>
                        <p class="small text-muted mb-0">Déposez votre dossier ou faites une demande en ligne</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
