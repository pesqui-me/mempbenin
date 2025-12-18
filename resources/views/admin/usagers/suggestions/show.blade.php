<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Détails de la Suggestion</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.usagers.suggestions.index') }}">Suggestions</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <a href="{{ route('admin.usagers.suggestions.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="badge bg-info me-2">Infrastructure</span>
                            <span class="badge bg-warning">Nouvelle</span>
                        </div>
                        <small class="text-muted">Reçue le 18 Mai 2024</small>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="mb-4">Améliorer les cantines scolaires avec des produits locaux</h4>

                    <div class="content">
                        <p class="lead">Je propose d'améliorer la qualité des repas dans les cantines scolaires en privilégiant l'utilisation de produits locaux et de saison.</p>

                        <h5 class="mt-4 mb-3">Description détaillée</h5>
                        <p>Cette suggestion vise à:</p>
                        <ul>
                            <li>Soutenir l'agriculture locale en achetant directement auprès des producteurs</li>
                            <li>Améliorer la qualité nutritionnelle des repas avec des produits frais</li>
                            <li>Réduire les coûts de transport et l'empreinte carbone</li>
                            <li>Sensibiliser les enfants à une alimentation saine et durable</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Bénéfices attendus</h5>
                        <p>Cette initiative pourrait bénéficier à plus de 500 000 élèves à travers le pays, tout en créant des opportunités économiques pour les agriculteurs locaux.</p>
                    </div>
                </div>
            </div>

            {{-- Réponse admin --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Réponse de l'administration</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Votre réponse</label>
                            <textarea class="form-control" name="response" rows="6" placeholder="Rédigez votre réponse à l'auteur de la suggestion..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select" name="status">
                                <option value="new">Nouvelle</option>
                                <option value="reviewing">En cours d'étude</option>
                                <option value="accepted">Acceptée</option>
                                <option value="implemented">Mise en œuvre</option>
                                <option value="rejected">Rejetée</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>Envoyer la réponse
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Auteur</h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <div class="avatar-circle-lg mx-auto mb-2">SM</div>
                        <h6 class="mb-0">Sophie MARTIN</h6>
                        <p class="text-muted small mb-0">Enseignante</p>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <small class="text-muted d-block"><i class="fas fa-envelope me-2"></i>Email</small>
                        <strong>s.martin@email.com</strong>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block"><i class="fas fa-phone me-2"></i>Téléphone</small>
                        <strong>+229 96 XX XX XX</strong>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Actions rapides</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-sm">
                            <i class="fas fa-check me-2"></i>Accepter
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="fas fa-clock me-2"></i>En cours d'étude
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="fas fa-times me-2"></i>Rejeter
                        </button>
                        <hr>
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-envelope me-2"></i>Envoyer email
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .avatar-circle-lg {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #102c57;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 24px;
        }
    </style>

</x-admin-layout>
