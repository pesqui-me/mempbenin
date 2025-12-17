@extends('errors::layout')

@section('title', 'Erreur serveur')

@section('content')
    <div class="error-icon">
        <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="60" cy="60" r="60" fill="#f8f9fa"/>
            <path d="M60 30L85 75H35L60 30Z" fill="#D90E15"/>
            <circle cx="60" cy="67" r="3" fill="white"/>
            <rect x="57" y="50" width="6" height="12" fill="white"/>
        </svg>
    </div>
    <h1 class="error-code">500</h1>
    <h2 class="error-title">Erreur serveur</h2>
    <p class="error-message">
        Une erreur s'est produite sur nos serveurs. Nos équipes techniques ont été notifiées et travaillent à la résoudre.
    </p>
    <a href="{{ url('/') }}" class="error-btn">Retour à l'accueil</a>
@endsection
