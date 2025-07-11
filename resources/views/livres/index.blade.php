@extends('layouts.app')

@section('content')
<style>
    .book-card {
        background: #fffaf5;
        border: 1px solid #f2e0d6;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 20px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(255, 167, 38, 0.1);
    }

    .book-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(255, 102, 0, 0.2);
    }

    .book-image {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 15px;
    }

    .orange-button {
        background-color: #ff6b00;
        color: white;
        border: none;
        transition: background 0.3s;
    }

    .orange-button:hover {
        background-color: #e65c00;
        color: white;
    }

    .book-title {
        font-size: 1.4rem;
        font-weight: bold;
        color: #333;
    }

    .book-category {
        font-size: 0.9rem;
        font-weight: 500;
        color: #ff6b00;
    }

    .book-description {
        color: #555;
        font-size: 0.95rem;
    }
</style>

<div class="container py-5">
    <h2 class="mb-4 text-center text-dark">📚 Tous les livres publiés</h2>

    @if($livres->isEmpty())
        <p class="text-center">Aucun livre n’a encore été publié.</p>
    @else
    <div class="row">
        @foreach ($livres as $livre)
        <div class="col-md-6 col-lg-4">
            <div class="book-card">
                @if ($livre->image)
                    <img src="{{ asset('img/' . $livre->image) }}" alt="Image du livre" class="book-image">
                @endif

                <div class="book-title">{{ $livre->titre }}</div>
                <div class="book-category mb-2">📁 {{ $livre->categorie }}</div>
                <p class="book-description">{{ Str::limit($livre->description, 100) }}</p>

                <a href="{{ route('livres.show', $livre->id) }}" class="orange-button px-4 py-2 rounded-pill mt-3 d-inline-block">
                    📖 Lire
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
