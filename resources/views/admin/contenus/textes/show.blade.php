<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Détails du Texte Législatif</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contenus.textes.index') }}">Textes</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.contenus.textes.edit', 1) }}" class="btn btn-primary">
                        <i class="fas fa-edit me-2"></i>Modifier
                    </a>
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fas fa-trash me-2"></i>Supprimer
                    </button>
                    <a href="{{ route('admin.contenus.textes.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Retour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Main Content --}}
        <div class="col-lg-8">
            {{-- Document Info --}}
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="badge bg-primary me-2">Loi</span>
                            <span class="badge bg-success">Publié</span>
                        </div>
                        <div class="text-muted small">
                            <i class="fas fa-download me-1"></i> 142 téléchargements
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-3">Loi portant orientation de l'éducation nationale</h2>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <small class="text-muted d-block mb-1">Référence</small>
                                <strong class="h5 text-primary">N°2003-17</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <small class="text-muted d-block mb-1">Date de signature</small>
                                <strong>11 Novembre 2003</strong>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mb-4">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Résumé :</strong> Cette loi définit les objectifs et principes fondamentaux de l'éducation nationale au Bénin et établit les orientations stratégiques pour le développement du système éducatif.
                    </div>

                    <div class="content">
                        <h4 class="mb-3">Contenu du texte</h4>
                        <p><strong>Article 1er :</strong> La présente loi fixe les objectifs et les principes de l'éducation nationale en République du Bénin.</p>

                        <p><strong>Article 2 :</strong> L'éducation est une priorité nationale. Elle vise à former des citoyens responsables, capables de contribuer au développement économique, social et culturel du pays.</p>

                        <h5 class="mt-4 mb-3">Chapitre I : Dispositions générales</h5>
                        <p>L'éducation nationale comprend l'enseignement maternel, primaire, secondaire et supérieur. Elle englobe également la formation professionnelle et l'alphabétisation.</p>

                        <h5 class="mt-4 mb-3">Chapitre II : Objectifs de l'éducation</h5>
                        <ul>
                            <li>Assurer une éducation de qualité pour tous</li>
                            <li>Promouvoir les valeurs de citoyenneté et de démocratie</li>
                            <li>Développer les compétences scientifiques et techniques</li>
                            <li>Préserver et valoriser le patrimoine culturel national</li>
                        </ul>

                        <p class="text-muted mt-4"><em>Pour consulter le texte complet, veuillez télécharger le document PDF ci-dessous.</em></p>
                    </div>

                    <div class="mt-4 p-4 bg-light rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="fas fa-file-pdf fa-3x text-danger me-3"></i>
                                <div class="d-inline-block">
                                    <h6 class="mb-1">Document officiel complet</h6>
                                    <small class="text-muted">loi_2003-17_orientation_education.pdf (2.4 MB)</small>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-danger">
                                    <i class="fas fa-download me-2"></i>Télécharger PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div>
                        <strong>Mots-clés :</strong>
                        <span class="badge bg-light text-dark me-1">éducation</span>
                        <span class="badge bg-light text-dark me-1">loi</span>
                        <span class="badge bg-light text-dark me-1">orientation</span>
                        <span class="badge bg-light text-dark">système éducatif</span>
                    </div>
                </div>
            </div>

            {{-- Related Texts --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Textes connexes</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Décret d'application de la loi 2003-17</h6>
                                <small class="text-muted">2004</small>
                            </div>
                            <small class="text-muted">Décret • N°2004-123</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Arrêté portant organisation des structures</h6>
                                <small class="text-muted">2004</small>
                            </div>
                            <small class="text-muted">Arrêté • N°2004-089</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            {{-- Quick Stats --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistiques</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-download me-2"></i>Téléchargements</span>
                        <strong>142</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"><i class="fas fa-eye me-2"></i>Consultations</span>
                        <strong>387</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted"><i class="fas fa-share-alt me-2"></i>Partages</span>
                        <strong>24</strong>
                    </div>
                </div>
            </div>

            {{-- Classification --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Classification</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Type de texte</small>
                        <span class="badge bg-primary">Loi</span>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Domaine</small>
                        <strong>Éducation générale</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Statut</small>
                        <span class="badge bg-success">Publié</span>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1">Texte important</small>
                        <span class="badge bg-warning text-dark">Oui</span>
                    </div>
                </div>
            </div>

            {{-- Publication Info --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Ajouté par</small>
                        <strong>Admin MEMP</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Date d'ajout</small>
                        <strong>12 Jan 2024, 15:30</strong>
                    </div>
                    <div class="mb-0">
                        <small class="text-muted d-block mb-1">Dernière modification</small>
                        <strong>15 Jan 2024, 10:20</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
