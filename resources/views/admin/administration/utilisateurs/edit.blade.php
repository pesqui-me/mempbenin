<x-admin-layout>
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Modifier l'Utilisateur</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.administration.utilisateurs.index') }}">Utilisateurs</a></li>
                        <li class="breadcrumb-item active">Modifier</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.administration.utilisateurs.show', 1) }}" class="btn btn-outline-secondary">
                    <i class="fas fa-eye me-2"></i>Voir
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.administration.utilisateurs.update', 1) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations personnelles</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prénom</label>
                                <input type="text" class="form-control" name="first_name" value="Admin">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" name="last_name" value="MEMP">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="admin@memp.bj">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Téléphone</label>
                            <input type="text" class="form-control" name="phone" value="+229 21 30 XX XX">
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Fonction</label>
                            <input type="text" class="form-control" name="function" value="Administrateur système">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Changer le mot de passe</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nouveau mot de passe</label>
                            <input type="password" class="form-control" name="password">
                            <small class="text-muted">Laisser vide pour ne pas modifier</small>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Confirmer</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Rôle et permissions</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Rôle</label>
                            <select class="form-select" name="role">
                                <option value="admin" selected>Administrateur</option>
                                <option value="editor">Éditeur</option>
                                <option value="moderator">Modérateur</option>
                                <option value="viewer">Lecteur</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Statut</label>
                            <select class="form-select" name="status">
                                <option value="active" selected>Actif</option>
                                <option value="inactive">Inactif</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                            <a href="{{ route('admin.administration.utilisateurs.show', 1) }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-admin-layout>
