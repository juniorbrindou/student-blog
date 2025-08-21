<x-guest-layout>
    <!-- Titre -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Nouveau mot de passe</h2>
        <p class="mt-3 text-slate-600">Choisissez un nouveau mot de passe sécurisé pour votre compte</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-8">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Adresse email')" class="text-slate-700 font-medium" />
            <x-text-input id="email"
                class="block mt-2 w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="email"
                name="email"
                :value="old('email', $request->email)"
                required
                autofocus
                autocomplete="username"
                readonly />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Nouveau mot de passe')" class="text-slate-700 font-medium" />
            <x-text-input id="password"
                class="block mt-2 w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" class="text-slate-700 font-medium" />
            <x-text-input id="password_confirmation"
                class="block mt-2 w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Actions -->
        <div class="space-y-4">
            <button type="submit"
                class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                Réinitialiser le mot de passe
            </button>

            <div class="text-center">
                <a href="{{ route('login') }}" class="text-sm text-amber-600 hover:text-amber-700 font-semibold">
                    Retour à la connexion
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
