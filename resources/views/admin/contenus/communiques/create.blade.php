<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Nouveau Communiqué</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.communiques.index') }}">Communiqués</a></li>
                        <li class="breadcrumb-item active">Nouveau</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.communiques.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contenus.communiques.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations du communiqué</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Titre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required placeholder="Ex: Report de la date des examens">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Numéro de référence</label>
                            <input type="text" class="form-control" name="reference" placeholder="Ex: COM/MEMP/2024/045">
                            <small class="text-muted">Optionnel - Numéro d'identification du communiqué</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Résumé</label>
                            <textarea class="form-control" name="summary" rows="2" placeholder="Bref résumé du communiqué"></textarea>
                            <small class="text-muted">Affiché dans les listes et aperçus</small>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Contenu complet <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="content" rows="12" required placeholder="Rédigez le contenu du communiqué..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Documents joints</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Document PDF</label>
                            <input type="file" class="form-control" name="pdf_file" accept=".pdf">
                            <small class="text-muted">Optionnel - Document officiel en PDF</small>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Images/Fichiers complémentaires</label>
                            <input type="file" class="form-control" name="attachments[]" multiple>
                            <small class="text-muted">Plusieurs fichiers peuvent être joints</small>
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
                            <label class="form-label">Type <span class="text-danger">*</span></label>
                            <select class="form-select" name="type" required>
                                <option value="">Sélectionner...</option>
                                <option value="communique">Communiqué</option>
                                <option value="annonce">Annonce</option>
                                <option value="avis">Avis</option>
                                <option value="note">Note de service</option>
                                <option value="convocation">Convocation</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Priorité <span class="text-danger">*</span></label>
                            <select class="form-select" name="priority" required>
                                <option value="normal" selected>Normale</option>
                                <option value="high">Élevée</option>
                                <option value="urgent">Urgent</option>
                            </select>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Destinataires</label>
                            <select class="form-select" name="target_audience">
                                <option value="tous" selected>Grand public</option>
                                <option value="enseignants">Enseignants</option>
                                <option value="directeurs">Directeurs d'école</option>
                                <option value="parents">Parents</option>
                                <option value="eleves">Élèves</option>
                                <option value="partenaires">Partenaires</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publication</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Date de publication</label>
                            <input type="date" class="form-control" name="published_date">
                            <small class="text-muted">Laisser vide pour aujourd'hui</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date d'expiration</label>
                            <input type="date" class="form-control" name="expiry_date">
                            <small class="text-muted">Optionnel - Le communiqué sera archivé après cette date</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select" name="status">
                                <option value="draft">Brouillon</option>
                                <option value="published" selected>Publié</option>
                                <option value="archived">Archivé</option>
                            </select>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="send_notification" id="notification" checked>
                            <label class="form-check-label" for="notification">
                                Envoyer des notifications
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pin_to_top" id="pinned">
                            <label class="form-check-label" for="pinned">
                                Épingler en haut
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
                            <a href="{{ route('admin.contenus.communiques.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
