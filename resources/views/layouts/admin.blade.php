<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - Administration</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    {{-- Bootstrap 5.3.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Custom Admin CSS --}}
    <link href="{{ asset('assets/admin/css/admin.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div class="wrapper">
        {{-- Sidebar --}}
        @include('layouts.admin.sidebar')

        {{-- Main Content --}}
        <div class="main-content">
            {{-- Header --}}
            @include('layouts.admin.header')

            {{-- Page Content --}}
            <div class="page-wrapper">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>

            {{-- Footer --}}
            @include('layouts.admin.footer')
        </div>
    </div>

    {{-- Overlay for mobile --}}
    <div class="sidebar-overlay"></div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- Custom Admin JS --}}
    <script src="{{ asset('assets/admin/js/admin.js') }}"></script>

    @stack('scripts')
</body>
</html>
