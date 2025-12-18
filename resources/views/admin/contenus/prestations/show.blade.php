<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Détails de la Prestation</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.prestations.index') }}">Prestations</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.contenus.prestations.edit', 1) }}" class="btn btn-primary">
                        <i class="fas fa-edit me-2"></i>Modifier
                    </a>
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fas fa-trash me-2"></i>Supprimer
                    </button>
                    <a href="{{ route('admin.contenus.prestations.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Retour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Main Content --}}
        <div class="col-lg-8">
            {{-- Service Info --}}
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="badge bg-primary me-2">Administrative</span>
                            <span class="badge bg-success">Active</span>
                        </div>
                        <div class="text-muted small">
                            <i class="fas fa-users me-1"></i> 142 demandes
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-3">Demande d'attestation de service</h2>

                    <div class="alert alert-info mb-4">
                        <i class="fas fa-info-circle me-2"></i>
                        Cette prestation permet aux enseignants en activité d'obtenir une attestation de service officielle délivrée par le ministère.
                    </div>

                    <div class="content mb-4">
                        <h5 class="mb-3">Description</h5>
                        <p>L'attestation de service est un document administratif qui certifie qu'un enseignant est en service actif au sein du Ministère des Enseignements Maternel et Primaire. Ce document est souvent requis pour diverses démarches administratives, bancaires ou personnelles.</p>

                        <p>Cette attestation mentionne les informations suivantes :</p>
                        <ul>
                            <li>Identité complète de l'enseignant</li>
                            <li>Matricule et grade</li>
                            <li>Établissement d'affectation</li>
                            <li>Date de prise de service</li>
                            <li>Situation administrative actuelle</li>
                        </ul>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <i class="fas fa-clock me-2"></i>Délai de traitement
                                    </h6>
                                    <h4 class="card-title text-primary mb-0">3-5 jours ouvrables</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <i class="fas fa-money-bill me-2"></i>Coût
                                    </h6>
                                    <h4 class="card-title text-success mb-0">Gratuit</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-3">Procédure à suivre</h5>
                    <ol class="mb-4">
                        <li class="mb-2">Remplir le formulaire de demande disponible en ligne ou au guichet</li>
                        <li class="mb-2">Rassembler les documents requis (voir liste ci-dessous)</li>
                        <li class="mb-2">Soumettre la demande au service des ressources humaines</li>
                        <li class="mb-2">Attendre la validation et la signature du document</li>
                        <li class="mb-2">Retirer l'attestation au guichet ou la recevoir par email</li>
                    </ol>

                    <h5 class="mb-3">Documents requis</h5>
                    <ul class="mb-4">
                        <li>Copie de la carte d'identité nationale ou passeport</li>
                        <li>Copie de la dernière décision d'affectation</li>
                        <li>Formulaire de demande dûment rempli et signé</li>
                        <li>Certificat de prise de service (pour les nouveaux enseignants)</li>
                    </ul>

                    <h5 class="mb-3">Conditions d'éligibilité</h5>
                    <ul>
                        <li>Être enseignant titulaire ou contractuel en activité</li>
                        <li>Avoir un matricule actif dans le système</li>
                        <li>Ne pas être en situation de suspension ou de sanction disciplinaire</li>
                    </ul>
                </div>
                <div class="card-footer bg-light">
                    <h6 class="mb-2"><i class="fas fa-phone me-2"></i>Contact</h6>
                    <p class="mb-1"><strong>Service des Ressources Humaines</strong></p>
                    <p class="mb-0 text-muted">
                        Tél: +229 21 30 XX XX | Email: rh@memp.bj<br>
                        Horaires: Lundi - Vendredi, 8h00 - 17h00
                    </p>
                </div>
            </div>

            {{-- FAQ --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Questions fréquentes</h5>
                </div>
                <div class="card-body">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Combien de temps l'attestation est-elle valide ?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    L'attestation de service est généralement valide pour 3 mois à compter de sa date de délivrance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Puis-je faire la demande en ligne ?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Oui, vous pouvez soumettre votre demande via le portail en ligne et recevoir votre attestation par email.
                                </div>
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
                        <span class="text-muted"><i class="fas fa-users me-2"></i>Demandes totales</span>
                        <strong>142</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-check-circle me-2"></i>Traitées</span>
                        <strong>128</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-hourglass-half me-2"></i>En cours</span>
                        <strong>14</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted"><i class="fas fa-star me-2"></i>Satisfaction</span>
                        <strong>4.8/5</strong>
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
                        <small class="text-muted d-block mb-1">Catégorie</small>
                        <span class="badge bg-primary">Administrative</span>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Public cible</small>
                        <strong>Enseignants</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Statut</small>
                        <span class="badge bg-success">Active</span>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Disponibilité en ligne</small>
                        <span class="badge bg-info">Oui</span>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1">Prestation prioritaire</small>
                        <span class="badge bg-warning text-dark">Oui</span>
                    </div>
                </div>
            </div>

            {{-- Quick Actions --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Actions rapides</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-eye me-2"></i>Voir les demandes
                        </a>
                        <a href="#" class="btn btn-outline-info btn-sm">
                            <i class="fas fa-download me-2"></i>Télécharger formulaire
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-chart-bar me-2"></i>Voir statistiques
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
