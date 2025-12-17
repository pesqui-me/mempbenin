<x-guest-layout>
    {{-- Breadcrumb --}}
    <x-guest.breadcrumb :items="[
        ['label' => 'Accueil', 'url' => route('home'), 'icon' => 'home'],
        ['label' => 'Prestations', 'url' => '#'],
        ['label' => 'Notre Catalogue', 'active' => true]
    ]" />

    {{-- Page Title --}}
    <x-guest.page-title
        title="Notre Catalogue de Prestations"
        subtitle="Découvrez l'ensemble des services offerts par le Ministère"
    />

    {{-- Prestations Grid --}}
    <div class="prestations-section">
        <div class="row">

            {{-- Prestation 1 --}}
            <div class="col-md-6 mb-5">
                <x-guest.card.prestation
                    title="Formation des instituteurs adjoints à titre payant"
                    description="Programme de formation professionnelle pour les aspirants instituteurs adjoints. Formation complète avec certification officielle."
                    icon="graduation-cap"
                    icon-color="primary"
                    link="#"
                    :badges="[
                        ['label' => 'Durée : 2 ans', 'variant' => 'info', 'icon' => 'clock'],
                        ['label' => 'Places limitées', 'variant' => 'warning', 'icon' => 'users']
                    ]"
                />

            {{-- Prestation 2 --}}
            <div class="col-md-6 mb-5">
                <x-guest.card.prestation
                    title="Formation des instituteurs adjoints à titre boursier"
                    description="Formation gratuite sur concours pour les meilleurs candidats. Bourse d'études complète avec engagement de service."
                    icon="graduation-cap"
                    icon-color="success"
                    link="#"
                    :badges="[
                        ['label' => 'Gratuit', 'variant' => 'success'],
                        ['label' => 'Sur concours', 'variant' => 'primary']
                    ]"
                />
            </div>

            {{-- Prestation 3 --}}
            <div class="col-md-6 mb-5">
                <x-guest.card.prestation
                    title="Rectification d'erreurs sur les attestations et diplômes"
                    description="Service de correction des erreurs administratives sur les documents officiels délivrés par la direction des examens et concours."
                    icon="file"
                    icon-color="secondary"
                    link="#"
                    :badges="[
                        ['label' => 'Délai : 15 jours', 'variant' => 'warning', 'icon' => 'clock'],
                        ['label' => 'Documents requis', 'variant' => 'light']
                    ]"
                />
            </div>

            {{-- Prestation 4 --}}
            <div class="col-md-6 mb-5">
                <x-guest.card.prestation
                    title="Autorisation de diriger un établissement privé"
                    description="Obtention de l'autorisation officielle pour l'ouverture et la direction d'un établissement d'enseignement privé."
                    icon="briefcase"
                    icon-color="danger"
                    link="#"
                    :badges="[
                        ['label' => 'Dossier complet', 'variant' => 'danger'],
                        ['label' => 'Délai : 1 mois', 'variant' => 'info', 'icon' => 'calendar']
                    ]"
                />
            </div>

        </div>

        {{-- Info Box --}}
        <x-guest.alert variant="primary" icon="info" title="Comment bénéficier de nos prestations ?" class="mt-5">
            <div class="row mt-3">
                <div class="col-md-4 mb-3 text-center">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: 700;">
                        1
                    </div>
                    <h6 class="fw-bold">Consultez les détails</h6>
                    <p class="small text-muted mb-0">Informez-vous sur les conditions et documents requis</p>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: 700;">
                        2
                    </div>
                    <h6 class="fw-bold">Préparez votre dossier</h6>
                    <p class="small text-muted mb-0">Rassemblez tous les documents nécessaires</p>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: 700;">
                        3
                    </div>
                    <h6 class="fw-bold">Soumettez votre demande</h6>
                    <p class="small text-muted mb-0">Déposez votre dossier ou faites une demande en ligne</p>
                </div>
            </div>
        </x-guest.alert>
    </div>
</x-guest-layout>
