<x-guest-layout>
    {{-- Breadcrumb --}}
    <x-guest.breadcrumb :items="[
        ['label' => 'Accueil', 'url' => route('home'), 'icon' => 'home'],
        ['label' => 'Le Ministère', 'url' => '#'],
        ['label' => 'Biographie du Ministre', 'active' => true]
    ]" />

    {{-- Page Title --}}
    <x-guest.page-title title="Biographie du Ministre" />

    {{-- Minister Bio Section --}}
    <div class="minister-bio-section">
        <div class="row">
            {{-- Photo --}}
            <div class="col-md-4 mb-4">
                <div class="minister-photo-wrapper">
                    <x-guest.avatar
                        src="{{ asset('assets/guest/img/ministre.jpg') }}"
                        alt="Ministre Salimane Karimou"
                        size="xl"
                        class="w-100 shadow mb-3"
                        style="height: auto; min-height: 300px;"
                    />
                    <x-guest.alert variant="primary" class="text-center p-3">
                        <h4 class="mb-1 text-primary fw-bold">Salimane KARIMOU</h4>
                        <p class="mb-0">Ministre des Enseignements Maternel & Primaire</p>
                    </x-guest.alert>
                </div>
            </div>

            {{-- Bio Content --}}
            <div class="col-md-8">
                <div class="minister-bio-content">
                    <h3 class="section-title mb-3">Parcours Professionnel</h3>
                    <p class="mb-3">
                        Le ministre Karimou Salimane occupe le poste de <strong>Ministre des Enseignements Maternel et Primaire</strong> depuis 2016.
                        Fort d'une expérience solide dans le domaine de l'administration publique et de l'éducation, il a su apporter une vision
                        moderne et stratégique au système éducatif béninois.
                    </p>

                    <h4 class="mt-4 mb-3">Expérience Antérieure</h4>
                    <ul class="experience-list list-unstyled">
                        <li class="mb-2">
                            <x-guest.icon name="check" class="text-primary me-2" />
                            Secrétaire Général du Ministère
                        </li>
                        <li class="mb-2">
                            <x-guest.icon name="check" class="text-primary me-2" />
                            Directeur de la Médiathèque Nationale
                        </li>
                        <li class="mb-2">
                            <x-guest.icon name="check" class="text-primary me-2" />
                            Expert en gestion axée sur les résultats
                        </li>
                    </ul>

                    <h4 class="mt-4 mb-3">Formation Académique</h4>
                    <x-guest.card.info variant="success" icon="graduation-cap" class="mb-4">
                        <p class="mb-2">
                            <strong>Maîtrise en Gestion Axée sur les Résultats</strong>
                        </p>
                        <p class="mb-0 text-muted">Université Laval, Canada</p>
                    </x-guest.card.info>

                    <h4 class="mt-4 mb-3">Vision et Engagement</h4>
                    <p class="mb-0">
                        Sous son leadership, le ministère s'engage à améliorer la qualité de l'enseignement maternel et primaire au Bénin,
                        avec un accent particulier sur l'accès équitable à l'éducation, la formation des enseignants et la modernisation
                        des infrastructures scolaires.
                    </p>
                </div>
            </div>
        </div>

        {{-- CTA Audience --}}
        <x-guest.alert variant="primary" class="mt-5 bg-gradient-primary text-white">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="text-white mb-2">Audience auprès du Ministre</h3>
                    <p class="mb-0 text-white">Vous souhaitez obtenir une audience avec le Ministre ? Faites votre demande en ligne.</p>
                </div>
                <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                    <x-guest.button
                        href="#"
                        variant="light"
                        size="lg"
                        icon="calendar"
                    >
                        Demander une Audience
                    </x-guest.button>
                </div>
            </div>
        </x-guest.alert>
    </div>
</x-guest-layout>
