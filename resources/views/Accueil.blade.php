@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container mx-auto">

    <!-- Slider -->
    <div class="relative overflow-hidden rounded-lg shadow-lg mb-12">
        <div class="relative w-full h-64">
            <div class="absolute inset-0 animate-slide">
                <img src="{{ asset('img/bikes.png') }}" alt="Image 1" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 animate-slide delay-3000">
                <img src="{{ asset('img/blue.png') }}" alt="Image 2" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 animate-slide delay-6000">
                <img src="{{ asset('img/notes.png') }}" alt="Image 3" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- Présentation -->
    <div class="mt-12 text-center">
        <h1 class="text-5xl font-bold text-gray-800">Bienvenue sur MonBlog !</h1>
        <p class="mt-4 text-lg text-gray-600">Découvrez, lisez et écrivez vos Livres préférées. Rejoignez notre communauté de scientifiques et de  lecteurs passionnés.</p>
        <a href="{{ route('discover') }}" class="mt-6 inline-block px-8 py-4 orange-button rounded-full text-lg shadow-md hover:bg-orange-600 transition-all duration-300">Commencer</a>
    </div>

    <!-- Sections supplémentaires -->
    <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="text-center bg-white p-8 rounded-lg shadow-lg">
            <i class="fas fa-book-open text-5xl text-orange-500 mb-4"></i>
            <h3 class="text-2xl font-semibold text-gray-800">Lisez des Histoires</h3>
            <p class="mt-2 text-gray-600">Explorez une vaste bibliothèque de LIvre à la fois éducative que captivantes écrites par des auteurs du monde entier.</p>
        </div>
        <div class="text-center bg-white p-8 rounded-lg shadow-lg">
            <i class="fas fa-pencil-alt text-5xl text-orange-500 mb-4"></i>
            <h3 class="text-2xl font-semibold text-gray-800">Écrivez Vos Prores</h3>
            <p class="mt-2 text-gray-600">Exprimez-vous et partagez vos récits avec une communauté grandissante d'écrivains et de lecteurs.</p>
        </div>
        <div class="text-center bg-white p-8 rounded-lg shadow-lg">
            <i class="fas fa-users text-5xl text-orange-500 mb-4"></i>
            <h3 class="text-2xl font-semibold text-gray-800">Rejoignez la Communauté</h3>
            <p class="mt-2 text-gray-600">Connectez-vous avec d'autres passionnés et échangez des idées, conseils et inspirations.</p>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="mt-16 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Vous êtes prêts à commencer ?</h2>
        <p class="mt-4 text-lg text-gray-600">Rejoignez-nous et commencez à faire partie d'une Communauté scientifique aujourd'hui !</p>
        <a href="{{ route('register') }}" class="mt-6 inline-block px-8 py-4 bg-orange-500 text-black rounded-full text-lg shadow-md hover:bg-orange-600 transition-all duration-300 flex items-center justify-center">
            <i class="fas fa-user-plus text-black mr-2"></i> Inscription
        </a>


    </div>

</div>

<style>
    @keyframes slideShow {

        0%,
        25% {
            opacity: 1;
        }

        30%,
        100% {
            opacity: 0;
        }
    }

    .animate-slide {
        animation: slideShow 9s infinite;
        position: absolute;
    }

    .animate-slide.delay-3000 {
        animation-delay: 3s;
    }

    .animate-slide.delay-6000 {
        animation-delay: 6s;
    }

    .orange-button {
        background-color: #ff5722;
        color: white;
        transition: background-color 0.3s;
    }

    .orange-button:hover {
        background-color: #e64a19;
    }

    /* Effet hover sur les cartes des services */
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
</style>
@endsection