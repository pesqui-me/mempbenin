<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Modifier le Texte Législatif</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.textes.index') }}">Textes</a></li>
                        <li class="breadcrumb-item active">Modifier</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.textes.show', 1) }}" class="btn btn-outline-secondary">
                    <i class="fas fa-eye me-2"></i>Voir
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contenus.textes.update', 1) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations du texte</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Titre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="Loi portant orientation de l'éducation nationale" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Numéro/Référence <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="reference" value="N°2003-17" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de signature <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="signature_date" value="2003-11-11" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Résumé</label>
                            <textarea class="form-control" name="summary" rows="3">Cette loi définit les objectifs et principes fondamentaux de l'éducation nationale au Bénin.</textarea>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Contenu complet</label>
                            <textarea class="form-control" name="content" rows="10">Article 1er : La présente loi fixe les objectifs et les principes de l'éducation nationale en République du Bénin...</textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Document PDF</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info mb-3">
                            <i class="fas fa-file-pdf me-2"></i>
                            <strong>Document actuel :</strong> loi_2003-17_orientation_education.pdf (2.4 MB)
                            <div class="mt-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download me-1"></i>Télécharger
                                </a>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remove_pdf" id="removePdf">
                            <label class="form-check-label text-danger" for="removePdf">
                                Supprimer le document actuel
                            </label>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Remplacer par un nouveau PDF</label>
                            <input type="file" class="form-control" name="pdf_file" accept=".pdf">
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
                                <option value="loi" selected>Loi</option>
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
                                <option value="education" selected>Éducation générale</option>
                                <option value="examens">Examens et concours</option>
                                <option value="personnel">Personnel enseignant</option>
                                <option value="infrastructures">Infrastructures</option>
                                <option value="cantines">Cantines scolaires</option>
                            </select>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Mots-clés</label>
                            <input type="text" class="form-control" name="keywords" value="éducation, loi, orientation, système éducatif">
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
                            <input class="form-check-input" type="checkbox" name="is_featured" id="featured" checked>
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
                                <i class="fas fa-save me-2"></i>Mettre à jour
                            </button>
                            <a href="{{ route('admin.contenus.textes.show', 1) }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
