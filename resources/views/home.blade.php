<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Blog — Accueil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-amber-50 via-white to-rose-50 text-slate-800">
    <!-- Nav -->
    <header class="sticky top-0 z-40 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-amber-100">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 font-semibold text-amber-700">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7.5l9-4.5 9 4.5M3 7.5l9 4.5m0 0l9-4.5m-9 4.5V21" />
                </svg>
                Student Blog
            </a>
            <div class="flex items-center gap-2">
                @guest
                    <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-amber-700">Se connecter</a>
                    <a href="{{ route('register') }}" class="px-3 py-2 text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 rounded-md">S'inscrire</a>
                @endguest
                @auth
                    <a href="/admin" class="px-3 py-2 text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 rounded-md">Aller au tableau de bord</a>
                @endauth
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 sm:py-24">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900">
                        Partage tes idées. <span class="text-amber-600">Inspire</span> ta communauté.
                    </h1>
                    <p class="mt-6 text-lg leading-7 text-slate-600">
                        Une plateforme simple et élégante pour publier des articles, gérer tes contenus et engager tes lecteurs — boostée par Laravel & Filament.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        @guest
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-md bg-amber-600 px-5 py-3 text-base font-semibold text-white shadow-sm hover:bg-amber-700">
                                Commencer gratuitement
                            </a>
                            <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-md px-5 py-3 text-base font-semibold text-amber-700 ring-1 ring-inset ring-amber-200 hover:bg-amber-50">
                                J'ai déjà un compte
                            </a>
                        @endguest
                        @auth
                            <a href="{{ route('posts.create') }}" class="inline-flex items-center justify-center rounded-md bg-amber-600 px-5 py-3 text-base font-semibold text-white shadow-sm hover:bg-amber-700">
                                Écrire un article
                            </a>
                            <a href="{{ route('posts.index') }}" class="inline-flex items-center justify-center rounded-md px-5 py-3 text-base font-semibold text-amber-700 ring-1 ring-inset ring-amber-200 hover:bg-amber-50">
                                Voir tous les articles
                            </a>
                        @endauth
                        @auth
                            <a href="/admin" class="inline-flex items-center justify-center rounded-md bg-rose-600 px-5 py-3 text-base font-semibold text-white shadow-sm hover:bg-rose-700">
                                Ouvrir l'admin
                            </a>
                        @endauth
                    </div>
                    <div class="mt-8 flex items-center gap-6 text-sm text-slate-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75"/></svg>
                            Auth & sécurité incluses
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7.5l9-4.5 9 4.5M4.5 8.25L12 12l7.5-3.75M4.5 12.75L12 16.5l7.5-3.75M4.5 17.25L12 21l7.5-3.75"/></svg>
                            Admin Filament prêt à l'emploi
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-2xl border border-amber-100 bg-white/70 backdrop-blur p-4 shadow-xl">
                        <div class="aspect-[16/10] w-full rounded-xl bg-gradient-to-br from-amber-200 via-rose-200 to-fuchsia-200 flex items-center justify-center">
                            <div class="text-center">
                                <p class="text-sm uppercase tracking-wider text-amber-700/80">Aperçu</p>
                                <p class="mt-2 text-2xl font-bold text-slate-800">Tableau de bord Filament</p>
                                <p class="mt-2 text-slate-600">Gestion des utilisateurs, des articles et plus…</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-12 sm:py-16 bg-white/60 border-t border-amber-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-xl border border-amber-100 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 8.25h9m-9 3.75h9m-9 3.75h6M3.75 6A2.25 2.25 0 016 3.75h12A2.25 2.25 0 0120.75 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6z"/></svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold">Écris et publie</h3>
                    <p class="mt-2 text-slate-600">Crée des articles en toute simplicité avec une interface claire et moderne.</p>
                </div>
                <div class="rounded-xl border border-rose-100 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-rose-100 text-rose-700 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 8.25h9m-9 3.75h9m-9 3.75h6M3.75 6A2.25 2.25 0 016 3.75h12A2.25 2.25 0 0120.75 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6z"/></svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold">Admin puissant</h3>
                    <p class="mt-2 text-slate-600">Pilote tout depuis Filament : utilisateurs, contenus, médias…</p>
                </div>
                <div class="rounded-xl border border-fuchsia-100 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-fuchsia-100 text-fuchsia-700 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6l3 3"/></svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold">Rapide & moderne</h3>
                    <p class="mt-2 text-slate-600">Propulsé par Laravel, Vite et Tailwind pour des performances au top.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-8 text-center text-sm text-slate-500">
        © {{ date('Y') }} Student Blog. Fait avec Laravel & Filament.
    </footer>
</body>
</html>
