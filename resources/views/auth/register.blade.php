<x-guest-layout>
    <!-- Titre -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Créer un compte</h2>
        <p class="mt-3 text-slate-600">Rejoignez Student Blog et partagez vos idées</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-8">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom complet')" class="text-slate-700 font-medium" />
            <x-text-input id="name"
                class="block mt-1 w-full px-3 py-2 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
                placeholder="Jean Dupont" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-medium" />
            <x-text-input id="email"
                class="block mt-1 w-full px-3 py-2 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username"
                placeholder="jean@exemple.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Mot de passe')" class="text-slate-700 font-medium" />
            <x-text-input id="password"
                class="block mt-1 w-full px-3 py-2 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
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
                class="block mt-1 w-full px-3 py-2 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
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
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors">
                Créer mon compte
            </button>

            <div class="text-center">
                <span class="text-sm text-slate-600">Déjà un compte ?</span>
                <a href="{{ route('login') }}" class="text-sm text-amber-600 hover:text-amber-700 font-semibold ml-1">
                    Se connecter
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
