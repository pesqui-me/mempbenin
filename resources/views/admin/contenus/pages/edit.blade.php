<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Modifier la Page</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.pages.index') }}">Pages</a></li>
                        <li class="breadcrumb-item active">Modifier</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.pages.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contenus.pages.update', $slug ?? 'ministere') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations de la page</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Titre de la page <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="Le Ministère" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Slug (URL)</label>
                            <div class="input-group">
                                <span class="input-group-text">/</span>
                                <input type="text" class="form-control" name="slug" value="ministere" readonly>
                            </div>
                            <small class="text-muted">L'URL de la page (non modifiable)</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description courte</label>
                            <textarea class="form-control" name="excerpt" rows="2">Présentation du Ministère des Enseignements Maternel et Primaire</textarea>
                            <small class="text-muted">Utilisé pour le SEO et les aperçus</small>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Contenu complet <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="content" rows="15" required>Le Ministère des Enseignements Maternel et Primaire (MEMP) est chargé de la mise en œuvre et du suivi de la politique du Gouvernement en matière d'enseignement maternel et primaire...

## Missions

Le MEMP a pour missions principales:
- L'élaboration et la mise en œuvre de la politique nationale en matière d'enseignement maternel et primaire
- La gestion des personnels enseignants et administratifs
- La construction et l'équipement des infrastructures scolaires
- L'organisation des examens et concours

## Attributions

Dans le cadre de ses missions, le Ministère:
- Assure la tutelle des établissements d'enseignement maternel et primaire publics et privés
- Élabore les programmes d'enseignement et veille à leur application
- Garantit l'accès à une éducation de qualité pour tous les enfants

## Organisation

Le ministère est structuré en plusieurs directions techniques et services centraux qui coordonnent l'action sur l'ensemble du territoire national.</textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Médias et documents</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Image principale</label>
                            <div class="mb-2">
                                <img src="https://via.placeholder.com/600x300" alt="Image" class="img-fluid rounded" style="max-height: 200px;">
                            </div>
                            <input type="file" class="form-control" name="featured_image" accept="image/*">
                            <small class="text-muted">Recommandé: 1200x600px, JPG ou PNG</small>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Documents attachés</label>
                            <input type="file" class="form-control" name="attachments[]" multiple>
                            <small class="text-muted">Brochures, rapports, fichiers PDF</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
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
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dernière modification</label>
                            <input type="text" class="form-control" value="12 Jan 2024, 15:30" readonly>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="show_in_menu" id="showInMenu" checked>
                            <label class="form-check-label" for="showInMenu">
                                Afficher dans le menu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">SEO</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Meta titre</label>
                            <input type="text" class="form-control" name="meta_title" value="Le Ministère - MEMP Bénin">
                            <small class="text-muted">60 caractères max</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meta description</label>
                            <textarea class="form-control" name="meta_description" rows="3">Découvrez le Ministère des Enseignements Maternel et Primaire du Bénin</textarea>
                            <small class="text-muted">160 caractères max</small>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Mots-clés</label>
                            <input type="text" class="form-control" name="keywords" value="ministère, éducation, bénin, enseignement">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                            <a href="{{ route('admin.contenus.pages.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                            <hr>
                            <a href="#" class="btn btn-outline-info btn-sm" target="_blank">
                                <i class="fas fa-eye me-2"></i>Prévisualiser
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
