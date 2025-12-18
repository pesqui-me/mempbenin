<x-admin-layout>
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Rôles & Permissions</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Paramètres</li>
                        <li class="breadcrumb-item active">Rôles</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newRoleModal">
                    <i class="fas fa-plus me-2"></i>Nouveau Rôle
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Administrateur --}}
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-0">Administrateur</h5>
                            <small class="text-muted">5 utilisateurs</small>
                        </div>
                        <span class="badge bg-danger">Système</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">Accès complet à toutes les fonctionnalités du système.</p>
                    
                    <h6 class="mb-3">Permissions</h6>
                    <div class="permissions-grid">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label">Gérer les contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label">Gérer les utilisateurs</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label">Gérer les paramètres</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label">Supprimer du contenu</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label">Gérer les médias</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label">Accès aux statistiques</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Rôle système non modifiable</small>
                </div>
            </div>
        </div>

        {{-- Éditeur --}}
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-0">Éditeur</h5>
                            <small class="text-muted">12 utilisateurs</small>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">Peut créer et gérer les contenus du site.</p>
                    
                    <h6 class="mb-3">Permissions</h6>
                    <div class="permissions-grid">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Créer des contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Modifier des contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Publier des contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Supprimer du contenu</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Gérer les médias</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Accès aux statistiques</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary">
                        <i class="fas fa-save me-1"></i>Enregistrer
                    </button>
                    <button class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash me-1"></i>Supprimer
                    </button>
                </div>
            </div>
        </div>

        {{-- Modérateur --}}
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-0">Modérateur</h5>
                            <small class="text-muted">7 utilisateurs</small>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">Peut modérer et valider les contenus des usagers.</p>
                    
                    <h6 class="mb-3">Permissions</h6>
                    <div class="permissions-grid">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Gérer les suggestions</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Gérer les préoccupations</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Gérer les audiences</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Modifier des contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Supprimer du contenu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Gérer les médias</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary">
                        <i class="fas fa-save me-1"></i>Enregistrer
                    </button>
                    <button class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash me-1"></i>Supprimer
                    </button>
                </div>
            </div>
        </div>

        {{-- Lecteur --}}
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-0">Lecteur</h5>
                            <small class="text-muted">0 utilisateurs</small>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">Accès en lecture seule au backoffice.</p>
                    
                    <h6 class="mb-3">Permissions</h6>
                    <div class="permissions-grid">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Voir les contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Accès aux statistiques</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Créer des contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Modifier des contenus</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Supprimer du contenu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Gérer les médias</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary">
                        <i class="fas fa-save me-1"></i>Enregistrer
                    </button>
                    <button class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash me-1"></i>Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- New Role Modal --}}
    <div class="modal fade" id="newRoleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Créer un nouveau rôle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nom du rôle</label>
                            <input type="text" class="form-control" placeholder="Ex: Correcteur">
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Description du rôle..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Créer le rôle</button>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
