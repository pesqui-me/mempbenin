<x-auth-layout>
    <x-slot:title>Connexion</x-slot>

    <div class="auth-card">
        <!-- Header -->
        <div class="auth-header">
            {{-- <div class="auth-logo">
                <img src="{{ asset('assets/common/images/identity/memp_light.png') }}" 
                     alt="MEMP" width="250px" />
            </div> --}}
            <h1 class="auth-title">Connexion</h1>
            <p class="auth-subtitle">Bienvenue sur l'espace MEMP Bénin</p>
        </div>

        <!-- Body -->
        <div class="auth-body">
            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success">
                    <i data-lucide="check-circle" width="20" height="20"></i>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
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
                        autocomplete="username"
                        placeholder="votre.email@memp.bj"
                    >
                    @error('email')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="form-control @error('password') error @enderror"
                        required
                        autocomplete="current-password"
                        placeholder="••••••••"
                    >
                    @error('password')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-group">
                    <label class="form-checkbox">
                        <input type="checkbox" name="remember" id="remember">
                        <span>Se souvenir de moi</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn-primary">
                        Se connecter
                    </button>
                </div>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}" class="auth-link">
                            Mot de passe oublié ?
                        </a>
                    </div>
                @endif
            </form>
        </div>

        <!-- Footer -->
        <div class="auth-footer">
            <span>&copy; {{ date('Y') }} MEMP Bénin. Tous droits réservés.</span>
        </div>
    </div>
</x-auth-layout>
