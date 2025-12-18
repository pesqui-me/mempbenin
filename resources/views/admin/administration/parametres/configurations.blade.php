<x-admin-layout>
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title mb-0">Configurations</h1>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item">Paramètres</li>
                        <li class="breadcrumb-item active">Configurations</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.administration.parametres.configurations.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-8">
                {{-- Général --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations générales du site</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nom du site</label>
                            <input type="text" class="form-control" name="site_name" value="MEMP - Ministère des Enseignements Maternel et Primaire">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Slogan/Tagline</label>
                            <input type="text" class="form-control" name="site_tagline" value="Pour une éducation de qualité au Bénin">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="site_description" rows="3">Le Ministère des Enseignements Maternel et Primaire du Bénin.</textarea>
                            <small class="text-muted">Utilisé pour le SEO et les réseaux sociaux</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email de contact</label>
                                <input type="email" class="form-control" name="contact_email" value="contact@memp.bj">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text" class="form-control" name="contact_phone" value="+229 21 30 XX XX">
                            </div>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Adresse</label>
                            <textarea class="form-control" name="address" rows="2">Rue des Écoles, Porto-Novo, Bénin</textarea>
                        </div>
                    </div>
                </div>

                {{-- Logo et Visuels --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Logo et visuels</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Logo (fond clair)</label>
                                <div class="mb-2">
                                    <img src="{{ asset('assets/common/images/identity/memp.png') }}" alt="Logo" style="max-height: 80px;">
                                </div>
                                <input type="file" class="form-control" name="logo_light" accept="image/*">
                                <small class="text-muted">Format PNG transparent recommandé</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Logo (fond sombre)</label>
                                <div class="mb-2">
                                    <img src="{{ asset('assets/common/images/identity/memp_light.png') }}" alt="Logo" style="max-height: 80px; background: #102c57; padding: 10px;">
                                </div>
                                <input type="file" class="form-control" name="logo_dark" accept="image/*">
                                <small class="text-muted">Format PNG transparent recommandé</small>
                            </div>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Favicon</label>
                            <input type="file" class="form-control" name="favicon" accept=".ico,.png">
                            <small class="text-muted">Format ICO ou PNG 32x32px</small>
                        </div>
                    </div>
                </div>

                {{-- Réseaux Sociaux --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Réseaux sociaux</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">
                                <i class="fab fa-facebook text-primary me-2"></i>Facebook
                            </label>
                            <input type="url" class="form-control" name="social_facebook" placeholder="https://facebook.com/memp.benin">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="fab fa-twitter text-info me-2"></i>Twitter (X)
                            </label>
                            <input type="url" class="form-control" name="social_twitter" placeholder="https://twitter.com/memp_benin">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="fab fa-linkedin text-primary me-2"></i>LinkedIn
                            </label>
                            <input type="url" class="form-control" name="social_linkedin" placeholder="https://linkedin.com/company/memp">
                        </div>

                        <div class="mb-0">
                            <label class="form-label">
                                <i class="fab fa-youtube text-danger me-2"></i>YouTube
                            </label>
                            <input type="url" class="form-control" name="social_youtube" placeholder="https://youtube.com/@memp">
                        </div>
                    </div>
                </div>

                {{-- Email --}}
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Configuration Email</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Serveur SMTP</label>
                            <input type="text" class="form-control" name="smtp_host" placeholder="smtp.example.com">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Port</label>
                                <input type="number" class="form-control" name="smtp_port" value="587">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Chiffrement</label>
                                <select class="form-select" name="smtp_encryption">
                                    <option value="tls" selected>TLS</option>
                                    <option value="ssl">SSL</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Utilisateur SMTP</label>
                                <input type="text" class="form-control" name="smtp_username">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mot de passe SMTP</label>
                                <input type="password" class="form-control" name="smtp_password">
                            </div>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Adresse d'expédition</label>
                            <input type="email" class="form-control" name="mail_from" value="noreply@memp.bj">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                {{-- Options --}}
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Options du site</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="site_active" id="siteActive" checked>
                            <label class="form-check-label" for="siteActive">
                                Site actif
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="allow_registration" id="allowRegistration">
                            <label class="form-check-label" for="allowRegistration">
                                Autoriser les inscriptions
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="require_email_verification" id="requireEmail" checked>
                            <label class="form-check-label" for="requireEmail">
                                Vérification email requise
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="enable_cache" id="enableCache" checked>
                            <label class="form-check-label" for="enableCache">
                                Activer le cache
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="debug_mode" id="debugMode">
                            <label class="form-check-label" for="debugMode">
                                Mode débogage
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                            <button type="button" class="btn btn-outline-warning">
                                <i class="fas fa-sync me-2"></i>Vider le cache
                            </button>
                            <button type="button" class="btn btn-outline-info">
                                <i class="fas fa-envelope me-2"></i>Tester email
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</x-admin-layout>
