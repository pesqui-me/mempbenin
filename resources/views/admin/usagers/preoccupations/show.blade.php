<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Détails de la Préoccupation</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.usagers.preoccupations.index') }}">Préoccupations</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.usagers.preoccupations.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="badge bg-danger me-2">Haute priorité</span>
                            <span class="badge bg-warning">En attente</span>
                        </div>
                        <small class="text-muted">Reçue le 19 Mai 2024</small>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="mb-4">Manque de manuels scolaires pour la classe de CE2</h4>

                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>École concernée:</strong> École Primaire Publique Akpakpa
                    </div>

                    <div class="content">
                        <p class="lead">Nous signalons un manque critique de manuels scolaires pour la classe de CE2 dans notre établissement.</p>

                        <h5 class="mt-4 mb-3">Description du problème</h5>
                        <p>Depuis le début de l'année scolaire, nos élèves de CE2 ne disposent pas de manuels suffisants pour suivre correctement les cours. Sur une classe de 45 élèves, nous n'avons que 15 manuels de mathématiques et 12 manuels de français.</p>

                        <p>Cette situation affecte gravement la qualité de l'enseignement et les résultats des élèves.</p>

                        <h5 class="mt-4 mb-3">Impact</h5>
                        <ul>
                            <li>45 élèves concernés</li>
                            <li>Baisse des résultats scolaires</li>
                            <li>Difficulté pour les enseignants à dispenser les cours</li>
                            <li>Plaintes des parents d'élèves</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Actions & Suivi --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Traitement et résolution</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Actions entreprises</label>
                            <textarea class="form-control" name="actions" rows="4" placeholder="Décrivez les actions entreprises pour résoudre cette préoccupation..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Statut</label>
                                <select class="form-select" name="status">
                                    <option value="pending">En attente</option>
                                    <option value="processing">En traitement</option>
                                    <option value="resolved">Résolue</option>
                                    <option value="closed">Fermée</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de résolution prévue</label>
                                <input type="date" class="form-control" name="resolution_date">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Enregistrer le suivi
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1"><i class="fas fa-user me-2"></i>Signalé par</small>
                        <strong>Marie KOSSOU</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1"><i class="fas fa-school me-2"></i>École</small>
                        <strong>École Primaire Publique Akpakpa</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1"><i class="fas fa-envelope me-2"></i>Email</small>
                        <strong>m.kossou@memp.bj</strong>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1"><i class="fas fa-phone me-2"></i>Téléphone</small>
                        <strong>+229 97 XX XX XX</strong>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Actions rapides</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-info btn-sm">
                            <i class="fas fa-tasks me-2"></i>Prendre en charge
                        </button>
                        <button class="btn btn-success btn-sm">
                            <i class="fas fa-check me-2"></i>Marquer comme résolue
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="fas fa-exclamation me-2"></i>Signaler urgent
                        </button>
                        <hr>
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-envelope me-2"></i>Envoyer email
                        </button>
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-print me-2"></i>Imprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
