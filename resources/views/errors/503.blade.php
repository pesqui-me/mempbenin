@extends('errors::layout')

@section('title', 'Service indisponible')

@section('content')
    <h1 class="error-code">503</h1>
    <h2 class="error-title">Service indisponible</h2>
    <p class="error-message">
        Le site est temporairement en maintenance. Nous serons bientôt de retour.
    </p>
    <a href="{{ url('/') }}" class="error-btn">Réessayer</a>
@endsection
