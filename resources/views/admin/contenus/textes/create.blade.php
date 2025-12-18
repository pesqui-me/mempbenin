<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Nouveau Texte Législatif</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.textes.index') }}">Textes</a></li>
                        <li class="breadcrumb-item active">Nouveau</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.textes.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contenus.textes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations du texte</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Titre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required placeholder="Ex: Loi portant...">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Numéro/Référence <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="reference" required placeholder="Ex: N°2024-045">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de signature <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="signature_date" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Résumé</label>
                            <textarea class="form-control" name="summary" rows="3" placeholder="Bref résumé du contenu du texte"></textarea>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Contenu complet</label>
                            <textarea class="form-control" name="content" rows="10" placeholder="Texte intégral du document législatif..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Document PDF</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-0">
                            <label class="form-label">Télécharger le PDF <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="pdf_file" accept=".pdf" required>
                            <small class="text-muted">Format PDF uniquement. Taille max : 10 Mo</small>
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
                            <label class="form-label">Type de texte <span class="text-danger">*</span></label>
                            <select class="form-select" name="type" required>
                                <option value="">Sélectionner...</option>
                                <option value="loi">Loi</option>
                                <option value="decret">Décret</option>
                                <option value="arrete">Arrêté</option>
                                <option value="circulaire">Circulaire</option>
                                <option value="ordonnance">Ordonnance</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Domaine</label>
                            <select class="form-select" name="domain">
                                <option value="">Sélectionner...</option>
                                <option value="education">Éducation générale</option>
                                <option value="examens">Examens et concours</option>
                                <option value="personnel">Personnel enseignant</option>
                                <option value="infrastructures">Infrastructures</option>
                                <option value="cantines">Cantines scolaires</option>
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
                        <h5 class="card-title mb-0">Publication</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select" name="status">
                                <option value="draft">Brouillon</option>
                                <option value="published" selected>Publié</option>
                                <option value="archived">Archivé</option>
                            </select>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="featured">
                            <label class="form-check-label" for="featured">
                                Texte important
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
                            <a href="{{ route('admin.contenus.textes.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
