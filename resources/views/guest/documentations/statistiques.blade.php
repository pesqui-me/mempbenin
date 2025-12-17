<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Documentation</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Statistiques</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Statistiques de l'Éducation</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Données chiffrées sur le système éducatif béninois</p>
    </div>

    {{-- Statistiques Section --}}
    <div class="statistiques-section">

        {{-- Key Stats --}}
        <div class="key-stats-grid row mb-5">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-card bg-primary bg-opacity-10 border border-primary p-4 text-center h-100">
                    <div class="stat-icon mb-3">
                        <i class="far fa-school fa-3x text-primary"></i>
                    </div>
                    <h3 class="stat-number text-primary mb-2">1,250</h3>
                    <p class="stat-label mb-0">Écoles Primaires</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-card bg-success bg-opacity-10 border border-success p-4 text-center h-100">
                    <div class="stat-icon mb-3">
                        <i class="far fa-chalkboard-teacher fa-3x text-success"></i>
                    </div>
                    <h3 class="stat-number text-success mb-2">15,430</h3>
                    <p class="stat-label mb-0">Enseignants</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-card bg-info bg-opacity-10 border border-info p-4 text-center h-100">
                    <div class="stat-icon mb-3">
                        <i class="far fa-users fa-3x text-info"></i>
                    </div>
                    <h3 class="stat-number text-info mb-2">450,000</h3>
                    <p class="stat-label mb-0">Élèves Inscrits</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-card bg-warning bg-opacity-10 border border-warning p-4 text-center h-100">
                    <div class="stat-icon mb-3">
                        <i class="far fa-graduation-cap fa-3x text-warning"></i>
                    </div>
                    <h3 class="stat-number text-warning mb-2">95.2%</h3>
                    <p class="stat-label mb-0">Taux de Réussite CEP</p>
                </div>
            </div>
        </div>

        {{-- Statistics Categories --}}
        <div class="row">

            {{-- Category 1: Effectifs --}}
            <div class="col-md-6 mb-4">
                <div class="stats-category-card shadow-sm h-100">
                    <div class="card-header bg-primary text-white p-3">
                        <h5 class="mb-0"><i class="far fa-users me-2"></i>Effectifs Scolaires</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Enseignement Maternel</span>
                                <strong class="text-primary">125,000 élèves</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Enseignement Primaire</span>
                                <strong class="text-primary">325,000 élèves</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Taux de scolarisation</span>
                                <strong class="text-success">98.5%</strong>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Ratio élèves/enseignant</span>
                                <strong class="text-info">29:1</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Category 2: Infrastructures --}}
            <div class="col-md-6 mb-4">
                <div class="stats-category-card shadow-sm h-100">
                    <div class="card-header bg-success text-white p-3">
                        <h5 class="mb-0"><i class="far fa-building me-2"></i>Infrastructures</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Salles de classe</span>
                                <strong class="text-success">8,420 salles</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Cantines scolaires</span>
                                <strong class="text-success">345 cantines</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Bibliothèques</span>
                                <strong class="text-success">156 bibliothèques</strong>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Points d'eau potable</span>
                                <strong class="text-info">892 points</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Category 3: Personnel --}}
            <div class="col-md-6 mb-4">
                <div class="stats-category-card shadow-sm h-100">
                    <div class="card-header bg-info text-white p-3">
                        <h5 class="mb-0"><i class="far fa-id-badge me-2"></i>Personnel Enseignant</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Instituteurs titulaires</span>
                                <strong class="text-info">9,850</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Instituteurs adjoints</span>
                                <strong class="text-info">5,580</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Femmes enseignantes</span>
                                <strong class="text-warning">42%</strong>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Directeurs d'école</span>
                                <strong class="text-info">1,250</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Category 4: Résultats --}}
            <div class="col-md-6 mb-4">
                <div class="stats-category-card shadow-sm h-100">
                    <div class="card-header bg-warning text-white p-3">
                        <h5 class="mb-0"><i class="far fa-chart-line me-2"></i>Performances</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Taux de réussite CEP</span>
                                <strong class="text-warning">95.2%</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Taux d'achèvement primaire</span>
                                <strong class="text-warning">89.7%</strong>
                            </div>
                        </div>
                        <div class="stat-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Taux de redoublement</span>
                                <strong class="text-danger">8.3%</strong>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Taux d'abandon</span>
                                <strong class="text-danger">3.5%</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Download Section --}}
        <div class="stats-download-box mt-5 p-4 bg-light rounded">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="mb-2"><i class="far fa-file-excel text-success me-2"></i>Télécharger les données complètes</h4>
                    <p class="text-muted mb-0">
                        Accédez à l'ensemble des données statistiques au format Excel pour vos analyses.
                    </p>
                </div>
                <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                    <a href="#" class="btn btn-success btn-lg">
                        <i class="far fa-download me-2"></i>Télécharger (Excel)
                    </a>
                </div>
            </div>
        </div>

        {{-- Info Note --}}
        <div class="stats-note mt-4 p-3 bg-info bg-opacity-10 border border-info rounded">
            <p class="mb-0 small">
                <i class="far fa-info-circle text-info me-2"></i>
                <strong>Note :</strong> Les statistiques présentées correspondent à l'année académique 2023-2024.
                Données mises à jour le 15 janvier 2025.
            </p>
        </div>

    </div>
</x-guest-layout>
