<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Détails du Communiqué</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.communiques.index') }}">Communiqués</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.contenus.communiques.edit', 1) }}" class="btn btn-primary">
                        <i class="fas fa-edit me-2"></i>Modifier
                    </a>
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fas fa-trash me-2"></i>Supprimer
                    </button>
                    <a href="{{ route('admin.contenus.communiques.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Retour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Main Content --}}
        <div class="col-lg-8">
            {{-- Communiqué Content --}}
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="mb-2 mb-md-0">
                            <span class="badge bg-primary me-2">Communiqué</span>
                            <span class="badge bg-danger">Urgent</span>
                            <span class="badge bg-success">Publié</span>
                        </div>
                        <div class="text-muted small">
                            <i class="fas fa-eye me-1"></i> 1,245 vues
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted">
                            <i class="fas fa-hashtag me-1"></i>Référence: COM/MEMP/2024/045
                        </small>
                    </div>

                    <h2 class="card-title mb-3">Report de la date des examens du CEP</h2>

                    <div class="d-flex align-items-center text-muted mb-4">
                        <div class="small">
                            <i class="fas fa-calendar me-2"></i>Publié le 08 Mai 2024 à 14:30
                            <span class="mx-2">•</span>
                            <i class="fas fa-user me-2"></i>Par Admin MEMP
                        </div>
                    </div>

                    <div class="alert alert-warning border-warning mb-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-triangle fa-2x me-3"></i>
                            </div>
                            <div>
                                <h5 class="alert-heading">Communication urgente</h5>
                                <p class="mb-0"><strong>Résumé :</strong> Les examens du Certificat d'Études Primaires prévus pour le 15 juin 2024 sont reportés au 22 juin 2024.</p>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <p class="lead">Le Ministre des Enseignements Maternel et Primaire porte à la connaissance des élèves, parents, enseignants et de l'ensemble de la communauté éducative le report de la date des examens du Certificat d'Études Primaires (CEP).</p>

                        <h5 class="mt-4 mb-3">Nouvelle date des examens</h5>
                        <p>Les examens initialement prévus pour le <strong>15 juin 2024</strong> se dérouleront désormais le <strong>22 juin 2024</strong> dans tous les centres d'examen du territoire national.</p>

                        <h5 class="mt-4 mb-3">Motifs du report</h5>
                        <p>Cette décision a été prise suite à :</p>
                        <ul>
                            <li>Des contraintes logistiques liées à la distribution du matériel d'examen dans certaines régions</li>
                            <li>La nécessité de garantir l'équité et la transparence du processus d'évaluation</li>
                            <li>Des consultations avec les partenaires de l'éducation</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Dispositions pratiques</h5>
                        <p>Les candidats sont invités à :</p>
                        <ol>
                            <li>Poursuivre leurs révisions normalement</li>
                            <li>Se présenter dans leur centre d'examen habituel à la nouvelle date</li>
                            <li>Venir avec leur convocation et une pièce d'identité</li>
                        </ol>

                        <div class="alert alert-info mt-4">
                            <p class="mb-0"><i class="fas fa-info-circle me-2"></i><strong>Important :</strong> Aucun autre changement n'est prévu concernant le déroulement des épreuves et leur contenu reste inchangé.</p>
                        </div>

                        <p class="mt-4">Le Ministère présente ses excuses pour les désagréments occasionnés et remercie tous les acteurs de l'éducation pour leur compréhension.</p>

                        <p class="mt-4"><strong>Pour toute information complémentaire, veuillez contacter le service des examens au +229 21 30 XX XX.</strong></p>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted">
                                <i class="fas fa-clock me-2"></i>Dernière modification : 08 Mai 2024, 15:45
                            </small>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-share-alt me-1"></i>Partager
                            </button>
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-print me-1"></i>Imprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Attachments --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Documents joints</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-file-pdf fa-2x text-danger"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">Communiqué officiel CEP 2024</h6>
                                <small class="text-muted">PDF • 245 KB</small>
                            </div>
                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-file-image fa-2x text-info"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">Calendrier révisé des examens</h6>
                                <small class="text-muted">PNG • 1.2 MB</small>
                            </div>
                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            {{-- Stats --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistiques</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-eye me-2"></i>Vues</span>
                        <strong>1,245</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-download me-2"></i>Téléchargements</span>
                        <strong>387</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted"><i class="fas fa-share-alt me-2"></i>Partages</span>
                        <strong>52</strong>
                    </div>
                </div>
            </div>

            {{-- Info --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Référence</small>
                        <strong>COM/MEMP/2024/045</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Type</small>
                        <span class="badge bg-primary">Communiqué</span>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Priorité</small>
                        <span class="badge bg-danger">Urgent</span>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Destinataires</small>
                        <strong>Grand public</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Statut</small>
                        <span class="badge bg-success">Publié</span>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Date de publication</small>
                        <strong>08 Mai 2024</strong>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1">Date d'expiration</small>
                        <strong>22 Juin 2024</strong>
                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Actions rapides</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-bell me-2"></i>Renvoyer notifications
                        </button>
                        <button class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-thumbtack me-2"></i>Épingler/Désépingler
                        </button>
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-archive me-2"></i>Archiver
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
