@extends('errors::layout')

@section('title', 'Page non trouvée')

@section('content')
    <div class="error-icon">
        <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="60" cy="60" r="60" fill="#f8f9fa"/>
            <path d="M60 30C43.431 30 30 43.431 30 60C30 76.569 43.431 90 60 90C76.569 90 90 76.569 90 60C90 43.431 76.569 30 60 30ZM55 50C55 47.239 57.239 45 60 45C62.761 45 65 47.239 65 50C65 52.761 62.761 55 60 55C57.239 55 55 52.761 55 50ZM65 75H55V60H65V75Z" fill="#1B58A2"/>
        </svg>
    </div>
    <h1 class="error-code">404</h1>
    <h2 class="error-title">Page non trouvée</h2>
    <p class="error-message">
        Désolé, la page que vous recherchez n'existe pas ou a été déplacée.
    </p>
    <a href="{{ url('/') }}" class="error-btn">Retour à l'accueil</a>
@endsection
