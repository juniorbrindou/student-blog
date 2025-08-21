<x-guest-layout>
    <!-- Titre -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Confirmation sécurisée</h2>
        <p class="mt-3 text-slate-600">Veuillez confirmer votre mot de passe pour continuer vers cette zone sécurisée.</p>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-8">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Mot de passe')" class="text-slate-700 font-medium" />
            <x-text-input id="password"
                class="block mt-2 w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Actions -->
        <div class="space-y-4">
            <button type="submit"
                class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Confirmer
            </button>

            <div class="text-center">
                <a href="{{ url()->previous() }}" class="text-sm text-amber-600 hover:text-amber-700 font-semibold">
                    Retour
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
