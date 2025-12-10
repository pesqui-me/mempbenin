<aside class="admin-sidebar">
    <!-- Brand -->
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand-link">
            <svg class="sidebar-brand-logo" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="40" height="40" rx="8" fill="white"/>
                <path d="M20 10L30 15V25L20 30L10 25V15L20 10Z" fill="#1B58A2"/>
                <circle cx="20" cy="20" r="4" fill="#FFE11B"/>
            </svg>
            <span>MEMP Bénin</span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav">
        <!-- Dashboard -->
        <div class="sidebar-nav-item">
            <a href="{{ route('admin.dashboard') }}"
               class="sidebar-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i data-lucide="layout-dashboard" class="sidebar-nav-icon"></i>
                <span>Tableau de bord</span>
            </a>
        </div>

        <div class="sidebar-divider"></div>

        <!-- Content Management -->
        <div class="sidebar-nav-item">
            <a href="{{ route('admin.posts.index') }}"
               class="sidebar-nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                <i data-lucide="file-text" class="sidebar-nav-icon"></i>
                <span>Actualités</span>
            </a>
        </div>

        <div class="sidebar-nav-item">
            <a href="{{ route('admin.communiques.index') }}"
               class="sidebar-nav-link {{ request()->routeIs('admin.communiques.*') ? 'active' : '' }}">
                <i data-lucide="megaphone" class="sidebar-nav-icon"></i>
                <span>Communiqués</span>
            </a>
        </div>

        <div class="sidebar-nav-item">
            <a href="{{ route('admin.categories.index') }}"
               class="sidebar-nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <i data-lucide="folder-open" class="sidebar-nav-icon"></i>
                <span>Catégories</span>
            </a>
        </div>

        <div class="sidebar-divider"></div>

        <!-- Media & Users -->
        <div class="sidebar-nav-item">
            <a href="{{ route('admin.media.index') }}"
               class="sidebar-nav-link {{ request()->routeIs('admin.media.*') ? 'active' : '' }}">
                <i data-lucide="image" class="sidebar-nav-icon"></i>
                <span>Médiathèque</span>
            </a>
        </div>

        <div class="sidebar-nav-item">
            <a href="{{ route('admin.users.index') }}"
               class="sidebar-nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i data-lucide="users" class="sidebar-nav-icon"></i>
                <span>Utilisateurs</span>
            </a>
        </div>

        <div class="sidebar-divider"></div>

        <!-- Settings -->
        <div class="sidebar-nav-item">
            <a href="{{ route('admin.settings.index') }}"
               class="sidebar-nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <i data-lucide="settings" class="sidebar-nav-icon"></i>
                <span>Paramètres</span>
            </a>
        </div>
    </nav>
</aside>
