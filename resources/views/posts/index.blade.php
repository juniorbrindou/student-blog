@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 to-rose-50 py-8">
    <div class="max-w-4xl mx-auto px-6">
        <!-- En-tête -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900">Articles du Blog</h1>
                <p class="text-slate-600 mt-2">Découvrez les derniers articles de la communauté étudiante</p>
            </div>

            @auth
            <a href="{{ route('posts.create') }}"
               class="inline-flex items-center px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-lg shadow-md transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Nouvel Article
            </a>
            @endauth
        </div>

        <!-- Liste des articles -->
        <div class="space-y-6">
            @forelse($posts as $post)
            <article class="bg-white/70 backdrop-blur-sm rounded-xl shadow-sm border border-white/50 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <h2 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="{{ route('posts.show', $post) }}" class="hover:text-amber-600 transition-colors">
                                {{ $post->title }}
                            </a>
                        </h2>

                        <div class="text-sm text-slate-500 mb-3 flex items-center space-x-4">
                            <span>Par {{ $post->author_name }}</span>
                            <span>•</span>
                            <span>{{ $post->published_at->format('d M Y') }}</span>
                        </div>

                        <p class="text-slate-700 leading-relaxed">
                            {{ Str::limit(strip_tags($post->content), 200) }}
                        </p>

                        <div class="mt-4">
                            <a href="{{ route('posts.show', $post) }}"
                               class="inline-flex items-center text-amber-600 hover:text-amber-700 font-medium">
                                Lire la suite
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            @empty
            <div class="text-center py-12">
                <svg class="w-16 h-16 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="text-lg font-medium text-slate-900 mb-2">Aucun article pour le moment</h3>
                <p class="text-slate-600 mb-6">Soyez le premier à partager vos idées avec la communauté !</p>

                @auth
                <a href="{{ route('posts.create') }}"
                   class="inline-flex items-center px-6 py-3 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-lg shadow-md transition-colors">
                    Écrire un article
                </a>
                @else
                <div class="space-x-4">
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center px-6 py-3 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-lg shadow-md transition-colors">
                        Se connecter pour écrire
                    </a>
                </div>
                @endauth
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($posts->hasPages())
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
