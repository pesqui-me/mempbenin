<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Le Ministère</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Biographie du Ministre</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Biographie du Ministre</h2>
        <div class="title-divider"></div>
    </div>

    {{-- Minister Bio Section --}}
    <div class="minister-bio-section">
        <div class="row">
            {{-- Photo --}}
            <div class="col-md-4 mb-4">
                <div class="minister-photo-wrapper">
                    <img src="{{ asset('assets/guest/img/ministre.jpg') }}" alt="Ministre Salimane Karimou" class="img-fluid rounded shadow">
                    <div class="minister-name-tag mt-3 p-3 bg-primary text-white text-center rounded">
                        <h4 class="mb-1 text-white">Salimane KARIMOU</h4>
                        <p class="mb-0">Ministre des Enseignements Maternel & Primaire</p>
                    </div>
                </div>
            </div>

            {{-- Bio Content --}}
            <div class="col-md-8">
                <div class="minister-bio-content">
                    <h3 class="section-title mb-3">Parcours Professionnel</h3>
                    <p class="mb-3">
                        Le ministre Karimou Salimane occupe le poste de <strong>Ministre des Enseignements Maternel et Primaire</strong> depuis 2016.
                        Fort d'une expérience solide dans le domaine de l'administration publique et de l'éducation, il a su apporter une vision
                        moderne et stratégique au système éducatif béninois.
                    </p>

                    <h4 class="mt-4 mb-3">Expérience Antérieure</h4>
                    <ul class="experience-list">
                        <li><i class="far fa-check-circle text-primary me-2"></i>Secrétaire Général du Ministère</li>
                        <li><i class="far fa-check-circle text-primary me-2"></i>Directeur de la Médiathèque Nationale</li>
                        <li><i class="far fa-check-circle text-primary me-2"></i>Expert en gestion axée sur les résultats</li>
                    </ul>

                    <h4 class="mt-4 mb-3">Formation Académique</h4>
                    <div class="education-info bg-light p-3 rounded">
                        <p class="mb-2">
                            <i class="far fa-graduation-cap text-primary me-2"></i>
                            <strong>Maîtrise en Gestion Axée sur les Résultats</strong>
                        </p>
                        <p class="mb-0 text-muted">Université Laval, Canada</p>
                    </div>

                    <h4 class="mt-4 mb-3">Vision et Engagement</h4>
                    <p class="mb-0">
                        Sous son leadership, le ministère s'engage à améliorer la qualité de l'enseignement maternel et primaire au Bénin,
                        avec un accent particulier sur l'accès équitable à l'éducation, la formation des enseignants et la modernisation
                        des infrastructures scolaires.
                    </p>
                </div>
            </div>
        </div>

        {{-- CTA Audience --}}
        <div class="audience-cta mt-5 p-4 bg-gradient-primary text-white rounded shadow">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="text-white mb-2">Audience auprès du Ministre</h3>
                    <p class="mb-0">Vous souhaitez obtenir une audience avec le Ministre ? Faites votre demande en ligne.</p>
                </div>
                <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                    <a href="#" class="btn btn-light btn-lg">
                        <i class="far fa-calendar-check me-2"></i>Demander une Audience
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
