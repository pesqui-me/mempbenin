<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Modifier le Poste</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.organigramme.index') }}">Organigramme</a></li>
                        <li class="breadcrumb-item active">Modifier</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.contenus.organigramme.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contenus.organigramme.update', 1) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations du poste</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Titre du poste <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="position_title" value="Ministre" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Niveau hiérarchique <span class="text-danger">*</span></label>
                                <select class="form-select" name="hierarchy_level" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="1" selected>Niveau 1 - Direction générale</option>
                                    <option value="2">Niveau 2 - Cabinet/Secrétariat</option>
                                    <option value="3">Niveau 3 - Directions</option>
                                    <option value="4">Niveau 4 - Services</option>
                                    <option value="5">Niveau 5 - Unités</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Direction/Service rattaché</label>
                            <input type="text" class="form-control" name="department" value="Cabinet du Ministre">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Poste supérieur hiérarchique</label>
                            <select class="form-select" name="reports_to">
                                <option value="" selected>Aucun (poste de niveau 1)</option>
                                <option value="1">Ministre</option>
                                <option value="2">Directeur de Cabinet</option>
                                <option value="3">Secrétaire Général</option>
                            </select>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Description du poste</label>
                            <textarea class="form-control" name="description" rows="4">Responsable de la direction et de la coordination de toutes les activités du Ministère des Enseignements Maternel et Primaire.</textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations du titulaire</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom complet</label>
                                <input type="text" class="form-control" name="holder_name" value="Salimane KARIMOU">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="holder_email" value="ministre@memp.bj">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text" class="form-control" name="holder_phone" value="+229 21 30 XX XX">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de nomination</label>
                                <input type="date" class="form-control" name="appointed_date" value="2023-05-15">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Photo actuelle</label>
                            <div class="mb-2">
                                <img src="https://via.placeholder.com/100" alt="Photo" class="rounded" style="max-height: 100px;">
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="remove_photo" id="removePhoto">
                                <label class="form-check-label text-danger" for="removePhoto">
                                    Supprimer la photo actuelle
                                </label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Nouvelle photo</label>
                            <input type="file" class="form-control" name="holder_photo" accept="image/*">
                            <small class="text-muted">Format JPG, PNG. Taille max : 2 Mo</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Statut du poste</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Statut <span class="text-danger">*</span></label>
                            <select class="form-select" name="status" required>
                                <option value="occupied" selected>Occupé</option>
                                <option value="vacant">Vacant</option>
                                <option value="interim">Intérim</option>
                            </select>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_active" id="active" checked>
                            <label class="form-check-label" for="active">
                                Poste actif
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Affichage</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Icône du poste</label>
                            <select class="form-select" name="icon">
                                <option value="fa-user-tie" selected>👔 User Tie</option>
                                <option value="fa-user">👤 User</option>
                                <option value="fa-user-shield">🛡️ User Shield</option>
                                <option value="fa-school">🏫 School</option>
                                <option value="fa-clipboard-check">📋 Clipboard</option>
                                <option value="fa-users-cog">⚙️ Users Cog</option>
                                <option value="fa-chart-line">📈 Chart</option>
                            </select>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Couleur</label>
                            <select class="form-select" name="color">
                                <option value="primary" selected>Bleu</option>
                                <option value="success">Vert</option>
                                <option value="info">Cyan</option>
                                <option value="warning">Jaune</option>
                                <option value="danger">Rouge</option>
                                <option value="secondary">Gris</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Mettre à jour
                            </button>
                            <a href="{{ route('admin.contenus.organigramme.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
