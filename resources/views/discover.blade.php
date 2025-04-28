@extends('layouts.app')

@section('title', 'Découvrir')

@section('content')
<section class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-12 text-orange-500">Découvrir des histoires</h1>

    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Livre 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="{{ asset('img/book1.jpg') }}" alt="Histoire 1" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Le Voyageur du Temps</h2>
                <p class="text-gray-600 text-sm mb-4">Un jeune garçon découvre un portail secret vers d'autres époques...</p>
                <a href="#" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
            </div>
        </div>

        <!-- Livre 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="{{ asset('img/book2.jpg') }}" alt="Histoire 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">L'Ombre de la Forêt</h2>
                <p class="text-gray-600 text-sm mb-4">Une aventure mystérieuse au cœur d'une forêt enchantée...</p>
                <a href="#" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
            </div>
        </div>

        <!-- Livre 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="{{ asset('img/book3.jpg') }}" alt="Histoire 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Sous les Étoiles</h2>
                <p class="text-gray-600 text-sm mb-4">Une histoire d'amour et de rêves sous un ciel étoilé...</p>
                <a href="#" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
            </div>
        </div>

        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
</section>
@endsection