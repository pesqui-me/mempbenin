<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin' }} - MEMP Bénin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles & Scripts -->
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        @include('layouts.partials.admin.sidebar')

        <!-- Main Content -->
        <div class="admin-main">
            <!-- Header -->
            @include('layouts.partials.admin.header')

            <!-- Content -->
            <main class="admin-content">
                {{ $slot }}
            </main>

            <!-- Footer -->
            @include('layouts.partials.admin.footer')
        </div>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay" onclick="this.classList.remove('show'); document.querySelector('.admin-sidebar').classList.remove('show');"></div>

    <style>
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .sidebar-overlay.show {
            display: block;
        }

        @media (max-width: 991px) {
            .admin-sidebar.show + .admin-main {
                overflow: hidden;
            }
        }
    </style>

    <!-- Page Scripts -->
    @stack('scripts')
</body>
</html>
