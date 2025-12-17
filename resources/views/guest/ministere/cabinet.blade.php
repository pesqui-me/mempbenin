<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Le Ministère</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Cabinet du Ministre</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Membres du Cabinet</h2>
        <div class="title-divider"></div>
    </div>

    {{-- Cabinet Members --}}
    <div class="cabinet-members-section">
        <div class="row">
            {{-- Member 1: Directeur de Cabinet --}}
            <div class="col-md-6 mb-4">
                <div class="member-card shadow-sm h-100">
                    <div class="member-card-body text-center p-4">
                        <div class="member-photo mb-3">
                            <img src="{{ asset('assets/guest/img/cabinet/directeur.jpg') }}" alt="Dèwanou AVODAGBE" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h4 class="member-name mb-2">Dèwanou AVODAGBE</h4>
                        <p class="member-position text-primary mb-3">
                            <i class="far fa-briefcase me-2"></i>Directeur de Cabinet
                        </p>
                        <div class="member-contact">
                            <a href="mailto:davodagbe@gouv.bj" class="btn btn-outline-primary btn-sm">
                                <i class="far fa-envelope me-2"></i>davodagbe@gouv.bj
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Member 2: Directeur Adjoint de Cabinet --}}
            <div class="col-md-6 mb-4">
                <div class="member-card shadow-sm h-100">
                    <div class="member-card-body text-center p-4">
                        <div class="member-photo mb-3">
                            <img src="{{ asset('assets/guest/img/cabinet/directeur-adjoint.jpg') }}" alt="A. O. Raliou ARINLOYE" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h4 class="member-name mb-2">A. O. Raliou ARINLOYE</h4>
                        <p class="member-position text-primary mb-3">
                            <i class="far fa-briefcase me-2"></i>Directeur Adjoint de Cabinet
                        </p>
                        <div class="member-contact">
                            <a href="mailto:rarinloye@gouv.bj" class="btn btn-outline-primary btn-sm">
                                <i class="far fa-envelope me-2"></i>rarinloye@gouv.bj
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Info Box --}}
        <div class="cabinet-info-box mt-4 p-4 bg-light rounded">
            <h4 class="mb-3"><i class="far fa-info-circle text-primary me-2"></i>Rôle du Cabinet du Ministre</h4>
            <p class="mb-0">
                Le Cabinet du Ministre assure la coordination des activités du ministère et le suivi de la mise en œuvre
                de la politique gouvernementale dans le secteur de l'enseignement maternel et primaire. Il veille à la
                bonne exécution des directives ministérielles et assure la liaison avec les différentes structures du ministère.
            </p>
        </div>
    </div>
</x-guest-layout>
