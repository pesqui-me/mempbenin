<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Détails de la Publication</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.publications.index') }}">Publications</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.contenus.publications.edit', 1) }}" class="btn btn-primary">
                        <i class="fas fa-edit me-2"></i>Modifier
                    </a>
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fas fa-trash me-2"></i>Supprimer
                    </button>
                    <a href="{{ route('admin.contenus.publications.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Retour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Main Content --}}
        <div class="col-lg-8">
            {{-- Publication Content --}}
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="badge bg-primary me-2">Actualités</span>
                            <span class="badge bg-success">Publié</span>
                        </div>
                        <div class="text-muted small">
                            <i class="fas fa-eye me-1"></i> 245 vues
                        </div>
                    </div>
                </div>
                <img src="https://via.placeholder.com/1200x400" alt="Image de couverture" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title mb-3">Lancement de la rentrée scolaire 2024-2025</h2>

                    <div class="d-flex align-items-center text-muted mb-4">
                        <img src="https://via.placeholder.com/32" alt="Admin" class="rounded-circle me-2">
                        <div class="small">
                            Par <strong>Admin MEMP</strong> • Publié le 15 Sep 2024 à 10:30 • Dernière modification le 16 Sep 2024
                        </div>
                    </div>

                    <div class="alert alert-info mb-4">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Extrait :</strong> Le ministre annonce officiellement le lancement de la rentrée scolaire pour l'année académique 2024-2025.
                    </div>

                    <div class="content">
                        <p>Le Ministre des Enseignements Maternel et Primaire, M. Salimane KARIMOU, a officiellement lancé la rentrée scolaire pour l'année académique 2024-2025 ce lundi 15 septembre lors d'une cérémonie qui s'est tenue à l'école primaire publique de Cotonou.</p>

                        <p>Dans son allocution, le Ministre a rappelé les différentes réformes entreprises par le gouvernement pour améliorer la qualité de l'enseignement et garantir l'accès à l'éducation pour tous les enfants béninois.</p>

                        <h4>Les points clés de cette rentrée</h4>
                        <ul>
                            <li>Distribution de kits scolaires à plus de 50 000 élèves nécessiteux</li>
                            <li>Recrutement de 1 500 nouveaux enseignants</li>
                            <li>Construction de 200 nouvelles salles de classe</li>
                            <li>Renforcement du programme de cantines scolaires</li>
                        </ul>

                        <p>Le Ministre a également insisté sur l'importance de l'implication des parents dans la réussite scolaire de leurs enfants et a appelé tous les acteurs du système éducatif à œuvrer ensemble pour l'atteinte des objectifs fixés.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>Étiquettes :</strong>
                            <span class="badge bg-light text-dark me-1">rentrée scolaire</span>
                            <span class="badge bg-light text-dark me-1">éducation</span>
                            <span class="badge bg-light text-dark">MEMP</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-share-alt me-1"></i>Partager
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Comments Section --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Commentaires (12)</h5>
                </div>
                <div class="card-body">
                    {{-- Comment 1 --}}
                    <div class="d-flex mb-4">
                        <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle me-3">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <strong>Jean Dupont</strong>
                                    <span class="text-muted small ms-2">Il y a 2 heures</span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-check me-2"></i>Approuver</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-ban me-2"></i>Rejeter</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Supprimer</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="mb-0">Excellente initiative ! Cela va vraiment aider les familles.</p>
                        </div>
                    </div>

                    {{-- Comment 2 --}}
                    <div class="d-flex">
                        <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle me-3">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <strong>Marie Kouassi</strong>
                                    <span class="text-muted small ms-2">Il y a 5 heures</span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-check me-2"></i>Approuver</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-ban me-2"></i>Rejeter</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Supprimer</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="mb-0">Merci pour ces efforts. Qu'en est-il de la formation des enseignants ?</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="text-decoration-none">Voir tous les commentaires (12)</a>
                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            {{-- Quick Stats --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistiques</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-eye me-2"></i>Vues</span>
                        <strong>245</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-comment me-2"></i>Commentaires</span>
                        <strong>12</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-share-alt me-2"></i>Partages</span>
                        <strong>8</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted"><i class="fas fa-heart me-2"></i>J'aime</span>
                        <strong>42</strong>
                    </div>
                </div>
            </div>

            {{-- Publication Info --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Auteur</small>
                        <strong>Admin MEMP</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Date de création</small>
                        <strong>15 Sep 2024, 10:30</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Dernière modification</small>
                        <strong>16 Sep 2024, 14:20</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Statut</small>
                        <span class="badge bg-success">Publié</span>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1">À la une</small>
                        <span class="badge bg-info">Oui</span>
                    </div>
                </div>
            </div>

            {{-- SEO Info --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">SEO</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Meta Title</small>
                        <p class="mb-0">Lancement de la rentrée scolaire 2024-2025 | MEMP</p>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1">Meta Description</small>
                        <p class="mb-0 small">Le ministre annonce officiellement le lancement de la rentrée scolaire pour l'année académique 2024-2025.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
