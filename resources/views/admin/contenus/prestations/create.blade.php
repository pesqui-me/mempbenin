<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Nouvelle Prestation</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.prestations.index') }}">Prestations</a></li>
                        <li class="breadcrumb-item active">Nouvelle</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.prestations.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contenus.prestations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations de base</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Titre de la prestation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required placeholder="Ex: Demande d'attestation de service">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description courte</label>
                            <textarea class="form-control" name="excerpt" rows="2" placeholder="Brève description de la prestation"></textarea>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Description détaillée <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" rows="8" required placeholder="Description complète de la prestation, son objectif et son utilité..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Procédure et documents</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Procédure à suivre</label>
                            <textarea class="form-control" name="procedure" rows="6" placeholder="Étapes à suivre pour bénéficier de cette prestation..."></textarea>
                            <small class="text-muted">Décrivez les étapes nécessaires pour effectuer la demande</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Documents requis</label>
                            <textarea class="form-control" name="required_documents" rows="4" placeholder="Liste des documents nécessaires pour la demande..."></textarea>
                            <small class="text-muted">Un document par ligne</small>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Conditions d'éligibilité</label>
                            <textarea class="form-control" name="conditions" rows="3" placeholder="Conditions requises pour bénéficier de cette prestation..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations complémentaires</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Coût</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="cost" placeholder="0">
                                    <span class="input-group-text">FCFA</span>
                                </div>
                                <small class="text-muted">Laisser 0 si gratuit</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Délai de traitement</label>
                                <input type="text" class="form-control" name="processing_time" placeholder="Ex: 3-5 jours">
                            </div>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Contact/Service responsable</label>
                            <textarea class="form-control" name="contact_info" rows="3" placeholder="Informations de contact du service responsable de cette prestation..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Classification</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Catégorie <span class="text-danger">*</span></label>
                            <select class="form-select" name="category" required>
                                <option value="">Sélectionner...</option>
                                <option value="administrative">Administrative</option>
                                <option value="pedagogique">Pédagogique</option>
                                <option value="technique">Technique</option>
                                <option value="financiere">Financière</option>
                                <option value="juridique">Juridique</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Public cible</label>
                            <select class="form-select" name="target_audience">
                                <option value="">Sélectionner...</option>
                                <option value="enseignants">Enseignants</option>
                                <option value="parents">Parents</option>
                                <option value="eleves">Élèves</option>
                                <option value="directeurs">Directeurs d'école</option>
                                <option value="partenaires">Partenaires</option>
                                <option value="tous">Tous</option>
                            </select>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Mots-clés</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Séparés par des virgules">
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Statut</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Statut de la prestation</label>
                            <select class="form-select" name="status">
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="suspended">Suspendue</option>
                            </select>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="featured">
                            <label class="form-check-label" for="featured">
                                Prestation prioritaire
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="online_available" id="online" checked>
                            <label class="form-check-label" for="online">
                                Disponible en ligne
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                            <a href="{{ route('admin.contenus.prestations.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
