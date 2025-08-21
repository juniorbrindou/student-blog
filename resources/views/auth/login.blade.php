<x-text-input id="email"
          <!-- Remember Me -->
        <div class="flex items-center pt-2">
            <input id="remember_me" type="checkbox"
                class="rounded border-amber-300 text-amber-600 shadow-sm focus:ring-amber-500 focus:ring-offset-0"
                name="remember">
            <label for="remember_me" class="ml-3 text-sm text-slate-600">Se souvenir de moi</label>
        </div>

        <!-- Actions -->
        <div class="block mt-2 w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                placeholder="votre@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Mot de passe')" class="text-slate-700 font-medium" />
            <x-text-input id="password"
                class="block mt-2 w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Bon retour !</h2>
        <p class="mt-3 text-slate-600">Connectez-vous à votre compte Student Blog</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-8">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-medium" />
            <x-text-input id="email"
                class="block mt-1 w-full px-3 py-2 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                placeholder="votre@email.com" />
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
                autocomplete="current-password"
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox"
                class="rounded border-amber-300 text-amber-600 shadow-sm focus:ring-amber-500 focus:ring-offset-0"
                name="remember">
            <label for="remember_me" class="ml-2 text-sm text-slate-600">Se souvenir de moi</label>
        </div>

        <!-- Actions -->
        <div class="space-y-4">
            <button type="submit"
                class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors">
                Se connecter
            </button>            <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="text-sm text-amber-600 hover:text-amber-700 font-medium" href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>
                @endif
            </div>

            <div class="text-center">
                <span class="text-sm text-slate-600">Pas encore de compte ?</span>
                <a href="{{ route('register') }}" class="text-sm text-amber-600 hover:text-amber-700 font-semibold ml-1">
                    S'inscrire gratuitement
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
