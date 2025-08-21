<x-guest-layout>
    <!-- Titre -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Vérifiez votre email</h2>
        <p class="mt-3 text-slate-600">Merci pour votre inscription ! Veuillez vérifier votre adresse email en cliquant sur le lien que nous venons de vous envoyer.</p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-green-800 font-medium">Un nouveau lien de vérification a été envoyé à votre adresse email !</span>
            </div>
        </div>
    @endif

    <div class="space-y-4">
        <!-- Bouton de renvoi -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit"
                class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a1 1 0 001.415 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Renvoyer l'email de vérification
            </button>
        </form>

        <!-- Instructions -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
            <div class="flex">
                <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="text-sm text-blue-800">
                    <p class="font-medium mb-1">Email non reçu ?</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Vérifiez votre dossier spam/courrier indésirable</li>
                        <li>Assurez-vous que l'adresse email est correcte</li>
                        <li>Cliquez sur "Renvoyer" si nécessaire</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Déconnexion -->
        <div class="text-center pt-4 border-t border-slate-200">
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-sm text-slate-600 hover:text-slate-700 font-medium">
                    Se déconnecter
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
