@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 to-rose-50 py-8">
    <div class="max-w-3xl mx-auto px-6">
        <!-- En-tête -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-900">Créer un nouvel article</h1>
            <p class="text-slate-600 mt-2">Partagez vos idées avec la communauté étudiante</p>
        </div>

        <!-- Formulaire -->
        <div class="bg-white/70 backdrop-blur-sm rounded-xl shadow-sm border border-white/50 p-8">
            <form method="POST" action="{{ route('posts.store') }}" class="space-y-6">
                @csrf

                <!-- Titre -->
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-2">Titre de l'article</label>
                    <input type="text" 
                           id="title" 
                           name="title" 
                           value="{{ old('title') }}"
                           class="block w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50 @error('title') border-red-300 focus:border-red-500 focus:ring-red-500 @enderror"
                           placeholder="Un titre accrocheur pour votre article..."
                           required>
                    @error('title')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Contenu -->
                <div>
                    <label for="content" class="block text-sm font-medium text-slate-700 mb-2">Contenu</label>
                    <textarea id="content" 
                              name="content" 
                              rows="12"
                              class="block w-full px-4 py-3 border border-amber-200 rounded-lg shadow-sm placeholder-slate-400 focus:border-amber-500 focus:ring-amber-500 focus:ring-1 bg-white/50 @error('content') border-red-300 focus:border-red-500 focus:ring-red-500 @enderror"
                              placeholder="Rédigez votre article ici..."
                              required>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Option de publication -->
                <div class="bg-amber-50 rounded-lg p-4 border border-amber-200">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="is_published" 
                                   name="is_published" 
                                   type="checkbox" 
                                   value="1"
                                   {{ old('is_published') ? 'checked' : '' }}
                                   class="focus:ring-amber-500 h-4 w-4 text-amber-600 border-amber-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="is_published" class="font-medium text-amber-800">Publier immédiatement</label>
                            <p class="text-amber-600">Si décoché, l'article sera sauvegardé comme brouillon</p>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex justify-between items-center pt-6 border-t border-slate-200">
                    <a href="{{ route('posts.index') }}" 
                       class="inline-flex items-center px-4 py-2 border border-slate-300 rounded-lg text-sm font-medium text-slate-700 bg-white hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Retour
                    </a>
                    
                    <button type="submit" 
                            class="inline-flex items-center px-6 py-3 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-lg shadow-md transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Créer l'article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
