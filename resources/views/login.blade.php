@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
<div class="max-w-md mx-auto mt-16 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Se connecter</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required>
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-600">Mot de passe</label>
            <input type="password" id="password" name="password" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required>
        </div>

        <div class="mb-6">
            <button type="submit" class="w-full bg-orange-500 text-white p-3 rounded-lg hover:bg-orange-600 transition duration-300">Se connecter</button>
        </div>

        <p class="text-center text-gray-600">Pas encore de compte ? <a href="{{ route('register') }}" class="text-orange-500 hover:underline">Inscrivez-vous</a></p>
    </form>
</div>
@endsection