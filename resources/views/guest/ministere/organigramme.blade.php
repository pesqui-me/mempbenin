<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Le Ministère</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Organigramme</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Organigramme</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Organigramme du Ministère des Enseignements Maternel & Primaire</p>
    </div>

    {{-- Organigramme Section --}}
    <div class="organigramme-section">

        {{-- Info Card --}}
        <div class="organigramme-info-card bg-light p-4 rounded mb-4">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="mb-2"><i class="far fa-sitemap text-primary me-2"></i>Structure Organisationnelle</h4>
                    <p class="mb-0">
                        Consultez l'organigramme complet du Ministère des Enseignements Maternel et Primaire pour comprendre
                        la structure hiérarchique et les différentes composantes du ministère.
                    </p>
                </div>
                <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                    <div class="organigramme-icon">
                        <i class="far fa-file-pdf fa-5x text-danger"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Download Section --}}
        <div class="organigramme-download text-center py-5">
            <div class="download-icon mb-4">
                <div class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle" style="width: 100px; height: 100px;">
                    <i class="far fa-download fa-3x"></i>
                </div>
            </div>
            <h3 class="mb-3">Télécharger l'Organigramme</h3>
            <p class="text-muted mb-4">Fichier PDF - Haute résolution</p>
            <a href="{{ asset('documents/organigramme-memp.pdf') }}" class="btn btn-primary btn-lg" download>
                <i class="far fa-file-pdf me-2"></i>Télécharger le PDF
            </a>
        </div>

        {{-- Preview Section (Optional) --}}
        <div class="organigramme-preview mt-5">
            <div class="preview-header bg-primary text-white p-3 rounded-top">
                <h4 class="mb-0 text-white"><i class="far fa-eye me-2"></i>Aperçu de l'organigramme</h4>
            </div>
            <div class="preview-body bg-light p-4 rounded-bottom text-center">
                {{-- Si vous avez une image de prévisualisation --}}
                <div class="preview-image">
                    <img src="{{ asset('assets/guest/img/organigramme-preview.jpg') }}" alt="Aperçu Organigramme" class="img-fluid rounded shadow" style="max-height: 600px;">
                </div>
                <p class="text-muted mt-3 mb-0">
                    <small><i class="far fa-info-circle me-2"></i>Cliquez sur le bouton "Télécharger" ci-dessus pour obtenir la version complète en haute résolution</small>
                </p>
            </div>
        </div>

        {{-- Additional Info --}}
        <div class="organigramme-additional-info mt-4 p-4 bg-warning bg-opacity-10 border border-warning rounded">
            <h5 class="mb-3"><i class="far fa-lightbulb text-warning me-2"></i>Besoin d'aide ?</h5>
            <p class="mb-2">
                Pour toute question concernant l'organisation du ministère ou pour obtenir des informations complémentaires,
                veuillez contacter le Secrétariat Général :
            </p>
            <ul class="mb-0">
                <li><i class="far fa-envelope text-primary me-2"></i>Email : <a href="mailto:contact@memp.gouv.bj">contact@memp.gouv.bj</a></li>
                <li><i class="far fa-phone text-primary me-2"></i>Téléphone : <a href="tel:+2290140480480">+229 01 40 48 04 80</a></li>
            </ul>
        </div>

    </div>
</x-guest-layout>
