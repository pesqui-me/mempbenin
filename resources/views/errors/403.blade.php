@extends('errors::layout')

@section('title', 'Accès interdit')

@section('content')
    <h1 class="error-code">403</h1>
    <h2 class="error-title">Accès interdit</h2>
    <p class="error-message">
        Vous n'avez pas les permissions nécessaires pour accéder à cette page.
    </p>
    <a href="{{ url('/') }}" class="error-btn">Retour à l'accueil</a>
@endsection
