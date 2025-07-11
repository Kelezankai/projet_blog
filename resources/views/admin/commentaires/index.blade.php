@extends('layouts.app')

@section('title', 'Gestion des commentaires')

@section('content')
<style>
    body {
        background-color: #fff8f2;
    }

    .comment-container {
        background-color: #fffdfb;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(255, 107, 0, 0.08);
        overflow: hidden;
    }

    .table-head {
        background: linear-gradient(45deg, #ff7e00, #ff4b00);
        color: white;
    }

    .comment-row {
        transition: background-color 0.3s ease;
    }

    .comment-row:hover {
        background-color: #fff3e6;
    }

    .btn-delete {
        background-color: #ff4d4f;
        color: white;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 0.875rem;
        font-weight: bold;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-delete:hover {
        background-color: #d9363e;
        transform: scale(1.05);
    }

    .alert-success {
        background-color: #eaffea;
        color: #2f7a2f;
        border-left: 5px solid #38c172;
        padding: 1rem;
        border-radius: 10px;
        margin-bottom: 1rem;
        box-shadow: 0 2px 6px rgba(72, 187, 120, 0.1);
    }

    th,
    td {
        padding: 1rem;
        vertical-align: top;
    }

    th {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    td {
        color: #3a2e25;
        font-size: 0.93rem;
        line-height: 1.5;
    }
</style>

<div class="container py-5">
    <h1 class="text-4xl font-extrabold text-center mb-6 text-orange-500">💬 Gestion des commentaires</h1>

    @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="comment-container">
        <table class="w-full table-auto text-left">
            <thead class="table-head">
                <tr>
                    <th>Auteur</th>
                    <th>Livre</th>
                    <th>Commentaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse($commentaires as $commentaire)
                <tr class="border-b comment-row">
                    <td>{{ $commentaire->user->name }} {{ $commentaire->user->firstname }}</td>
                    <td><span class="font-semibold text-orange-600">{{ $commentaire->livre->titre }}</span></td>
                    <td>{{ $commentaire->contenu }}</td>
                    <td>
                        <form action="{{ route('admin.commentaires.delete', $commentaire->id) }}" method="POST" onsubmit="return confirm('Supprimer ce commentaire ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delete">🗑️ Retirer</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-gray-500 py-6">Aucun commentaire pour l’instant.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection