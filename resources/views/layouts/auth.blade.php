<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Authentification' }} - MEMP Bénin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles -->
    @vite(['resources/css/guest.css', 'resources/js/guest.js'])

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #1B58A2 0%, #0065A1 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .auth-container {
            width: 100%;
            max-width: 480px;
        }

        .auth-card {
            background: white;
            border-radius: 1.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .auth-header {
            background: linear-gradient(135deg, #1B58A2 0%, #0065A1 100%);
            padding: 3rem 2rem;
            text-align: center;
            color: white;
        }

        .auth-logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: white;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-logo svg {
            width: 50px;
            height: 50px;
        }

        .auth-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0 0 0.5rem;
        }

        .auth-subtitle {
            font-size: 0.95rem;
            opacity: 0.9;
            margin: 0;
        }

        .auth-body {
            padding: 2.5rem 2rem;
        }

        .auth-footer {
            padding: 1.5rem 2rem;
            background: #f8f9fa;
            text-align: center;
            font-size: 0.875rem;
            color: #6c757d;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #212529;
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            border: 2px solid #dee2e6;
            border-radius: 0.75rem;
            transition: all 0.2s;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: #1B58A2;
            box-shadow: 0 0 0 4px rgba(27, 88, 162, 0.1);
        }

        .form-control.error {
            border-color: #D90E15;
        }

        .form-error {
            color: #D90E15;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: block;
        }

        .btn-primary {
            width: 100%;
            padding: 0.875rem 1.5rem;
            background: linear-gradient(135deg, #1B58A2 0%, #0065A1 100%);
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(27, 88, 162, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .form-checkbox {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #1B58A2;
        }

        .auth-link {
            color: #1B58A2;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .auth-link:hover {
            color: #0065A1;
            text-decoration: underline;
        }

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .alert {
            padding: 1rem 1.25rem;
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert-success {
            background: rgba(0, 136, 89, 0.1);
            color: #008859;
            border: 2px solid rgba(0, 136, 89, 0.3);
        }

        .alert-error {
            background: rgba(217, 14, 21, 0.1);
            color: #D90E15;
            border: 2px solid rgba(217, 14, 21, 0.3);
        }

        .alert-info {
            background: rgba(27, 88, 162, 0.1);
            color: #1B58A2;
            border: 2px solid rgba(27, 88, 162, 0.3);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.5rem 0;
            color: #6c757d;
            font-size: 0.875rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }

        .divider span {
            padding: 0 1rem;
        }

        @media (max-width: 576px) {
            .auth-header {
                padding: 2rem 1.5rem;
            }

            .auth-body {
                padding: 2rem 1.5rem;
            }

            .auth-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        {{ $slot }}
    </div>
</body>
</html>
