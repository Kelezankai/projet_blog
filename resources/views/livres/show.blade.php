@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff8f0;
    }

    .lecture-container {
        max-width: 850px;
        margin: auto;
        padding: 3rem 1.5rem;
        background-color: #fffaf5;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(255, 150, 0, 0.15);
        font-family: 'Georgia', serif;
        color: #3c2f2f;
        line-height: 1.9;
    }

    .lecture-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .lecture-header h1 {
        font-size: 2.8rem;
        font-weight: bold;
        color: #ff6b00;
    }

    .lecture-header p {
        font-size: 1rem;
        color: #7f8c8d;
    }

    .lecture-image {
        width: 100%;
        max-width: 300px;
        margin: 25px auto;
        border-radius: 14px;
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.08);
        display: block;
    }

    .lecture-body {
        white-space: pre-line;
        font-size: 1.15rem;
    }

    .lecture-footer {
        margin-top: 4rem;
        text-align: center;
    }

    .btn-retour {
        text-decoration: none;
        background: #ffe0c0;
        color: #ff6b00;
        padding: 0.7rem 1.7rem;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease-in-out;
    }

    .btn-retour:hover {
        background-color: #ffd0a0;
        transform: scale(1.05);
    }

    /* Commentaires */
    .commentaires-section {
        margin-top: 3rem;
        background-color: #fff;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 6px 16px rgba(255, 126, 0, 0.07);
    }

    .commentaires-section h3 {
        color: #ff5e00;
        font-size: 1.6rem;
        margin-bottom: 1.2rem;
    }

    .commentaire {
        border-bottom: 1px solid #f3d6bc;
        padding: 12px 0;
    }

    .commentaire-nom {
        font-weight: bold;
        color: #d35400;
    }

    .commentaire-date {
        font-size: 0.85rem;
        color: #999;
    }

    .commentaire-contenu {
        margin-top: 5px;
    }

    .comment-form label {
        font-weight: 600;
        color: #5a3e36;
        display: block;
        margin-bottom: 6px;
        margin-top: 12px;
    }

    .comment-form textarea {
        width: 100%;
        padding: 10px 14px;
        border-radius: 12px;
        border: 1.5px solid #ffd6b0;
        font-size: 1rem;
        resize: vertical;
        transition: 0.3s;
    }

    .comment-form textarea:focus {
        border-color: #ff7e00;
        outline: none;
        box-shadow: 0 0 6px rgba(255, 126, 0, 0.2);
    }

    .comment-form button {
        margin-top: 12px;
        background-color: #ff6b00;
        color: white;
        padding: 10px 24px;
        border: none;
        border-radius: 30px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .comment-form button:hover {
        background-color: #e85c00;
        transform: scale(1.03);
    }

    .alert {
        margin: 1rem 0;
        padding: 1rem;
        border-radius: 10px;
        font-weight: 600;
        text-align: center;
    }

    .alert-success {
        background-color: #eaffea;
        color: #2f7a2f;
        border-left: 5px solid #38c172;
    }

    .alert-danger {
        background-color: #ffe0e0;
        color: #b30000;
        border-left: 5px solid #ff4d4d;
    }
</style>

<div class="lecture-container">

    <div class="lecture-header">
        <h1>{{ $livre->titre }}</h1>

        @if ($livre->image)
            <img src="{{ asset($livre->image) }}" alt="{{ $livre->titre }}" class="lecture-image">
        @endif
    </div>

    <div class="lecture-body">
        {{ $livre->description }}
    </div>

    {{-- Commentaires --}}
    <div class="commentaires-section">
        <h3>💬 Commentaires</h3>

        {{-- Messages --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulaire commentaire --}}
        @auth
        <form action="{{ route('commentaires.store', $livre->id) }}" method="POST" class="comment-form">
            @csrf
            <label for="contenu">Votre commentaire</label>
            <textarea id="contenu" name="contenu" rows="4" required>{{ old('contenu') }}</textarea>
            <button type="submit">📤 Publier</button>
        </form>
        @else
        <p class="text-center text-sm text-gray-500">Connectez-vous pour publier un commentaire.</p>
        @endauth

        {{-- Liste des commentaires --}}
        @forelse ($livre->commentaires as $commentaire)
            <div class="commentaire">
                <div class="commentaire-nom">{{ $commentaire->user->name ?? 'Utilisateur inconnu' }}</div>
                <div class="commentaire-date">{{ $commentaire->created_at->format('d/m/Y H:i') }}</div>
                <div class="commentaire-contenu">{{ $commentaire->contenu }}</div>
            </div>
        @empty
            <p class="text-center text-muted">Aucun commentaire pour le moment.</p>
        @endforelse
    </div>

    <div class="lecture-footer">
        <a href="{{ route('discover') }}" class="btn-retour">← Retour à la bibliothèque</a>
    </div>

</div>
@endsection
