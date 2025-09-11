@extends('layouts.app')

@section('title', 'Gestion des livres')

@section('content')
<style>
    .livre-table-container {
        background-color: #fffaf7;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(255, 107, 0, 0.08);
        overflow: hidden;
    }

    .livre-table-header {
        background: linear-gradient(to right, #ff6b00, #ffa15c);
        color: white;
    }

    .livre-row:hover {
        background-color: #fff3e6;
        transition: background-color 0.3s ease;
    }

    .btn-delete {
        background-color: #ff4d4f;
        color: white;
        padding: 5px 12px;
        font-size: 0.9rem;
        border-radius: 20px;
        transition: 0.3s ease;
    }

    .btn-delete:hover {
        background-color: #d9363e;
    }

    .alert-success {
        background-color: #e6fffa;
        border-left: 5px solid #2dd4bf;
        padding: 12px 16px;
        color: #065f46;
        border-radius: 10px;
    }
</style>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-extrabold text-orange-600 mb-6">📚 Gestion des livres publiés</h1>

    @if(session('success'))
    <div class="alert-success mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="livre-table-container">
        <table class="w-full text-sm">
            <thead class="livre-table-header text-left">
                <tr>
                    <th class="px-5 py-3">Titre</th>
                    <th class="px-5 py-3">Catégorie</th>
                    <th class="px-5 py-3">Écrivain</th>
                    <th class="px-5 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse($livres as $livre)
                <tr class="border-b livre-row">
                    <td class="px-5 py-3 font-medium">{{ $livre->titre }}</td>
                    <td class="px-5 py-3">{{ $livre->categorie }}</td>
                    <td class="px-5 py-3 text-gray-700">
                        {{ $livre->user->name ?? '—' }} {{ $livre->user->firstname ?? '' }}
                    </td>
                    <td class="px-5 py-3">
                        <form action="{{ route('admin.livres.delete', $livre->id) }}" method="POST" onsubmit="return confirm('Supprimer ce livre ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delete">🗑️ Retirer</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center px-5 py-4 text-gray-500">Aucun livre publié pour le moment.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
