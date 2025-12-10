<header class="admin-header">
    <div class="header-left">
        <!-- Mobile Toggle -->
        <button class="header-toggle-btn" onclick="document.querySelector('.admin-sidebar').classList.toggle('show'); document.querySelector('.sidebar-overlay').classList.toggle('show');">
            <i data-lucide="menu" width="24" height="24"></i>
        </button>

        <!-- Search -->
        <div class="header-search">
            <i data-lucide="search" class="header-search-icon"></i>
            <input type="search" class="header-search-input" placeholder="Rechercher...">
        </div>
    </div>

    <div class="header-right">
        <!-- Notifications -->
        <div class="dropdown" x-data="{ open: false }">
            <button class="btn btn-ghost btn-icon" @click="open = !open">
                <i data-lucide="bell" width="20" height="20"></i>
            </button>
        </div>

        <!-- User Menu -->
        <div class="dropdown" x-data="{ open: false }">
            <div class="header-user" @click="open = !open">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=1B58A2&color=fff"
                     alt="{{ auth()->user()->name ?? 'Admin' }}"
                     class="header-user-avatar">
                <div class="header-user-info">
                    <div class="header-user-name">{{ auth()->user()->name ?? 'Admin' }}</div>
                    <div class="header-user-role">Administrateur</div>
                </div>
                <i data-lucide="chevron-down" width="16" height="16"></i>
            </div>

            <!-- Dropdown Menu -->
            <div x-show="open"
                 x-transition
                 @click.away="open = false"
                 class="dropdown-menu dropdown-menu-end"
                 style="display: none; position: absolute; right: 0; top: 100%; margin-top: 0.5rem; min-width: 200px; background: white; border-radius: 0.75rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); padding: 0.5rem; z-index: 1000;">

                <a href="{{ route('admin.profile.edit') }}" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.5rem 1rem; border-radius: 0.5rem; text-decoration: none; color: #212529; transition: background-color 0.2s;">
                    <i data-lucide="user" width="16" height="16"></i>
                    <span>Mon profil</span>
                </a>

                <a href="{{ route('admin.settings.index') }}" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.5rem 1rem; border-radius: 0.5rem; text-decoration: none; color: #212529; transition: background-color 0.2s;">
                    <i data-lucide="settings" width="16" height="16"></i>
                    <span>Paramètres</span>
                </a>

                <div style="height: 1px; background-color: #e9ecef; margin: 0.5rem 0;"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.5rem 1rem; border-radius: 0.5rem; background: none; border: none; color: #D90E15; width: 100%; cursor: pointer; transition: background-color 0.2s;">
                        <i data-lucide="log-out" width="16" height="16"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <style>
        .dropdown-item:hover {
            background-color: #f8f9fa !important;
        }
    </style>
</header>
