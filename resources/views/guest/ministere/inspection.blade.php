<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Le Ministère</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Inspection Générale</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Membres de l'Inspection Générale</h2>
        <div class="title-divider"></div>
    </div>

    {{-- Inspector General --}}
    <div class="inspection-section">
        <div class="row justify-content-center">
            {{-- Inspector General --}}
            <div class="col-md-6 mb-4">
                <div class="member-card shadow h-100">
                    <div class="member-card-body text-center p-4">
                        <div class="member-photo mb-3">
                            <img src="{{ asset('assets/guest/img/inspection/ig.jpg') }}" alt="Gaston LAGOYE" class="img-fluid rounded-circle shadow" style="width: 180px; height: 180px; object-fit: cover;">
                        </div>
                        <h4 class="member-name mb-2">Gaston LAGOYE</h4>
                        <p class="member-position text-primary mb-3 fs-5">
                            <i class="far fa-shield-check me-2"></i>Inspecteur Général du Ministère
                        </p>
                        <div class="member-contact">
                            <a href="mailto:glagoye@gouv.bj" class="btn btn-outline-primary">
                                <i class="far fa-envelope me-2"></i>glagoye@gouv.bj
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Info Box --}}
        <div class="inspection-info-box mt-4 p-4 bg-light rounded">
            <h4 class="mb-3"><i class="far fa-info-circle text-primary me-2"></i>Rôle de l'Inspection Générale</h4>
            <p class="mb-3">
                L'Inspection Générale du Ministère des Enseignements Maternel et Primaire est chargée de veiller au bon
                fonctionnement des services et au respect des normes pédagogiques et administratives dans l'ensemble du système éducatif.
            </p>

            <h5 class="mb-3">Missions principales :</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="mission-item p-3 bg-white rounded shadow-sm">
                        <h6 class="text-primary"><i class="far fa-clipboard-check me-2"></i>Contrôle Pédagogique</h6>
                        <p class="mb-0 small">Évaluation de la qualité de l'enseignement et des pratiques pédagogiques</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="mission-item p-3 bg-white rounded shadow-sm">
                        <h6 class="text-primary"><i class="far fa-tasks me-2"></i>Audit Administratif</h6>
                        <p class="mb-0 small">Vérification de la gestion administrative et financière des établissements</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="mission-item p-3 bg-white rounded shadow-sm">
                        <h6 class="text-primary"><i class="far fa-chart-line me-2"></i>Suivi et Évaluation</h6>
                        <p class="mb-0 small">Monitoring des performances et identification des axes d'amélioration</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="mission-item p-3 bg-white rounded shadow-sm">
                        <h6 class="text-primary"><i class="far fa-users me-2"></i>Formation et Conseil</h6>
                        <p class="mb-0 small">Accompagnement et formation continue des enseignants et personnels</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
