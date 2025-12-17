@extends('errors::layout')

@section('title', 'Page expirée')

@section('content')
    <h1 class="error-code">419</h1>
    <h2 class="error-title">Page expirée</h2>
    <p class="error-message">
        Votre session a expiré. Veuillez rafraîchir la page et réessayer.
    </p>
    <a href="{{ url()->previous() }}" class="error-btn">Revenir en arrière</a>
@endsection
