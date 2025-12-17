<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="#">Documentation</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Médiathèque</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Médiathèque</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Photos, vidéos et supports visuels des activités du ministère</p>
    </div>

    {{-- Mediatheque Section --}}
    <div class="mediatheque-section">

        {{-- Categories Nav --}}
        <div class="categories-nav mb-4">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#photos" data-bs-toggle="pill">
                        <i class="far fa-images me-2"></i>Photos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#videos" data-bs-toggle="pill">
                        <i class="far fa-video me-2"></i>Vidéos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#albums" data-bs-toggle="pill">
                        <i class="far fa-folder me-2"></i>Albums
                    </a>
                </li>
            </ul>
        </div>

        {{-- Tabs Content --}}
        <div class="tab-content">

            {{-- Photos Tab --}}
            <div class="tab-pane fade show active" id="photos">
                <div class="row g-3">
                    {{-- Photo 1 --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="media-card">
                            <div class="media-thumbnail">
                                <img src="{{ asset('assets/guest/img/posts/1.jpeg') }}" alt="CEP 2025" class="img-fluid">
                                <div class="media-overlay">
                                    <a href="{{ asset('assets/guest/img/posts/1.jpeg') }}" class="media-zoom">
                                        <i class="far fa-search-plus fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Lancement des épreuves CEP 2025</h6>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i> 15 Janvier 2025
                                </small>
                            </div>
                        </div>
                    </div>

                    {{-- Photo 2 --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="media-card">
                            <div class="media-thumbnail">
                                <img src="{{ asset('assets/guest/img/posts/2.jpeg') }}" alt="Formation" class="img-fluid">
                                <div class="media-overlay">
                                    <a href="{{ asset('assets/guest/img/posts/2.jpeg') }}" class="media-zoom">
                                        <i class="far fa-search-plus fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Atelier de formation des enseignants</h6>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i> 10 Janvier 2025
                                </small>
                            </div>
                        </div>
                    </div>

                    {{-- Photo 3 --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="media-card">
                            <div class="media-thumbnail">
                                <img src="{{ asset('assets/guest/img/posts/3.jpeg') }}" alt="Visite" class="img-fluid">
                                <div class="media-overlay">
                                    <a href="{{ asset('assets/guest/img/posts/3.jpeg') }}" class="media-zoom">
                                        <i class="far fa-search-plus fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Visite du Ministre dans le Mono</h6>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i> 08 Janvier 2025
                                </small>
                            </div>
                        </div>
                    </div>

                    {{-- More photos... --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="media-card">
                            <div class="media-thumbnail">
                                <img src="{{ asset('assets/guest/img/posts/4.jpeg') }}" alt="Remise de diplômes" class="img-fluid">
                                <div class="media-overlay">
                                    <a href="{{ asset('assets/guest/img/posts/4.jpeg') }}" class="media-zoom">
                                        <i class="far fa-search-plus fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Remise de diplômes aux instituteurs</h6>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i> 05 Janvier 2025
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="media-card">
                            <div class="media-thumbnail">
                                <img src="{{ asset('assets/guest/img/posts/5.jpeg') }}" alt="Inauguration" class="img-fluid">
                                <div class="media-overlay">
                                    <a href="{{ asset('assets/guest/img/posts/5.jpeg') }}" class="media-zoom">
                                        <i class="far fa-search-plus fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Inauguration d'une nouvelle école</h6>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i> 20 Décembre 2024
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="media-card">
                            <div class="media-thumbnail">
                                <img src="{{ asset('assets/guest/img/posts/1.jpeg') }}" alt="Réunion" class="img-fluid">
                                <div class="media-overlay">
                                    <a href="{{ asset('assets/guest/img/posts/1.jpeg') }}" class="media-zoom">
                                        <i class="far fa-search-plus fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Réunion des directeurs d'école</h6>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i> 15 Décembre 2024
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Load More --}}
                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary">
                        <i class="far fa-sync me-2"></i>Charger plus de photos
                    </button>
                </div>
            </div>

            {{-- Videos Tab --}}
            <div class="tab-pane fade" id="videos">
                <div class="row g-3">
                    {{-- Video 1 --}}
                    <div class="col-md-6">
                        <div class="media-card">
                            <div class="media-thumbnail position-relative">
                                <img src="{{ asset('assets/guest/img/posts/1.jpeg') }}" alt="Vidéo" class="img-fluid">
                                <div class="video-play-icon">
                                    <i class="far fa-play-circle fa-4x text-white"></i>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Discours du Ministre - CEP 2025</h6>
                                <small class="text-muted">
                                    <i class="far fa-clock me-1"></i> 5:30 •
                                    <i class="far fa-calendar ms-2 me-1"></i> 15 Janvier 2025
                                </small>
                            </div>
                        </div>
                    </div>

                    {{-- Video 2 --}}
                    <div class="col-md-6">
                        <div class="media-card">
                            <div class="media-thumbnail position-relative">
                                <img src="{{ asset('assets/guest/img/posts/2.jpeg') }}" alt="Vidéo" class="img-fluid">
                                <div class="video-play-icon">
                                    <i class="far fa-play-circle fa-4x text-white"></i>
                                </div>
                            </div>
                            <div class="media-caption p-3">
                                <h6 class="mb-1">Reportage sur la formation continue</h6>
                                <small class="text-muted">
                                    <i class="far fa-clock me-1"></i> 8:15 •
                                    <i class="far fa-calendar ms-2 me-1"></i> 10 Janvier 2025
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Albums Tab --}}
            <div class="tab-pane fade" id="albums">
                <div class="row g-4">
                    {{-- Album 1 --}}
                    <div class="col-md-4">
                        <div class="album-card shadow-sm">
                            <div class="album-cover position-relative">
                                <img src="{{ asset('assets/guest/img/posts/1.jpeg') }}" alt="Album" class="img-fluid">
                                <div class="album-count">
                                    <span class="badge bg-dark"><i class="far fa-images me-1"></i> 45 photos</span>
                                </div>
                            </div>
                            <div class="album-info p-3">
                                <h5 class="mb-2">CEP 2025 - Session de Janvier</h5>
                                <p class="text-muted small mb-0">
                                    <i class="far fa-calendar me-1"></i> Janvier 2025
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Album 2 --}}
                    <div class="col-md-4">
                        <div class="album-card shadow-sm">
                            <div class="album-cover position-relative">
                                <img src="{{ asset('assets/guest/img/posts/2.jpeg') }}" alt="Album" class="img-fluid">
                                <div class="album-count">
                                    <span class="badge bg-dark"><i class="far fa-images me-1"></i> 32 photos</span>
                                </div>
                            </div>
                            <div class="album-info p-3">
                                <h5 class="mb-2">Formations des enseignants 2024</h5>
                                <p class="text-muted small mb-0">
                                    <i class="far fa-calendar me-1"></i> Décembre 2024
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Album 3 --}}
                    <div class="col-md-4">
                        <div class="album-card shadow-sm">
                            <div class="album-cover position-relative">
                                <img src="{{ asset('assets/guest/img/posts/3.jpeg') }}" alt="Album" class="img-fluid">
                                <div class="album-count">
                                    <span class="badge bg-dark"><i class="far fa-images me-1"></i> 28 photos</span>
                                </div>
                            </div>
                            <div class="album-info p-3">
                                <h5 class="mb-2">Visites ministérielles 2024</h5>
                                <p class="text-muted small mb-0">
                                    <i class="far fa-calendar me-1"></i> Novembre 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-guest-layout>
