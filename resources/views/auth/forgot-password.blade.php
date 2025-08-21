<x-guest-layout>
    <!-- Titre -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Mot de passe oublié ?</h2>
        <p class="mt-3 text-slate-600">Aucun problème ! Entrez votre email et nous vous enverrons un lien de réinitialisation.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-8">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Adresse email')" class="text-slate-700 font-medium" />
            <x-text-input id="email"
                class="block mt-2 w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                placeholder="votre@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Actions -->
        <div class="space-y-4">
            <button type="submit"
                class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a1 1 0 001.415 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Envoyer le lien de réinitialisation
            </button>

            <div class="text-center">
                <span class="text-sm text-slate-600">Vous vous souvenez de votre mot de passe ?</span>
                <a href="{{ route('login') }}" class="text-sm text-amber-600 hover:text-amber-700 font-semibold ml-1">
                    Retour à la connexion
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
