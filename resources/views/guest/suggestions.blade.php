<x-guest-layout>
    {{-- Breadcrumb --}}
    <x-guest.breadcrumb :items="[
        ['label' => 'Accueil', 'url' => route('home'), 'icon' => 'home'],
        ['label' => 'Suggestions', 'active' => true]
    ]" />

    {{-- Page Title --}}
    <x-guest.page-title
        title="Suggestions"
        subtitle="Partagez vos idées pour améliorer le système éducatif"
    />

    {{-- Suggestions Section --}}
    <div class="suggestions-section">

        {{-- Intro Box --}}
        <x-guest.alert variant="primary" icon="lightbulb" title="Votre avis compte !" class="mb-5">
            <p class="mb-0">
                Le Ministère des Enseignements Maternel et Primaire est à l'écoute de toutes les parties prenantes
                du système éducatif. Partagez vos suggestions, remarques et propositions d'amélioration.
                Ensemble, construisons l'école de demain.
            </p>
        </x-guest.alert>

        {{-- Suggestion Form --}}
        <div class="suggestion-form-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="memp-card p-4 p-md-5">
                        <form action="#" method="POST">
                            @csrf

                            {{-- Identité --}}
                            <div class="form-section mb-5">
                                <h5 class="section-title mb-4 d-flex align-items-center">
                                    <x-guest.icon name="user" class="text-primary me-2" size="md" />
                                    Vos informations
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-guest.form.input
                                            name="nom"
                                            label="Nom complet"
                                            placeholder="Votre nom complet"
                                            required
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <x-guest.form.input
                                            name="email"
                                            type="email"
                                            label="Email"
                                            placeholder="votre@email.com"
                                            required
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <x-guest.form.input
                                            name="telephone"
                                            type="tel"
                                            label="Téléphone"
                                            placeholder="+229 XX XX XX XX"
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <x-guest.form.select
                                            name="qualite"
                                            label="Vous êtes"
                                            placeholder="Sélectionnez..."
                                            required
                                            :options="[
                                                'parent' => 'Parent d\'élève',
                                                'enseignant' => 'Enseignant',
                                                'directeur' => 'Directeur d\'école',
                                                'eleve' => 'Élève',
                                                'etudiant' => 'Étudiant',
                                                'citoyen' => 'Citoyen',
                                                'autre' => 'Autre'
                                            ]"
                                        />
                                    </div>
                                </div>
                            </div>

                            {{-- Suggestion --}}
                            <div class="form-section mb-5">
                                <h5 class="section-title mb-4 d-flex align-items-center">
                                    <x-guest.icon name="lightbulb" class="text-primary me-2" size="md" />
                                    Votre suggestion
                                </h5>

                                <x-guest.form.select
                                    name="categorie"
                                    label="Catégorie"
                                    placeholder="Sélectionnez une catégorie..."
                                    required
                                    :options="[
                                        'pedagogie' => 'Pédagogie et enseignement',
                                        'infrastructure' => 'Infrastructures scolaires',
                                        'materiel' => 'Matériel didactique',
                                        'personnel' => 'Personnel enseignant',
                                        'administration' => 'Administration',
                                        'cantine' => 'Cantine scolaire',
                                        'transport' => 'Transport scolaire',
                                        'numerique' => 'Numérique éducatif',
                                        'autre' => 'Autre'
                                    ]"
                                />

                                <x-guest.form.input
                                    name="titre"
                                    label="Titre de la suggestion"
                                    placeholder="Résumez votre suggestion en quelques mots..."
                                    required
                                />

                                <x-guest.form.textarea
                                    name="message"
                                    label="Détails de votre suggestion"
                                    placeholder="Décrivez votre suggestion de manière détaillée. Expliquez le problème identifié et la solution proposée..."
                                    rows="8"
                                    help="Minimum 50 caractères"
                                    required
                                />
                            </div>

                            {{-- RGPD --}}
                            <div class="form-section mb-4">
                                <x-guest.form.checkbox
                                    name="rgpd"
                                    label="Je consens au traitement de mes données personnelles conformément à la <a href='#' class='text-primary'>politique de confidentialité</a>"
                                    required
                                />
                            </div>

                            {{-- Submit Button --}}
                            <div class="form-actions text-center">
                                <x-guest.button
                                    type="submit"
                                    variant="primary"
                                    size="lg"
                                    icon="send"
                                    class="px-5"
                                >
                                    Envoyer ma suggestion
                                </x-guest.button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Info Cards --}}
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <x-guest.card.info variant="success" class="text-center h-100">
                    <div class="icon mb-3">
                        <x-guest.icon name="shield" size="xl" class="text-success" />
                    </div>
                    <h5 class="mb-2 fw-bold">Confidentialité</h5>
                    <p class="mb-0 small text-muted">
                        Vos données sont protégées et ne seront utilisées que dans le cadre du traitement de votre suggestion.
                    </p>
                </x-guest.card.info>
            </div>
            <div class="col-md-4 mb-4">
                <x-guest.card.info variant="info" class="text-center h-100">
                    <div class="icon mb-3">
                        <x-guest.icon name="clock" size="xl" class="text-info" />
                    </div>
                    <h5 class="mb-2 fw-bold">Traitement rapide</h5>
                    <p class="mb-0 small text-muted">
                        Chaque suggestion est étudiée par nos équipes. Vous recevrez un accusé de réception par email.
                    </p>
                </x-guest.card.info>
            </div>
            <div class="col-md-4 mb-4">
                <x-guest.card.info variant="primary" class="text-center h-100">
                    <div class="icon mb-3">
                        <x-guest.icon name="check" size="xl" class="text-primary" />
                    </div>
                    <h5 class="mb-2 fw-bold">Impact réel</h5>
                    <p class="mb-0 small text-muted">
                        Vos suggestions contribuent à l'amélioration continue de notre système éducatif.
                    </p>
                </x-guest.card.info>
            </div>
        </div>

        {{-- Contact Alternative --}}
        <x-guest.alert variant="warning" icon="info" title="Autres moyens de contact" class="mt-5">
            <p class="mb-2">Vous préférez nous contacter autrement ? Voici d'autres options :</p>
            <ul class="mb-0">
                <li><strong>Email :</strong> <a href="mailto:suggestions@memp.gouv.bj" class="text-primary">suggestions@memp.gouv.bj</a></li>
                <li><strong>Téléphone :</strong> <a href="tel:+2290140480480" class="text-primary">+229 01 40 48 04 80</a></li>
                <li><strong>Courrier :</strong> Ministère des Enseignements Maternel & Primaire, Cotonou, Bénin</li>
            </ul>
        </x-guest.alert>

    </div>
</x-guest-layout>
