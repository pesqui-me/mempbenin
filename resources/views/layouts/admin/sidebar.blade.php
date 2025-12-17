{{-- Admin Sidebar --}}
<aside class="sidebar">
    <div class="sidebar-header">
        <div class="brand">
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <img src="{{ asset('assets/common/images/identity/memp_light.png') }}" alt="MEMP" class="brand-logo">
                <span class="brand-text">MEMP Admin</span>
            </a>
        </div>
        <button class="sidebar-toggle" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <div class="sidebar-content">
        <nav class="sidebar-nav">

            {{-- GÉNÉRAL --}}
            <div class="nav-section">
                <div class="nav-section-title">Général</div>
                <ul class="nav-menu">
                    <li class="nav-item {{ request()->is('administration/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <span class="nav-text">Tableau de bord</span>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- CONTENUS --}}
            <div class="nav-section">
                <div class="nav-section-title">Contenus</div>
                <ul class="nav-menu">
                    <li class="nav-item {{ request()->is('admin/contenus/publications*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#publicationsMenu">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <span class="nav-text">Publications</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="publicationsMenu">
                            <li><a href="{{ route('admin.contenus.publications.index') }}" class="{{ request()->routeIs('admin.contenus.publications.index') ? 'active' : '' }}">Toutes les publications</a></li>
                            <li><a href="{{ route('admin.contenus.publications.create') }}" class="{{ request()->routeIs('admin.contenus.publications.create') ? 'active' : '' }}">Nouvelle publication</a></li>
                            <li><a href="#">Catégories</a></li>
                            <li><a href="#">Commentaires</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('administration/textes*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#textesMenu">
                            <i class="nav-icon fas fa-gavel"></i>
                            <span class="nav-text">Textes & Législations</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="textesMenu">
                            <li><a href="#">Tous les textes</a></li>
                            <li><a href="#">Nouveau texte</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('administration/prestations*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#prestationsMenu">
                            <i class="nav-icon fas fa-tasks"></i>
                            <span class="nav-text">Prestations</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="prestationsMenu">
                            <li><a href="#">Toutes les prestations</a></li>
                            <li><a href="#">Nouvelle prestation</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('administration/communiques*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#communiquesMenu">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <span class="nav-text">Communiqués</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="communiquesMenu">
                            <li><a href="#">Tous les communiqués</a></li>
                            <li><a href="#">Nouveau communiqué</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('administration/organigramme*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#organigrammeMenu">
                            <i class="nav-icon fas fa-sitemap"></i>
                            <span class="nav-text">Organigramme</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="organigrammeMenu">
                            <li><a href="#">Structures</a></li>
                            <li><a href="#">Agents</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('administration/medias*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#mediasMenu">
                            <i class="nav-icon fas fa-images"></i>
                            <span class="nav-text">Médias</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="mediasMenu">
                            <li><a href="#">Médiathèque</a></li>
                            <li><a href="#">Nouveau fichier</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('administration/pages*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#pagesMenu">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <span class="nav-text">Pages</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="pagesMenu">
                            <li><a href="#">Ministère</a></li>
                            <li><a href="#">Partenaires</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Réseaux sociaux</a></li>
                            <li><a href="#">Liens utiles</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            {{-- GESTION DES USAGERS --}}
            <div class="nav-section">
                <div class="nav-section-title">Gestion des usagers</div>
                <ul class="nav-menu">
                    <li class="nav-item {{ request()->is('administration/audiences*') ? 'active' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <span class="nav-text">Audiences</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('administration/suggestions*') ? 'active' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-lightbulb"></i>
                            <span class="nav-text">Suggestions</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('administration/preoccupations*') ? 'active' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-exclamation-triangle"></i>
                            <span class="nav-text">Préoccupations</span>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- ADMINISTRATION --}}
            <div class="nav-section">
                <div class="nav-section-title">Administration</div>
                <ul class="nav-menu">
                    <li class="nav-item {{ request()->is('administration/utilisateurs*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#utilisateursMenu">
                            <i class="nav-icon fas fa-users"></i>
                            <span class="nav-text">Utilisateurs</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="utilisateursMenu">
                            <li><a href="#">Tous les utilisateurs</a></li>
                            <li><a href="#">Nouvel utilisateur</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('administration/parametres*') ? 'active' : '' }}">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#parametresMenu">
                            <i class="nav-icon fas fa-cog"></i>
                            <span class="nav-text">Paramètres</span>
                            <i class="nav-arrow fas fa-chevron-down"></i>
                        </a>
                        <ul class="nav-submenu collapse" id="parametresMenu">
                            <li><a href="#">Mon compte</a></li>
                            <li><a href="#">Rôles & Permissions</a></li>
                            <li><a href="#">Configurations</a></li>
                            <li><a href="#">Mode Maintenance</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

    {{-- Logout Button --}}
    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">
                <i class="fas fa-power-off me-2"></i>
                <span>Déconnexion</span>
            </button>
        </form>
    </div>
</aside>
