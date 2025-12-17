<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Nouvelle Publication</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.publications.index') }}">Publications</a></li>
                        <li class="breadcrumb-item active">Nouvelle Publication</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.publications.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contenus.publications.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            {{-- Main Content --}}
            <div class="col-lg-8">
                {{-- Basic Info --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations de base</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Titre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required placeholder="Entrez le titre de la publication">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Extrait</label>
                            <textarea class="form-control" name="excerpt" rows="3" placeholder="Court résumé de la publication (optionnel)"></textarea>
                            <small class="text-muted">L'extrait sera affiché dans les listes et aperçus</small>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Contenu <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="content" rows="12" required placeholder="Rédigez le contenu de votre publication..."></textarea>
                            <small class="text-muted">Utilisez l'éditeur pour formater votre texte</small>
                        </div>
                    </div>
                </div>

                {{-- Image --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image de couverture</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Télécharger une image</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                            <small class="text-muted">Formats acceptés : JPG, PNG, WebP. Taille max : 2 Mo. Dimensions recommandées : 1200x630px</small>
                        </div>
                        <div id="imagePreview" class="d-none">
                            <img src="" alt="Aperçu" class="img-fluid rounded" style="max-height: 300px;">
                        </div>
                    </div>
                </div>

                {{-- SEO --}}
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Référencement (SEO)</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" placeholder="Titre pour les moteurs de recherche">
                            <small class="text-muted">Laissez vide pour utiliser le titre de la publication</small>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_description" rows="2" placeholder="Description pour les moteurs de recherche"></textarea>
                            <small class="text-muted">160 caractères maximum recommandés</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">
                {{-- Publication Settings --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publication</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Statut <span class="text-danger">*</span></label>
                            <select class="form-select" name="status" required>
                                <option value="draft">Brouillon</option>
                                <option value="published">Publié</option>
                                <option value="archived">Archivé</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date de publication</label>
                            <input type="datetime-local" class="form-control" name="published_at">
                            <small class="text-muted">Laissez vide pour publication immédiate</small>
                        </div>

                        <div class="mb-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="featured" id="featured">
                                <label class="form-check-label" for="featured">
                                    Publication à la une
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="comments_enabled" id="comments" checked>
                                <label class="form-check-label" for="comments">
                                    Autoriser les commentaires
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Category --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Catégorie</h5>
                    </div>
                    <div class="card-body">
                        <select class="form-select" name="category_id" required>
                            <option value="">Sélectionner une catégorie</option>
                            <option value="1">Actualités</option>
                            <option value="2">Événements</option>
                            <option value="3">Annonces</option>
                            <option value="4">Communiqués</option>
                            <option value="5">Rapports</option>
                        </select>
                    </div>
                </div>

                {{-- Tags --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Étiquettes</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" name="tags" placeholder="Séparés par des virgules">
                        <small class="text-muted">Ex: éducation, CEP, enseignants</small>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                            <button type="submit" name="action" value="save_and_continue" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-right me-2"></i>Enregistrer et continuer
                            </button>
                            <a href="{{ route('admin.contenus.publications.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
