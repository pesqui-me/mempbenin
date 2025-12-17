<!-- header area -->
<header class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-top-wrap">
				<div class="header-top-left">
					<div class="header-top-social">
						<span>Suivez-Nous: </span>
						<a href="#"><i class="fab fa-whatsapp"></i></a>
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
						<a href="#"><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
				<div class="header-top-right">
					<div class="header-top-contact">
						<ul>
							<li>
								<a class="btn btn-light text-dark" href="#">Soumettre une préoccupation carrière</a>
							</li>
							<li>
								<a href="mailto:memp.usager@gouv.bj"><i class="far fa-envelopes"></i> memp.usager@gouv.bj</a>
							</li>
							<li>
								<a href="tel:+2290140480480"><i class="far fa-phone-volume"></i> +229 01 40 48 04 80</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-navigation">
		<nav class="navbar navbar-expand-lg">
			<div class="container position-relative">
				<a class="navbar-brand" href="#">
					<img src="{{ asset('assets/common/images/identity/memp.png') }}" alt="MEMP">
				</a>
				<div class="mobile-menu-right">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="main_nav">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link" href="{{ route('home') }}">ACCUEIL</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">MINISTÈRE</a>
							<ul class="dropdown-menu fade-down">
								<li><a class="dropdown-item" href="{{ route('ministere.ministre') }}">BIOGRAPHIE DU MINISTRE</a></li>
								<li><a class="dropdown-item" href="{{ route('ministere.cabinet') }}">CABINET DU MINISTRE</a></li>
								<li><a class="dropdown-item" href="{{ route('ministere.secretariat') }}">SECRÉTARIAT GÉNÉRAL DU MINISTÈRE</a></li>
								<li><a class="dropdown-item" href="{{ route('ministere.inspection') }}">INSPECTION GÉNÉRALE DU MINISTÈRE</a></li>
								<li><a class="dropdown-item" href="{{ route('ministere.structures') }}">STRUCTURES DU MINISTÈRE</a></li>
								<li><a class="dropdown-item" href="{{ route('ministere.organigramme') }}">ORGANIGRAMME</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">PRESTATIONS</a>
							<ul class="dropdown-menu fade-down">
								<li><a class="dropdown-item" href="#">NOTRE CATALOGUE</a></li>
								<li><a class="dropdown-item" href="#">NOS SERVICES EN LIGNE</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">OPPORTUNITÉS</a>
							<ul class="dropdown-menu fade-down">
								<li><a class="dropdown-item" href="#">APPELS D'OFFRE</a></li>
								<li><a class="dropdown-item" href="#">RECRUTEMENTS</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">DOCUMENTATIONS</a>
							<ul class="dropdown-menu fade-down">
								<li><a class="dropdown-item" href="#">TEXTES LÉGISLATIVES ET RÈGLEMENTAIRES</a></li>
								<li><a class="dropdown-item" href="#">PUBLICATIONS</a></li>
								<li><a class="dropdown-item" href="#">MÉDIATHÈQUE</a></li>
								<li><a class="dropdown-item" href="#">STATISTIQUES</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="register.html">SUGGESTIONS</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">CONTACTS</a></li>
					</ul>
					{{-- <div class="nav-right">
						<div class="nav-right-btn mt-2">
							<a href="login.html" class="theme-btn"><span
									class="fal fa-user-circle"></span>CONNEXION</a>
						</div>
					</div> --}}
				</div>
			</div>
		</nav>
		<span class="flag">
			<i class="flag-green"></i>
			<i class="flag-yellow"></i>
			<i class="flag-red"></i>
		</span>
	</div>
</header>