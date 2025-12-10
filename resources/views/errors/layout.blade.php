<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - MEMP Bénin</title>
    @vite(['resources/css/guest.css', 'resources/js/guest.js'])
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #1B58A2 0%, #0065A1 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        .error-container {
            max-width: 600px;
            text-align: center;
            background: white;
            border-radius: 1.5rem;
            padding: 3rem 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        .error-code {
            font-size: 6rem;
            font-weight: 700;
            background: linear-gradient(135deg, #1B58A2, #0065A1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0;
            line-height: 1;
        }
        .error-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #212529;
            margin: 1.5rem 0 1rem;
        }
        .error-message {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .error-btn {
            display: inline-block;
            padding: 0.875rem 2rem;
            background: linear-gradient(135deg, #1B58A2, #0065A1);
            color: white;
            text-decoration: none;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .error-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(27, 88, 162, 0.3);
            color: white;
        }
        .error-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 2rem;
        }
    </style>
</head>
<body>
    <div class="error-container">
        @yield('content')
    </div>
</body>
</html>
