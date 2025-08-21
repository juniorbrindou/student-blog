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
    <body class="font-sans text-slate-900 antialiased bg-gradient-to-br from-amber-50 via-white to-rose-50 min-h-screen">
        <!-- Header avec logo -->
        <header class="sticky top-0 z-40 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-amber-100">
            <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <a href="/" class="flex items-center gap-2 font-semibold text-amber-700">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7.5l9-4.5 9 4.5M3 7.5l9 4.5m0 0l9-4.5m-9 4.5V21" />
                    </svg>
                    Student Blog
                </a>
                <div class="flex items-center gap-2">
                    <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-amber-700">Se connecter</a>
                    <a href="{{ route('register') }}" class="px-3 py-2 text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 rounded-md">S'inscrire</a>
                </div>
            </nav>
        </header>

        <!-- Contenu principal -->
        <div class="min-h-[calc(100vh-4rem)] flex flex-col sm:justify-center items-center py-12 px-4">
            <!-- Card d'authentification -->
            <div class="w-full sm:max-w-lg mt-6 px-10 py-12 bg-white/70 backdrop-blur border border-amber-100 shadow-xl overflow-hidden sm:rounded-2xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
