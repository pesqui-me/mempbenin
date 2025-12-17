<x-auth-layout>
    <x-slot:title>Mot de passe oublié</x-slot>

    <div class="auth-card">
        <div class="auth-header">
            <div class="auth-logo">
                <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="8" fill="#1B58A2"/>
                    <path d="M20 10L30 15V25L20 30L10 25V15L20 10Z" fill="white"/>
                    <circle cx="20" cy="20" r="4" fill="#FFE11B"/>
                </svg>
            </div>
            <h1 class="auth-title">Mot de passe oublié</h1>
            <p class="auth-subtitle">Réinitialisez votre mot de passe</p>
        </div>

        <div class="auth-body">
            <div class="alert alert-info" style="margin-bottom: 1.5rem;">
                <i data-lucide="info" width="20" height="20"></i>
                <span>Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.</span>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    <i data-lucide="check-circle" width="20" height="20"></i>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') error @enderror"
                        required
                        autofocus
                        placeholder="votre.email@memp.bj"
                    >
                    @error('email')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn-primary">
                        Envoyer le lien de réinitialisation
                    </button>
                </div>

                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="auth-link">
                        Retour à la connexion
                    </a>
                </div>
            </form>
        </div>

        <div class="auth-footer">
            <p>&copy; {{ date('Y') }} MEMP Bénin. Tous droits réservés.</p>
        </div>
    </div>
</x-auth-layout>
