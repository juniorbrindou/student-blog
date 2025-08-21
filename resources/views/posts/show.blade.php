@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 to-rose-50 py-8">
    <div class="max-w-4xl mx-auto px-6">
        
        <!-- Navigation -->
        <div class="mb-8">
            <a href="{{ route('posts.index') }}" 
               class="inline-flex items-center text-amber-600 hover:text-amber-700 font-medium">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Retour aux articles
            </a>
        </div>

        <!-- Article -->
        <article class="bg-white/70 backdrop-blur-sm rounded-xl shadow-sm border border-white/50 p-8">
            
            <!-- En-tête de l'article -->
            <header class="mb-8 pb-6 border-b border-slate-200">
                <h1 class="text-4xl font-bold text-slate-900 mb-4">{{ $post->title }}</h1>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4 text-sm text-slate-600">
                        <span>Par <strong class="text-slate-900">{{ $post->user->name }}</strong></span>
                        <span>•</span>
                        <span>{{ $post->published_at ? $post->published_at->format('d M Y à H:i') : 'Brouillon' }}</span>
                    </div>
                    
                    @auth
                    @if($post->user_id === auth()->id())
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('posts.edit', $post) }}" 
                           class="inline-flex items-center px-3 py-1.5 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium rounded-lg text-sm transition-colors">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Modifier
                        </a>
                        
                        <form method="POST" action="{{ route('posts.destroy', $post) }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')"
                                    class="inline-flex items-center px-3 py-1.5 bg-red-100 hover:bg-red-200 text-red-700 font-medium rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                Supprimer
                            </button>
                        </form>
                    </div>
                    @endif
                    @endauth
                </div>

                @if(!$post->is_published)
                <div class="mt-4 p-3 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <span class="text-yellow-800 font-medium">Cet article est un brouillon et n'est pas visible publiquement.</span>
                    </div>
                </div>
                @endif
            </header>

            <!-- Contenu de l'article -->
            <div class="prose prose-lg max-w-none text-slate-700 leading-relaxed">
                {!! nl2br(e($post->content)) !!}
            </div>
        </article>

        @if(session('success'))
        <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-lg">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-green-800">{{ session('success') }}</span>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
