<x-guest-layout>
    <!-- hero slider -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background: url({{ asset('assets/guest/img/posts/5.jpeg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    CEP 2025
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    <a href="#">CEP 2025 au Bénin : Le ministre Salimane Karimou lance les épreuves écrites dans le Mono</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider end -->
    
    <div class="page-details py-5 px-3">
        <h3 class="page-details-title mb-20 bg-light text-dark p-2 rounded-end-2">Prestations</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="service-item">
                    <div class="service-icon align-items-center justify-content-center">
                        <img src="{{ asset('assets/common/images/identity/Coat_of_arms_of_Benin.svg.png') }}" alt="">
                    </div>
                    <div class="service-info">
                        <h4 class="service-title"><a href="#">Prestation</a></h4>
                        <p class="text-white"><b>Rectification d’erreurs sur les attestations et diplômes délivrés par la direction des examens et concours.</b></p>
                        <div class="service-btn text-end">
                            <a href="#">Voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="service-item">
                    <div class="service-icon align-items-center justify-content-center">
                        <img src="{{ asset('assets/common/images/identity/Coat_of_arms_of_Benin.svg.png') }}" alt="">
                    </div>
                    <div class="service-info">
                        <h4 class="service-title"><a href="#">e-Service</a></h4>
                        <p class="text-white"><b>Rectification d’erreurs sur les attestations et diplômes délivrés par la direction des examens et concours.</b></p>
                        <div class="service-btn text-end">
                            <a href="#">Voir les détails</a>
                            <a href="#" class="ms-2 text-warning">Faire une demande</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-end">
                <a href="#" class="btn btn-outline-success">TOUTES LES PRESTATIONS <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="page-details py-5 px-3">
        <h3 class="page-details-title mb-20 bg-light text-dark p-2 rounded-end-2">Appels d'offre en cours</h3>

        <div class="row">
            <div class="col-md-12">
                <div class="offre-item d-flex align-items-center">
                    <div class="offre-icon align-items-center justify-content-center">
                        <img src="{{ asset('assets/common/images/identity/Coat_of_arms_of_Benin.svg.png') }}" alt="">
                    </div>
                    <div class="offre-info">
                        <h4 class="offre-title">
                            <a href="#">Appel à manifestion d'intérèt dans le cadre de la constitution du réperto ...</a>
                        </h4>
                        <p class="text-white">Rectification d’erreurs sur les attestations et diplômes délivrés par la direction des examens et concours.</p>
                        <div class="offre-btn d-flex justify-content-between align-items-center">
                            <span class="text-white"><i>Publié le 20 Mai 2025</i></span>
                            <a href="#">Consulter l'offre</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-end">
                <a href="#" class="btn btn-outline-success">TOUTES LES OFFRES <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</x-guest-layout>