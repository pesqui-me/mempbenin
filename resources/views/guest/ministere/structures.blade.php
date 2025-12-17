<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Le Ministère</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Structures du Ministère</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Structures du Ministère</h2>
        <div class="title-divider"></div>
    </div>

    {{-- Structures Section --}}
    <div class="structures-section">

        {{-- Structures Centrales --}}
        <div class="structure-category mb-5">
            <div class="category-header bg-primary text-white p-3 rounded-top">
                <h3 class="mb-0 text-white"><i class="far fa-building me-2"></i>Structures Centrales</h3>
            </div>
            <div class="category-body bg-light p-4 rounded-bottom">
                <div class="row">
                    {{-- Structure 1: DSI --}}
                    <div class="col-md-6 mb-4">
                        <div class="structure-card bg-white shadow-sm h-100">
                            <div class="structure-card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="structure-icon me-3">
                                        <div class="icon-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; border-radius: 50%;">
                                            <i class="far fa-laptop-code fa-2x"></i>
                                        </div>
                                    </div>
                                    <div class="structure-content flex-grow-1">
                                        <h5 class="mb-2">Direction des Systèmes d'Information (DSI)</h5>
                                        <div class="structure-leader mb-2">
                                            <strong><i class="far fa-user me-2"></i>Maurille KPODANHO FALIERE</strong>
                                            <p class="text-muted mb-0 small">Directeur</p>
                                        </div>
                                        <a href="mailto:mkpodanho@gouv.bj" class="btn btn-outline-primary btn-sm mt-2">
                                            <i class="far fa-envelope me-2"></i>mkpodanho@gouv.bj
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Structure 2: DPAF --}}
                    <div class="col-md-6 mb-4">
                        <div class="structure-card bg-white shadow-sm h-100">
                            <div class="structure-card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="structure-icon me-3">
                                        <div class="icon-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; border-radius: 50%;">
                                            <i class="far fa-chart-pie fa-2x"></i>
                                        </div>
                                    </div>
                                    <div class="structure-content flex-grow-1">
                                        <h5 class="mb-2">Direction de la Planification, de l'Administration et des Finances (DPAF)</h5>
                                        <div class="structure-leader mb-2">
                                            <strong><i class="far fa-user me-2"></i>Martin ESSOUN Olatoundji</strong>
                                            <p class="text-muted mb-0 small">Directeur</p>
                                        </div>
                                        <a href="mailto:messoun@gouv.bj" class="btn btn-outline-primary btn-sm mt-2">
                                            <i class="far fa-envelope me-2"></i>messoun@gouv.bj
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Structures Techniques --}}
        <div class="structure-category mb-5">
            <div class="category-header bg-secondary text-white p-3 rounded-top">
                <h3 class="mb-0 text-white"><i class="far fa-cogs me-2"></i>Structures Techniques</h3>
            </div>
            <div class="category-body bg-light p-4 rounded-bottom">
                <div class="alert alert-info mb-0">
                    <i class="far fa-info-circle me-2"></i>Informations en cours de mise à jour
                </div>
            </div>
        </div>

        {{-- Structures sous Tutelles --}}
        <div class="structure-category mb-5">
            <div class="category-header bg-success text-white p-3 rounded-top">
                <h3 class="mb-0 text-white"><i class="far fa-sitemap me-2"></i>Structures sous Tutelle</h3>
            </div>
            <div class="category-body bg-light p-4 rounded-bottom">
                <div class="alert alert-info mb-0">
                    <i class="far fa-info-circle me-2"></i>Informations en cours de mise à jour
                </div>
            </div>
        </div>

        {{-- Les Cellules --}}
        <div class="structure-category mb-5">
            <div class="category-header bg-warning text-dark p-3 rounded-top">
                <h3 class="mb-0"><i class="far fa-layer-group me-2"></i>Les Cellules</h3>
            </div>
            <div class="category-body bg-light p-4 rounded-bottom">
                <div class="alert alert-info mb-0">
                    <i class="far fa-info-circle me-2"></i>Informations en cours de mise à jour
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
