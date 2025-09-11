@extends('layouts.app')

@section('title', 'Tableau de bord - Écrivain')

@section('content')
<style>
    body {
        background-color: #fffaf3;
        font-family: 'Georgia', serif;
    }

    .dashboard-header {
        background: linear-gradient(90deg, #ff7e5f, #feb47b);
        color: white;
        padding: 3rem 2rem;
        border-radius: 1rem;
        box-shadow: 0 8px 20px rgba(255, 126, 95, 0.2);
        text-align: center;
        margin-bottom: 3rem;
        transition: all 0.3s ease-in-out;
    }

    .dashboard-header h2 {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }

    .dashboard-header a {
        display: inline-block;
        background-color: #ffffff;
        color: #ff6b00;
        font-weight: 600;
        padding: 0.6rem 1.4rem;
        border-radius: 30px;
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-decoration: none;
        transition: 0.3s ease;
    }

    .dashboard-header a:hover {
        background-color: #fff2e0;
        color: #d24f00;
    }

    .livre-card {
        background-color: white;
        border-radius: 1rem;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .livre-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px rgba(255, 128, 0, 0.15);
    }

    .livre-card img {
        border-radius: 0.75rem;
        object-fit: cover;
        width: 100%;
        height: 220px;
        margin-bottom: 1rem;
    }

    .livre-card h5 {
        font-size: 1.3rem;
        color: #333;
        font-weight: bold;
        margin-bottom: 0.4rem;
    }

    .livre-card p {
        font-size: 0.95rem;
        color: #5a3b00;
        line-height: 1.5;
    }

    .card-footer {
        margin-top: 1rem;
        display: flex;
        justify-content: flex-end;
    }

    .btn-view {
        background: linear-gradient(to right, #ffb347, #ffcc33, #d2691e);
        color: white;
        font-weight: 600;
        padding: 0.5rem 1.2rem;
        border: none;
        border-radius: 30px;
        text-decoration: none;
        font-size: 0.9rem;
        transition: 0.3s ease;
    }

    .btn-view:hover {
        filter: brightness(1.1);
    }

    .btn-retour {
        text-align: center;
        margin-top: 3rem;
    }

    .btn-retour a {
        color: #d2691e;
        font-weight: bold;
        font-family: 'Georgia', serif;
        text-decoration: none;
    }

    .btn-retour a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .dashboard-header h2 {
            font-size: 1.8rem;
        }

        .livre-card {
            padding: 1rem;
        }

        .livre-card img {
            height: 180px;
        }
    }
</style>

<div class="container">
    <div class="dashboard-header">
        <h2>📚 Tableau de bord de l'écrivain</h2>
        <a href="{{ route('livres.create') }}">➕ Publier un nouveau livre</a>
    </div>

    @if ($livres->isEmpty())
    <p class="text-center text-muted fst-italic">Aucun livre n’a encore été publié.</p>
    @else
    <div class="row">
        @foreach ($livres as $livre)
        <div class="col-md-6 col-lg-4">
            <div class="livre-card">
                @if ($livre->image)
                <img src="{{ asset('storage/' . $livre->image) }}" alt="{{ $livre->titre }}">
                @endif
                <h5>{{ $livre->titre }}</h5>
                <p class="mb-1">📁 {{ $livre->categorie }}</p>
                <p class="fst-italic">{{ Str::limit($livre->description, 100) }}</p>
                <div class="card-footer">
                    <a href="{{ route('livres.show', $livre->id) }}" class="btn-view">👁️ Voir</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>

<div class="btn-retour">
    <a href="{{ url('/') }}">← Retour à l’accueil</a>
</div>
@endsection