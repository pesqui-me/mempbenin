{{-- Admin Header/Topbar --}}
<header class="topbar">
    <div class="topbar-left">
        <button class="btn-menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>

        <div class="topbar-search">
            <div class="search-wrapper">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Rechercher...">
            </div>
        </div>
    </div>

    <div class="topbar-right">
        {{-- Quick Add Button --}}
        <div class="topbar-item">
            <div class="dropdown">
                <button class="btn-topbar" data-bs-toggle="dropdown">
                    <i class="fas fa-plus"></i>
                    <span class="d-none d-md-inline ms-2">Nouveau</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-newspaper me-2"></i> Publication</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-gavel me-2"></i> Texte</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-bullhorn me-2"></i> Communiqué</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-image me-2"></i> Média</a></li>
                </ul>
            </div>
        </div>

        {{-- Notifications --}}
        <div class="topbar-item">
            <div class="dropdown">
                <button class="btn-topbar position-relative" data-bs-toggle="dropdown">
                    <i class="fas fa-bell"></i>
                    <span class="badge-notification">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end notifications-dropdown">
                    <div class="dropdown-header">
                        <h6 class="mb-0">Notifications</h6>
                        <span class="badge bg-primary">5 nouvelles</span>
                    </div>
                    <div class="dropdown-body">
                        <a href="#" class="notification-item unread">
                            <div class="notification-icon bg-primary">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="notification-content">
                                <div class="notification-title">Nouvel utilisateur</div>
                                <div class="notification-text">Jean Dupont s'est inscrit</div>
                                <div class="notification-time">Il y a 5 min</div>
                            </div>
                        </a>
                        <a href="#" class="notification-item unread">
                            <div class="notification-icon bg-success">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="notification-content">
                                <div class="notification-title">Nouvelle suggestion</div>
                                <div class="notification-text">Une suggestion a été soumise</div>
                                <div class="notification-time">Il y a 1h</div>
                            </div>
                        </a>
                        <a href="#" class="notification-item">
                            <div class="notification-icon bg-warning">
                                <i class="fas fa-exclamation"></i>
                            </div>
                            <div class="notification-content">
                                <div class="notification-title">Nouvelle préoccupation</div>
                                <div class="notification-text">Carrière - besoin urgent</div>
                                <div class="notification-time">Il y a 2h</div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer">
                        <a href="#" class="dropdown-footer-link">Voir toutes les notifications</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Messages --}}
        <div class="topbar-item d-none d-lg-block">
            <div class="dropdown">
                <button class="btn-topbar position-relative" data-bs-toggle="dropdown">
                    <i class="fas fa-envelope"></i>
                    <span class="badge-notification">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end messages-dropdown">
                    <div class="dropdown-header">
                        <h6 class="mb-0">Messages</h6>
                        <span class="badge bg-success">3 non lus</span>
                    </div>
                    <div class="dropdown-body">
                        <a href="#" class="message-item unread">
                            <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=102c57&color=fff" alt="User" class="message-avatar">
                            <div class="message-content">
                                <div class="message-title">Jean Dupont</div>
                                <div class="message-text">Concernant la demande d'audience...</div>
                                <div class="message-time">Il y a 10 min</div>
                            </div>
                        </a>
                        <a href="#" class="message-item">
                            <img src="https://ui-avatars.com/api/?name=Marie+Martin&background=102c57&color=fff" alt="User" class="message-avatar">
                            <div class="message-content">
                                <div class="message-title">Marie Martin</div>
                                <div class="message-text">Validation du document...</div>
                                <div class="message-time">Il y a 1h</div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer">
                        <a href="#" class="dropdown-footer-link">Voir tous les messages</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- User Profile --}}
        <div class="topbar-item">
            <div class="dropdown">
                <button class="btn-profile" data-bs-toggle="dropdown">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'Admin' }}&background=102c57&color=fff" alt="Profile" class="profile-avatar">
                    <div class="profile-info d-none d-md-block">
                        <div class="profile-name">{{ auth()->user()->name ?? 'Administrateur' }}</div>
                        <div class="profile-role">{{ auth()->user()->role ?? 'Admin' }}</div>
                    </div>
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end profile-dropdown">
                    <li class="dropdown-header">
                        <div class="user-info">
                            <div class="user-name">{{ auth()->user()->name ?? 'Administrateur' }}</div>
                            <div class="user-email">{{ auth()->user()->email ?? 'admin@memp.gouv.bj' }}</div>
                        </div>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Mon profil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Paramètres</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-lock me-2"></i> Sécurité</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-power-off me-2"></i> Déconnexion
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
