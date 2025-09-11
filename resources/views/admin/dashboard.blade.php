@extends('layouts.app')

@section('title', 'Tableau de bord - Administrateur')

@section('content')
<style>
    .card-admin {
        background-color: #fffaf7;
        border-left: 5px solid #ff6b00;
        box-shadow: 0 6px 10px rgba(255, 107, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 18px;
    }

    .card-admin:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 20px rgba(255, 107, 0, 0.15);
    }

    .admin-title {
        background: linear-gradient(45deg, #ff6b00, #ffa15c);
        color: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 15px rgba(255, 107, 0, 0.2);
    }

    .btn-orange {
        background-color: #ff6b00;
        color: white;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 9999px;
        transition: 0.3s ease;
    }

    .btn-orange:hover {
        background-color: #e85a00;
    }

    .emoji-icon {
        font-size: 2rem;
        margin-right: 10px;
    }
</style>

<div class="container mx-auto px-4 py-6">
    <div class="admin-title text-center">
        <h1 class="text-4xl font-extrabold mb-2">👑 Bienvenue, Administrateur</h1>
        <p class="text-lg opacity-90">Gérez la plateforme avec élégance et efficacité ✨</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
        <!-- Utilisateurs -->
        <div class="card-admin p-6">
            <div class="flex items-center mb-4">
                <span class="emoji-icon">👥</span>
                <h2 class="text-xl font-semibold text-orange-600">Gestion des utilisateurs</h2>
            </div>
            <p class="text-gray-700 mb-4">Voir, modifier ou supprimer les utilisateurs inscrits.</p>
            <a href="{{ route('admin.users.index') }}" class="btn-orange">Voir les utilisateurs</a>
        </div>

        <!-- Livres -->
        <div class="card-admin p-6">
            <div class="flex items-center mb-4">
                <span class="emoji-icon">📚</span>
                <h2 class="text-xl font-semibold text-orange-600">Gestion des livres</h2>
            </div>
            <p class="text-gray-700 mb-4">Afficher, approuver ou supprimer les livres publiés.</p>
            <a href="{{ route('admin.livres.index') }}" class="btn-orange">Voir les livres</a>
        </div>

        <!-- Demandes d’écrivains -->
        <div class="card-admin p-6">
            <div class="flex items-center mb-4">
                <span class="emoji-icon">✍️</span>
                <h2 class="text-xl font-semibold text-orange-600">Demandes d'écrivains</h2>
            </div>
            <p class="text-gray-700 mb-4">Approuvez ou refusez les demandes d’écriture.</p>
            <a href="{{ route('admin.demandes.index') }}" class="btn-orange">Voir les demandes</a>
        </div>

        <!-- Commentaires -->
        <div class="card-admin p-6">
            <div class="flex items-center mb-4">
                <span class="emoji-icon">💬</span>
                <h2 class="text-xl font-semibold text-orange-600">Commentaires</h2>
            </div>
            <p class="text-gray-700 mb-4">Modérez ou supprimez les commentaires des lecteurs.</p>
            <a href="{{ route('admin.commentaires.index') }}" class="btn-orange">Gérer les commentaires</a>
        </div>
    </div>
</div>
@endsection
