<x-auth-layout>
    <x-slot:title>Vérification de l'email</x-slot>

    <div class="auth-card">
        <div class="auth-header">
            <div class="auth-logo">
                <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="8" fill="#1B58A2"/>
                    <path d="M20 10L30 15V25L20 30L10 25V15L20 10Z" fill="white"/>
                    <circle cx="20" cy="20" r="4" fill="#FFE11B"/>
                </svg>
            </div>
            <h1 class="auth-title">Vérification e-mail</h1>
            <p class="auth-subtitle">Confirmez votre adresse e-mail</p>
        </div>

        <div class="auth-body">
            <div class="alert alert-info" style="margin-bottom: 1.5rem;">
                <i data-lucide="mail" width="20" height="20"></i>
                <span>Un lien de vérification a été envoyé à votre adresse e-mail. Veuillez cliquer sur le lien pour activer votre compte.</span>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success">
                    <i data-lucide="check-circle" width="20" height="20"></i>
                    <span>Un nouveau lien de vérification a été envoyé !</span>
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn-primary">
                        Renvoyer l'e-mail de vérification
                    </button>
                </div>
            </form>

            <div class="divider">
                <span>OU</span>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="text-center">
                    <button type="submit" class="auth-link">
                        Se déconnecter
                    </button>
                </div>
            </form>
        </div>

        <div class="auth-footer">
            <p>&copy; {{ date('Y') }} MEMP Bénin. Tous droits réservés.</p>
        </div>
    </div>
</x-auth-layout>
