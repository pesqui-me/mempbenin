<x-admin-layout>
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Mode Maintenance</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Paramètres</li>
                        <li class="breadcrumb-item active">Maintenance</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">État du site</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-success mb-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle fa-2x me-3"></i>
                            <div>
                                <h5 class="alert-heading mb-1">Le site est actuellement en ligne</h5>
                                <p class="mb-0">Tous les utilisateurs peuvent accéder au site normalement.</p>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('admin.administration.parametres.maintenance.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="maintenance_mode" id="maintenanceMode">
                                <label class="form-check-label" for="maintenanceMode">
                                    <strong>Activer le mode maintenance</strong>
                                </label>
                            </div>
                            <small class="text-muted">Le site affichera une page de maintenance pour tous les visiteurs (sauf administrateurs)</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message de maintenance</label>
                            <textarea class="form-control" name="maintenance_message" rows="4" placeholder="Rédigez le message qui sera affiché aux visiteurs...">Nous effectuons actuellement une maintenance technique pour améliorer nos services. Le site sera de nouveau accessible très prochainement. Merci de votre compréhension.</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de retour prévue</label>
                                <input type="datetime-local" class="form-control" name="expected_return">
                                <small class="text-muted">Optionnel - Afficher une date de retour estimée</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Adresses IP autorisées</label>
                                <input type="text" class="form-control" name="allowed_ips" placeholder="192.168.1.1, 192.168.1.2">
                                <small class="text-muted">Séparer par des virgules</small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="retry_after" id="retryAfter" value="1">
                                <label class="form-check-label" for="retryAfter">
                                    Envoyer un header Retry-After (recommandé pour le SEO)
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Enregistrer les paramètres
                        </button>
                    </form>
                </div>
            </div>

            {{-- Aperçu --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Aperçu de la page de maintenance</h5>
                </div>
                <div class="card-body">
                    <div class="maintenance-preview p-5 text-center bg-light rounded">
                        <div class="mb-4">
                            <i class="fas fa-tools fa-4x text-warning"></i>
                        </div>
                        <h2 class="mb-3">Site en maintenance</h2>
                        <p class="lead mb-4">Nous effectuons actuellement une maintenance technique pour améliorer nos services.</p>
                        <p class="text-muted">Le site sera de nouveau accessible très prochainement.</p>
                        <p class="text-muted mt-4"><small>Merci de votre compréhension.</small></p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-sm btn-outline-primary" target="_blank">
                            <i class="fas fa-external-link-alt me-2"></i>Voir en pleine page
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            {{-- Informations --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Statut actuel</small>
                        <span class="badge bg-success">En ligne</span>
                    </div>

                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Dernière maintenance</small>
                        <strong>Jamais</strong>
                    </div>

                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Durée moyenne</small>
                        <strong>-</strong>
                    </div>

                    <div class="mb-0">
                        <small class="text-muted d-block mb-1">Uptime</small>
                        <strong>99.9%</strong>
                    </div>
                </div>
            </div>

            {{-- Conseils --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Conseils</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info mb-0">
                        <h6 class="alert-heading">Bonnes pratiques</h6>
                        <ul class="mb-0 ps-3">
                            <li>Planifiez les maintenances en dehors des heures de pointe</li>
                            <li>Informez les utilisateurs à l'avance</li>
                            <li>Testez en environnement de développement d'abord</li>
                            <li>Gardez des sauvegardes récentes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
