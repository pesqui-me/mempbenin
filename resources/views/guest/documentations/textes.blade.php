<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Documentation</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Textes Législatifs et Règlementaires</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Textes Législatifs et Règlementaires</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Consultez le cadre juridique régissant l'enseignement maternel et primaire</p>
    </div>

    {{-- Textes Section --}}
    <div class="textes-section">

        {{-- Categories --}}
        <div class="categories-nav mb-4">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#lois" data-bs-toggle="pill">Lois</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#decrets" data-bs-toggle="pill">Décrets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#arretes" data-bs-toggle="pill">Arrêtés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#circulaires" data-bs-toggle="pill">Circulaires</a>
                </li>
            </ul>
        </div>

        {{-- Tabs Content --}}
        <div class="tab-content">

            {{-- Lois Tab --}}
            <div class="tab-pane fade show active" id="lois">
                <div class="textes-list">
                    <div class="texte-item mb-3 p-4 bg-white shadow-sm rounded">
                        <div class="row align-items-center">
                            <div class="col-md-1 text-center">
                                <i class="far fa-file-pdf fa-3x text-danger"></i>
                            </div>
                            <div class="col-md-9">
                                <h5 class="mb-2">Loi d'orientation sur l'éducation en République du Bénin</h5>
                                <p class="text-muted mb-2 small">
                                    Loi portant orientation de l'éducation nationale en République du Bénin
                                </p>
                                <div class="texte-meta">
                                    <span class="badge bg-light text-dark me-2">
                                        <i class="far fa-calendar me-1"></i> Date: 15 Juin 2003
                                    </span>
                                    <span class="badge bg-light text-dark">
                                        <i class="far fa-hashtag me-1"></i> Réf: Loi N°2003-17
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100 mb-2">
                                    <i class="far fa-download me-1"></i> Télécharger
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                                    <i class="far fa-eye me-1"></i> Consulter
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Decrets Tab --}}
            <div class="tab-pane fade" id="decrets">
                <div class="empty-state text-center py-5">
                    <i class="far fa-file-alt fa-4x text-muted mb-3"></i>
                    <p class="text-muted">Décrets en cours de publication</p>
                </div>
            </div>

            {{-- Arretes Tab --}}
            <div class="tab-pane fade" id="arretes">
                <div class="empty-state text-center py-5">
                    <i class="far fa-file-alt fa-4x text-muted mb-3"></i>
                    <p class="text-muted">Arrêtés en cours de publication</p>
                </div>
            </div>

            {{-- Circulaires Tab --}}
            <div class="tab-pane fade" id="circulaires">
                <div class="empty-state text-center py-5">
                    <i class="far fa-file-alt fa-4x text-muted mb-3"></i>
                    <p class="text-muted">Circulaires en cours de publication</p>
                </div>
            </div>

        </div>

        {{-- Info Box --}}
        <div class="textes-info mt-5 p-4 bg-info bg-opacity-10 border border-info rounded">
            <h5 class="mb-3"><i class="far fa-info-circle text-info me-2"></i>À propos de cette section</h5>
            <p class="mb-2">
                Cette section regroupe l'ensemble des textes juridiques régissant le système éducatif béninois.
                Tous les documents sont téléchargeables gratuitement au format PDF.
            </p>
            <p class="mb-0">
                Pour toute question d'ordre juridique, contactez le service juridique du ministère à l'adresse :
                <a href="mailto:juridique@memp.gouv.bj">juridique@memp.gouv.bj</a>
            </p>
        </div>

    </div>
</x-guest-layout>
