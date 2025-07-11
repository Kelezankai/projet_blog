@extends('layouts.app')

@section('title', 'Livres de Biologie')

@section('content')
<style>
    .book-card {
        background-color: #fffaf5;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(255, 107, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .book-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255, 107, 0, 0.15);
    }

    .book-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .book-card .card-body {
        padding: 1.25rem;
    }

    .book-card .card-body h2 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #333;
    }

    .book-card .card-body p {
        font-size: 0.95rem;
        color: #666;
        margin-bottom: 1rem;
    }

    .orange-button {
        background-color: #ff6b00;
        color: white;
        padding: 8px 20px;
        border-radius: 9999px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .orange-button:hover {
        background-color: #e95c00;
    }
</style>

<h1 class="text-4xl font-bold text-center mb-12 text-orange-500">🔬 Livres de Biologie</h1>

<section class="container mx-auto px-4 py-8">
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @php
        $livres = DB::table('livres')->where('categorie', 'Biologie')->get();
        @endphp

        @foreach ($livres as $livre)
        <div class="book-card">
            <img src="{{ asset($livre->image) }}" alt="{{ $livre->titre }}">
            <div class="card-body">
                <h2>{{ $livre->titre }}</h2>
                <p>{{ \Illuminate\Support\Str::limit($livre->description, 130) }}</p>
                <a href="{{ route('livre.show', $livre->id) }}" class="orange-button">Lire</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection