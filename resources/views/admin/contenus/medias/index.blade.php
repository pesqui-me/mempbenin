<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Bibliothèque Média</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Contenus</li>
                        <li class="breadcrumb-item active">Médias</li>
                    </ol>
                </nav>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="fas fa-upload me-2"></i>Téléverser des fichiers
                </button>
            </div>
        </div>
    </div>

    {{-- Stats Cards --}}
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-primary bg-opacity-10 text-primary me-3">
                            <i class="fas fa-photo-video"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">487</h3>
                            <p class="stats-label mb-0">Total fichiers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-success bg-opacity-10 text-success me-3">
                            <i class="fas fa-image"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">342</h3>
                            <p class="stats-label mb-0">Images</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-info bg-opacity-10 text-info me-3">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">89</h3>
                            <p class="stats-label mb-0">Documents</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-warning bg-opacity-10 text-warning me-3">
                            <i class="fas fa-video"></i>
                        </div>
                        <div>
                            <h3 class="stats-value mb-0">56</h3>
                            <p class="stats-label mb-0">Vidéos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Filters and View Options --}}
    <div class="card mb-4">
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Rechercher..." id="searchMedia">
                    </div>
                </div>
                <div class="col-md-2">
                    <select class="form-select" id="filterType">
                        <option value="">Tous les types</option>
                        <option value="image">Images</option>
                        <option value="video">Vidéos</option>
                        <option value="document">Documents</option>
                        <option value="audio">Audio</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select" id="filterDate">
                        <option value="">Toutes les dates</option>
                        <option value="today">Aujourd'hui</option>
                        <option value="week">Cette semaine</option>
                        <option value="month">Ce mois</option>
                        <option value="year">Cette année</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="sortBy">
                        <option value="date_desc">Plus récent en premier</option>
                        <option value="date_asc">Plus ancien en premier</option>
                        <option value="name_asc">Nom (A-Z)</option>
                        <option value="name_desc">Nom (Z-A)</option>
                        <option value="size_desc">Taille (+ grand)</option>
                        <option value="size_asc">Taille (+ petit)</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <div class="btn-group w-100">
                        <button type="button" class="btn btn-outline-secondary active">
                            <i class="fas fa-th"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Media Grid --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-3">
                {{-- Image Item --}}
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="media-item">
                        <div class="media-thumbnail">
                            <img src="https://via.placeholder.com/300x200" alt="Image" class="img-fluid">
                            <div class="media-overlay">
                                <div class="media-actions">
                                    <button class="btn btn-sm btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light" title="Télécharger">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="media-checkbox">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="media-info">
                            <p class="media-name mb-1">rentre_scolaire_2024.jpg</p>
                            <small class="text-muted">245 KB • 15 Mai 2024</small>
                        </div>
                    </div>
                </div>

                {{-- PDF Item --}}
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="media-item">
                        <div class="media-thumbnail media-document">
                            <div class="media-icon">
                                <i class="fas fa-file-pdf fa-3x text-danger"></i>
                            </div>
                            <div class="media-overlay">
                                <div class="media-actions">
                                    <button class="btn btn-sm btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light" title="Télécharger">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="media-checkbox">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="media-info">
                            <p class="media-name mb-1">rapport_annuel_2024.pdf</p>
                            <small class="text-muted">1.2 MB • 12 Mai 2024</small>
                        </div>
                    </div>
                </div>

                {{-- Video Item --}}
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="media-item">
                        <div class="media-thumbnail media-video">
                            <img src="https://via.placeholder.com/300x200" alt="Video" class="img-fluid">
                            <div class="media-play-icon">
                                <i class="fas fa-play-circle fa-3x"></i>
                            </div>
                            <div class="media-overlay">
                                <div class="media-actions">
                                    <button class="btn btn-sm btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light" title="Télécharger">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="media-checkbox">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="media-info">
                            <p class="media-name mb-1">ceremonie_cep_2024.mp4</p>
                            <small class="text-muted">45 MB • 08 Mai 2024</small>
                        </div>
                    </div>
                </div>

                {{-- Word Document --}}
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="media-item">
                        <div class="media-thumbnail media-document">
                            <div class="media-icon">
                                <i class="fas fa-file-word fa-3x text-primary"></i>
                            </div>
                            <div class="media-overlay">
                                <div class="media-actions">
                                    <button class="btn btn-sm btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light" title="Télécharger">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="media-checkbox">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="media-info">
                            <p class="media-name mb-1">convocation_reunion.docx</p>
                            <small class="text-muted">124 KB • 05 Mai 2024</small>
                        </div>
                    </div>
                </div>

                {{-- Excel Document --}}
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="media-item">
                        <div class="media-thumbnail media-document">
                            <div class="media-icon">
                                <i class="fas fa-file-excel fa-3x text-success"></i>
                            </div>
                            <div class="media-overlay">
                                <div class="media-actions">
                                    <button class="btn btn-sm btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light" title="Télécharger">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="media-checkbox">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="media-info">
                            <p class="media-name mb-1">statistiques_eleves.xlsx</p>
                            <small class="text-muted">856 KB • 02 Mai 2024</small>
                        </div>
                    </div>
                </div>

                {{-- More images... --}}
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="media-item">
                        <div class="media-thumbnail">
                            <img src="https://via.placeholder.com/300x200/3498db" alt="Image" class="img-fluid">
                            <div class="media-overlay">
                                <div class="media-actions">
                                    <button class="btn btn-sm btn-light" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light" title="Télécharger">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="media-checkbox">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="media-info">
                            <p class="media-name mb-1">ecole_primaire_porto_novo.jpg</p>
                            <small class="text-muted">512 KB • 28 Avr 2024</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pagination --}}
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Affichage de 1 à 6 sur 487 fichiers
                </div>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><span class="page-link">Précédent</span></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    {{-- Upload Modal --}}
    <div class="modal fade" id="uploadModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Téléverser des fichiers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="upload-area border-2 border-dashed rounded p-5 text-center mb-3" style="border-color: #dee2e6;">
                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                        <h5>Glissez-déposez vos fichiers ici</h5>
                        <p class="text-muted">ou cliquez pour sélectionner des fichiers</p>
                        <input type="file" class="d-none" id="fileInput" multiple>
                        <button type="button" class="btn btn-primary" onclick="document.getElementById('fileInput').click()">
                            <i class="fas fa-folder-open me-2"></i>Parcourir
                        </button>
                    </div>
                    <div class="alert alert-info">
                        <strong>Formats acceptés :</strong> Images (JPG, PNG, GIF, WebP), Documents (PDF, DOC, DOCX, XLS, XLSX), Vidéos (MP4, AVI, MOV)<br>
                        <strong>Taille maximale :</strong> 50 MB par fichier
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Téléverser</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .media-item {
            position: relative;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .media-item:hover {
            transform: translateY(-3px);
        }
        .media-thumbnail {
            position: relative;
            background: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 4/3;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .media-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .media-document {
            background: #f8f9fa;
        }
        .media-icon {
            opacity: 0.3;
        }
        .media-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .media-item:hover .media-overlay {
            opacity: 1;
        }
        .media-actions {
            display: flex;
            gap: 5px;
        }
        .media-checkbox {
            position: absolute;
            top: 8px;
            left: 8px;
            z-index: 10;
        }
        .media-play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            opacity: 0.8;
            pointer-events: none;
        }
        .media-info {
            padding: 8px 0;
        }
        .media-name {
            font-size: 13px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .upload-area {
            cursor: pointer;
            transition: all 0.3s;
        }
        .upload-area:hover {
            background: #f8f9fa;
            border-color: #102c57 !important;
        }
    </style>

</x-admin-layout>
