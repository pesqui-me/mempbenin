<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Prestations</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Nos Services en Ligne</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Nos e-Services</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Accédez à nos services en ligne disponibles 24h/24 et 7j/7</p>
    </div>

    {{-- E-Services Section --}}
    <div class="eservices-section">

        {{-- Service 1 --}}
        <div class="eservice-item mb-4 shadow-sm">
            <div class="row g-0 align-items-center">
                <div class="col-md-2 text-center bg-primary text-white py-4">
                    <i class="far fa-user-edit fa-4x"></i>
                </div>
                <div class="col-md-7 p-4">
                    <h4 class="eservice-title mb-2">Inscription en ligne des enseignants maternels et primaires</h4>
                    <p class="text-muted mb-3">
                        Plateforme dédiée à l'inscription et à l'enregistrement des nouveaux enseignants.
                        Processus simplifié et sécurisé avec suivi en temps réel de votre dossier.
                    </p>
                    <div class="eservice-features">
                        <span class="badge bg-light text-dark me-2"><i class="far fa-check-circle text-success me-1"></i> Disponible 24/7</span>
                        <span class="badge bg-light text-dark me-2"><i class="far fa-shield-check text-primary me-1"></i> Sécurisé</span>
                        <span class="badge bg-light text-dark"><i class="far fa-clock text-info me-1"></i> Traitement rapide</span>
                    </div>
                </div>
                <div class="col-md-3 text-center p-4 bg-light">
                    <a href="#" class="btn btn-primary btn-lg w-100 mb-2">
                        <i class="far fa-arrow-right me-2"></i>Accéder au service
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                        <i class="far fa-question-circle me-2"></i>Guide d'utilisation
                    </a>
                </div>
            </div>
        </div>

        {{-- Service 2 --}}
        <div class="eservice-item mb-4 shadow-sm">
            <div class="row g-0 align-items-center">
                <div class="col-md-2 text-center bg-success text-white py-4">
                    <i class="far fa-search fa-4x"></i>
                </div>
                <div class="col-md-7 p-4">
                    <h4 class="eservice-title mb-2">Consultation en ligne des résultats du CEP</h4>
                    <p class="text-muted mb-3">
                        Consultez gratuitement et instantanément les résultats du Certificat d'Études Primaires.
                        Recherche par numéro de table, nom ou établissement.
                    </p>
                    <div class="eservice-features">
                        <span class="badge bg-light text-dark me-2"><i class="far fa-bolt text-warning me-1"></i> Résultats instantanés</span>
                        <span class="badge bg-light text-dark me-2"><i class="far fa-download text-info me-1"></i> Téléchargement PDF</span>
                        <span class="badge bg-light text-dark"><i class="far fa-mobile text-success me-1"></i> Mobile friendly</span>
                    </div>
                </div>
                <div class="col-md-3 text-center p-4 bg-light">
                    <a href="#" class="btn btn-success btn-lg w-100 mb-2">
                        <i class="far fa-arrow-right me-2"></i>Consulter les résultats
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                        <i class="far fa-info-circle me-2"></i>Comment rechercher ?
                    </a>
                </div>
            </div>
        </div>

        {{-- Service 3 --}}
        <div class="eservice-item mb-4 shadow-sm">
            <div class="row g-0 align-items-center">
                <div class="col-md-2 text-center bg-warning text-white py-4">
                    <i class="far fa-id-card fa-4x"></i>
                </div>
                <div class="col-md-7 p-4">
                    <h4 class="eservice-title mb-2">Établissement de la carte d'accès au centre d'examen</h4>
                    <p class="text-muted mb-3">
                        Demande en ligne de votre carte d'accès aux centres d'examen. Recevez votre carte
                        par email et imprimez-la directement depuis chez vous.
                    </p>
                    <div class="eservice-features">
                        <span class="badge bg-light text-dark me-2"><i class="far fa-envelope text-primary me-1"></i> Envoi par email</span>
                        <span class="badge bg-light text-dark me-2"><i class="far fa-print text-dark me-1"></i> Imprimable</span>
                        <span class="badge bg-light text-dark"><i class="far fa-qrcode text-warning me-1"></i> QR Code intégré</span>
                    </div>
                </div>
                <div class="col-md-3 text-center p-4 bg-light">
                    <a href="#" class="btn btn-warning btn-lg w-100 mb-2">
                        <i class="far fa-arrow-right me-2"></i>Demander ma carte
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                        <i class="far fa-file-alt me-2"></i>Documents requis
                    </a>
                </div>
            </div>
        </div>

        {{-- Info Banner --}}
        <div class="eservices-banner mt-5 p-4 bg-gradient-primary text-white rounded shadow">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="text-white mb-2"><i class="far fa-lightbulb me-2"></i>Besoin d'aide pour utiliser nos e-services ?</h4>
                    <p class="mb-0">Notre équipe support est disponible pour vous accompagner du lundi au vendredi de 8h à 17h.</p>
                </div>
                <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                    <a href="#" class="btn btn-light btn-lg">
                        <i class="far fa-headset me-2"></i>Contacter le support
                    </a>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
