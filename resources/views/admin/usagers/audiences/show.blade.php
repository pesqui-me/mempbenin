<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Détails de la Demande d'Audience</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.usagers.audiences.index') }}">Audiences</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.usagers.audiences.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Main Content --}}
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="badge bg-warning me-2">En attente</span>
                            <small class="text-muted">Reçue le 15 Mai 2024 à 14:30</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="mb-4">Projet de construction d'école dans la commune de Ouidah</h4>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6 class="text-muted mb-2">Date souhaitée</h6>
                            <p class="mb-0"><i class="fas fa-calendar text-primary me-2"></i><strong>25 Mai 2024 à 10:00</strong></p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted mb-2">Durée estimée</h6>
                            <p class="mb-0"><i class="fas fa-clock text-info me-2"></i><strong>30 minutes</strong></p>
                        </div>
                    </div>

                    <hr>

                    <h5 class="mb-3">Objet de la demande</h5>
                    <p>Je souhaite rencontrer Monsieur le Ministre pour discuter d'un projet de construction d'une nouvelle école primaire dans la commune de Ouidah, financé par notre ONG en partenariat avec des bailleurs internationaux.</p>

                    <p>Le projet prévoit:</p>
                    <ul>
                        <li>Construction de 6 salles de classe</li>
                        <li>Un bloc administratif</li>
                        <li>Des sanitaires adaptés</li>
                        <li>Une cantine scolaire</li>
                        <li>Un terrain de sport</li>
                    </ul>

                    <p>Nous aimerions obtenir l'aval du ministère et discuter des modalités de collaboration pour ce projet d'envergure.</p>

                    <h5 class="mt-4 mb-3">Documents joints</h5>
                    <div class="list-group">
                        <div class="list-group-item d-flex align-items-center">
                            <i class="fas fa-file-pdf fa-2x text-danger me-3"></i>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">Dossier du projet.pdf</h6>
                                <small class="text-muted">2.4 MB</small>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Notes internes --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Notes internes</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Ajouter une note</label>
                            <textarea class="form-control" rows="3" placeholder="Notes pour le cabinet..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="fas fa-save me-2"></i>Enregistrer la note
                        </button>
                    </form>

                    <div class="mt-4">
                        <div class="note-item p-3 bg-light rounded mb-2">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <strong>Admin MEMP</strong>
                                <small class="text-muted">16 Mai 2024, 09:15</small>
                            </div>
                            <p class="mb-0">Dossier complet et bien documenté. À transmettre au cabinet pour validation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            {{-- Informations du demandeur --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations du demandeur</h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <div class="avatar-circle-lg mx-auto mb-2">JD</div>
                        <h5 class="mb-0">Jean DUPONT</h5>
                        <p class="text-muted mb-0">Directeur ONG Éducation Pour Tous</p>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1"><i class="fas fa-envelope me-2"></i>Email</small>
                        <strong>jean.dupont@email.com</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1"><i class="fas fa-phone me-2"></i>Téléphone</small>
                        <strong>+229 97 XX XX XX</strong>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1"><i class="fas fa-building me-2"></i>Organisation</small>
                        <strong>ONG Éducation Pour Tous</strong>
                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-success">
                            <i class="fas fa-check me-2"></i>Confirmer l'audience
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-calendar-alt me-2"></i>Reporter
                        </button>
                        <button class="btn btn-outline-danger">
                            <i class="fas fa-times me-2"></i>Refuser
                        </button>
                        <hr class="my-2">
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-envelope me-2"></i>Envoyer un email
                        </button>
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-print me-2"></i>Imprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .avatar-circle-lg {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #102c57;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 24px;
        }
    </style>

</x-admin-layout>
