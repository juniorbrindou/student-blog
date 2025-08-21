<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased min-h-screen relative overflow-x-hidden">
        <!-- Background moderne avec dégradé et formes -->
        <div class="fixed inset-0 bg-gradient-to-br from-amber-50 via-white to-rose-50"></div>
        <div class="fixed inset-0 bg-gradient-to-tr from-transparent via-amber-50/30 to-fuchsia-50/20"></div>

        <!-- Éléments décoratifs -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none">
            <!-- Cercles décoratifs -->
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-amber-200/20 to-rose-200/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-tr from-fuchsia-200/20 to-amber-200/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-rose-100/10 to-amber-100/10 rounded-full blur-3xl"></div>

            <!-- Points décoratifs -->
            <div class="absolute top-20 left-20 w-2 h-2 bg-amber-300/40 rounded-full"></div>
            <div class="absolute top-40 right-32 w-1 h-1 bg-rose-300/60 rounded-full"></div>
            <div class="absolute bottom-32 left-16 w-3 h-3 bg-fuchsia-200/50 rounded-full"></div>
            <div class="absolute bottom-20 right-20 w-2 h-2 bg-amber-200/50 rounded-full"></div>
        </div>
        <!-- Header avec logo -->
        <header class="relative z-40 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-amber-100/50">
            <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <a href="/" class="flex items-center gap-2 font-semibold text-amber-700 hover:text-amber-800 transition-colors">
                    <div class="relative">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7.5l9-4.5 9 4.5M3 7.5l9 4.5m0 0l9-4.5m-9 4.5V21" />
                        </svg>
                        <div class="absolute -inset-1 bg-amber-200/20 rounded-lg blur-sm"></div>
                    </div>
                    Student Blog
                </a>
                <div class="flex items-center gap-2">
                    <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-slate-700 hover:text-amber-700 hover:bg-amber-50/50 rounded-lg transition-all duration-200">
                        Se connecter
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold text-white bg-gradient-to-r bg-amber-600 bg-amber-700 hover:from-amber-700 hover:to-amber-800 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                        S'inscrire
                    </a>
                </div>
            </nav>
        </header>

        <!-- Contenu principal -->
        <div class="relative z-10 min-h-[calc(100vh-4rem)] flex flex-col sm:justify-center items-center py-12 px-4">
            <!-- Card d'authentification avec effet glassmorphism -->
            <div class="w-full sm:max-w-lg mt-6 px-10 py-12 bg-white/70 backdrop-blur-xl border border-white/20 shadow-2xl shadow-amber-500/10 overflow-hidden sm:rounded-2xl relative">
                <!-- Bordure lumineuse subtile -->
                <div class="absolute inset-0 bg-gradient-to-r from-amber-500/5 via-transparent to-rose-500/5 rounded-2xl"></div>
                <div class="relative z-10">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
