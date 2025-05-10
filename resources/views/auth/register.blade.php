@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold text-center mb-6 text-orange-600">Inscription</h1>

    <form action="{{ route('register') }}" method="GET" class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
        @csrf

        <!-- Nom -->
        <div class="mb-6">
            <label for="name" class="block text-sm font-semibold text-gray-700">Nom</label>
            <div class="flex items-center border border-gray-300 rounded-md p-2 focus-within:border-orange-500 transition duration-300 ease-in-out">
                <i class="fas fa-user text-gray-500 mr-3"></i> <!-- Icone Nom -->
                <input type="text" id="name" name="name" class="w-full p-2 bg-transparent focus:outline-none text-gray-700 placeholder-gray-500" placeholder="Nom" required>
            </div>
        </div>

        <!-- Prénom -->
        <div class="mb-6">
            <label for="prenom" class="block text-sm font-semibold text-gray-700">Prénom</label>
            <div class="flex items-center border border-gray-300 rounded-md p-2 focus-within:border-orange-500 transition duration-300 ease-in-out">
                <i class="fas fa-user-alt text-gray-500 mr-3"></i> <!-- Icone Prénom -->
                <input type="text" id="prenom" name="prenom" class="w-full p-2 bg-transparent focus:outline-none text-gray-700 placeholder-gray-500" placeholder="Prénom" required>
            </div>
        </div>

        <!-- Email -->
        <div class="mb-6">
            <label for="email" class="block text-sm font-semibold text-gray-700">Adresse Email</label>
            <div class="flex items-center border border-gray-300 rounded-md p-2 focus-within:border-orange-500 transition duration-300 ease-in-out">
                <i class="fas fa-envelope text-gray-500 mr-3"></i> <!-- Icone Email -->
                <input type="email" id="email" name="email" class="w-full p-2 bg-transparent focus:outline-none text-gray-700 placeholder-gray-500" placeholder="Email" required>
            </div>
        </div>

        <!-- Mot de passe -->
        <div class="mb-6">
            <label for="password" class="block text-sm font-semibold text-gray-700">Mot de passe</label>
            <div class="flex items-center border border-gray-300 rounded-md p-2 focus-within:border-orange-500 transition duration-300 ease-in-out">
                <i class="fas fa-lock text-gray-500 mr-3"></i> <!-- Icone Mot de passe -->
                <input type="password" id="password" name="password" class="w-full p-2 bg-transparent focus:outline-none text-gray-700 placeholder-gray-500" placeholder="Mot de passe" required>
            </div>
        </div>

        <button type="submit" class="orange-button py-2 px-6 rounded-lg w-full text-white hover:bg-orange-600 transition duration-300 ease-in-out transform hover:scale-105">
            S'inscrire
        </button>
    </form>

    <div class="text-center mt-6">
        <p class="text-sm text-gray-600">Vous avez déjà un compte ? <a href="{{ route('login') }}" class="text-orange-600 font-semibold hover:underline">Se connecter</a></p>
    </div>
</div>
@endsection