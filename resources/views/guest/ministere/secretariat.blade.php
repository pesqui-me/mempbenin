<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Le Ministère</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Secrétariat Général</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Secrétariat Général du Ministère</h2>
        <div class="title-divider"></div>
    </div>

    {{-- Secretariat Members --}}
    <div class="secretariat-members-section">
        <div class="row">
            {{-- Member 1: Secrétaire Général --}}
            <div class="col-md-6 mb-4">
                <div class="member-card shadow-sm h-100">
                    <div class="member-card-body text-center p-4">
                        <div class="member-photo mb-3">
                            <img src="{{ asset('assets/guest/img/secretariat/sg.jpg') }}" alt="Thomas SIMBOSSA TCHAO" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h4 class="member-name mb-2">Thomas SIMBOSSA TCHAO</h4>
                        <p class="member-position text-primary mb-3">
                            <i class="far fa-user-tie me-2"></i>Secrétaire Général du Ministère
                        </p>
                        <div class="member-contact">
                            <a href="mailto:tsimbossa@gouv.bj" class="btn btn-outline-primary btn-sm">
                                <i class="far fa-envelope me-2"></i>tsimbossa@gouv.bj
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Member 2: Secrétaire Général Adjoint --}}
            <div class="col-md-6 mb-4">
                <div class="member-card shadow-sm h-100">
                    <div class="member-card-body text-center p-4">
                        <div class="member-photo mb-3">
                            <img src="{{ asset('assets/guest/img/secretariat/sga.jpg') }}" alt="Blaise ACAKPO" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h4 class="member-name mb-2">Blaise ACAKPO</h4>
                        <p class="member-position text-primary mb-3">
                            <i class="far fa-user-tie me-2"></i>Secrétaire Général Adjoint du Ministère
                        </p>
                        <div class="member-contact">
                            <a href="mailto:bacakpo@gouv.bj" class="btn btn-outline-primary btn-sm">
                                <i class="far fa-envelope me-2"></i>bacakpo@gouv.bj
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Info Box --}}
        <div class="secretariat-info-box mt-4 p-4 bg-light rounded">
            <h4 class="mb-3"><i class="far fa-info-circle text-primary me-2"></i>Rôle du Secrétariat Général</h4>
            <p class="mb-2">
                Le Secrétariat Général assure la coordination administrative et technique du ministère. Il est chargé de :
            </p>
            <ul class="role-list mb-0">
                <li><i class="far fa-check-circle text-primary me-2"></i>La gestion administrative et financière du ministère</li>
                <li><i class="far fa-check-circle text-primary me-2"></i>La coordination des activités des différentes directions</li>
                <li><i class="far fa-check-circle text-primary me-2"></i>Le suivi de l'exécution des décisions ministérielles</li>
                <li><i class="far fa-check-circle text-primary me-2"></i>La préparation des dossiers techniques et administratifs</li>
                <li><i class="far fa-check-circle text-primary me-2"></i>La représentation du ministre dans certaines instances</li>
            </ul>
        </div>
    </div>
</x-guest-layout>
