<x-auth-layout>
    <x-slot:title>Réinitialiser le mot de passe</x-slot>

    <div class="auth-card">
        <div class="auth-header">
            <div class="auth-logo">
                <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="8" fill="#1B58A2"/>
                    <path d="M20 10L30 15V25L20 30L10 25V15L20 10Z" fill="white"/>
                    <circle cx="20" cy="20" r="4" fill="#FFE11B"/>
                </svg>
            </div>
            <h1 class="auth-title">Nouveau mot de passe</h1>
            <p class="auth-subtitle">Choisissez un mot de passe sécurisé</p>
        </div>

        <div class="auth-body">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-group">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email', $request->email) }}"
                        class="form-control @error('email') error @enderror"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('email')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Nouveau mot de passe</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="form-control @error('password') error @enderror"
                        required
                        autocomplete="new-password"
                        placeholder="Minimum 8 caractères"
                    >
                    @error('password')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        required
                        autocomplete="new-password"
                        placeholder="Retapez votre mot de passe"
                    >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn-primary">
                        Réinitialiser le mot de passe
                    </button>
                </div>
            </form>
        </div>

        <div class="auth-footer">
            <p>&copy; {{ date('Y') }} MEMP Bénin. Tous droits réservés.</p>
        </div>
    </div>
</x-auth-layout>
