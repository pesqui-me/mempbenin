<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-light py-3 px-3 rounded mb-4">
        <div class="breadcrumb-content">
            <ul class="breadcrumb list-inline mb-0">
                <li class="list-inline-item"><a href="{{ route('home') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item active">Suggestions</li>
            </ul>
        </div>
    </div>

    {{-- Page Title --}}
    <div class="page-title-area mb-4">
        <h2 class="page-title">Suggestions</h2>
        <div class="title-divider"></div>
        <p class="text-muted mt-2">Partagez vos idées pour améliorer le système éducatif</p>
    </div>

    {{-- Suggestions Section --}}
    <div class="suggestions-section">

        {{-- Intro Box --}}
        <div class="intro-box bg-primary bg-opacity-10 border border-primary p-4 rounded mb-5">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <i class="far fa-lightbulb fa-4x text-primary"></i>
                </div>
                <div class="col-md-10">
                    <h4 class="mb-2">Votre avis compte !</h4>
                    <p class="mb-0">
                        Le Ministère des Enseignements Maternel et Primaire est à l'écoute de toutes les parties prenantes
                        du système éducatif. Partagez vos suggestions, remarques et propositions d'amélioration.
                        Ensemble, construisons l'école de demain.
                    </p>
                </div>
            </div>
        </div>

        {{-- Suggestion Form --}}
        <div class="suggestion-form-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="#" method="POST" class="suggestion-form shadow-sm p-5 bg-white rounded">
                        @csrf

                        {{-- Identité --}}
                        <div class="form-section mb-4">
                            <h5 class="section-title mb-3">
                                <i class="far fa-user text-primary me-2"></i>Vos informations
                            </h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nom" class="form-label">Nom complet <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="qualite" class="form-label">Vous êtes <span class="text-danger">*</span></label>
                                    <select class="form-select" id="qualite" name="qualite" required>
                                        <option value="">Sélectionnez...</option>
                                        <option value="parent">Parent d'élève</option>
                                        <option value="enseignant">Enseignant</option>
                                        <option value="directeur">Directeur d'école</option>
                                        <option value="eleve">Élève</option>
                                        <option value="etudiant">Étudiant</option>
                                        <option value="citoyen">Citoyen</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Suggestion --}}
                        <div class="form-section mb-4">
                            <h5 class="section-title mb-3">
                                <i class="far fa-comment-alt text-primary me-2"></i>Votre suggestion
                            </h5>
                            <div class="mb-3">
                                <label for="categorie" class="form-label">Catégorie <span class="text-danger">*</span></label>
                                <select class="form-select" id="categorie" name="categorie" required>
                                    <option value="">Sélectionnez une catégorie...</option>
                                    <option value="pedagogie">Pédagogie et enseignement</option>
                                    <option value="infrastructure">Infrastructures scolaires</option>
                                    <option value="materiel">Matériel didactique</option>
                                    <option value="personnel">Personnel enseignant</option>
                                    <option value="administration">Administration</option>
                                    <option value="cantine">Cantine scolaire</option>
                                    <option value="transport">Transport scolaire</option>
                                    <option value="numerique">Numérique éducatif</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre de la suggestion <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Résumez votre suggestion en quelques mots..." required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Détails de votre suggestion <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="8"
                                    placeholder="Décrivez votre suggestion de manière détaillée. Expliquez le problème identifié et la solution proposée..." required></textarea>
                                <small class="form-text text-muted">Minimum 50 caractères</small>
                            </div>
                        </div>

                        {{-- RGPD --}}
                        <div class="form-section mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rgpd" name="rgpd" required>
                                <label class="form-check-label" for="rgpd">
                                    Je consens au traitement de mes données personnelles conformément à la
                                    <a href="#" class="text-primary">politique de confidentialité</a> <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>

                        {{-- Submit Button --}}
                        <div class="form-actions text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="far fa-paper-plane me-2"></i>Envoyer ma suggestion
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Info Cards --}}
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="info-card bg-light p-4 rounded text-center h-100">
                    <div class="icon mb-3">
                        <i class="far fa-shield-check fa-3x text-success"></i>
                    </div>
                    <h5 class="mb-2">Confidentialité</h5>
                    <p class="mb-0 small text-muted">
                        Vos données sont protégées et ne seront utilisées que dans le cadre du traitement de votre suggestion.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="info-card bg-light p-4 rounded text-center h-100">
                    <div class="icon mb-3">
                        <i class="far fa-clock fa-3x text-info"></i>
                    </div>
                    <h5 class="mb-2">Traitement rapide</h5>
                    <p class="mb-0 small text-muted">
                        Chaque suggestion est étudiée par nos équipes. Vous recevrez un accusé de réception par email.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="info-card bg-light p-4 rounded text-center h-100">
                    <div class="icon mb-3">
                        <i class="far fa-handshake fa-3x text-primary"></i>
                    </div>
                    <h5 class="mb-2">Impact réel</h5>
                    <p class="mb-0 small text-muted">
                        Vos suggestions contribuent à l'amélioration continue de notre système éducatif.
                    </p>
                </div>
            </div>
        </div>

        {{-- Contact Alternative --}}
        <div class="contact-alternative mt-5 p-4 bg-warning bg-opacity-10 border border-warning rounded">
            <h5 class="mb-3"><i class="far fa-info-circle text-warning me-2"></i>Autres moyens de contact</h5>
            <p class="mb-2">Vous préférez nous contacter autrement ? Voici d'autres options :</p>
            <ul class="mb-0">
                <li><strong>Email :</strong> <a href="mailto:suggestions@memp.gouv.bj">suggestions@memp.gouv.bj</a></li>
                <li><strong>Téléphone :</strong> <a href="tel:+2290140480480">+229 01 40 48 04 80</a></li>
                <li><strong>Courrier :</strong> Ministère des Enseignements Maternel & Primaire, Cotonou, Bénin</li>
            </ul>
        </div>

    </div>
</x-guest-layout>
