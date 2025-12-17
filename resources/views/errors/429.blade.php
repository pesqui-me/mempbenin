@extends('errors::layout')

@section('title', 'Trop de requêtes')

@section('content')
    <h1 class="error-code">429</h1>
    <h2 class="error-title">Trop de requêtes</h2>
    <p class="error-message">
        Vous avez effectué trop de requêtes. Veuillez patienter quelques instants avant de réessayer.
    </p>
    <a href="{{ url('/') }}" class="error-btn">Retour à l'accueil</a>
@endsection
