@extends('layouts.app')

@section('title', 'Découvrir')

@section('content')
<style>
    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #ff6b00;
        margin-bottom: 2rem;
        text-align: center;
    }

    .book-card {
        background-color: #fff;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(255, 107, 0, 0.08);
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
        padding: 1.2rem;
    }

    .book-card .card-body h2 {
        font-size: 1.2rem;
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
        text-decoration: none;
        font-weight: 600;
        transition: background 0.3s ease;
    }

    .orange-button:hover {
        background-color: #e95c00;
    }

    .view-more-link {
        display: inline-block;
        margin-top: 1.5rem;
        color: #ff6b00;
        font-weight: 600;
        text-decoration: underline;
    }
</style>

<h1 class="text-4xl font-bold text-center mb-12 text-orange-500">🔬 Découvrez des histoires scientifiques fascinantes</h1>

@php
$categories = [
'Biologie' => 'bookbiologie',
'Chimie' => 'bookchimie',
'Génie-civil' => 'bookgenie-civil',
'Géologie' => 'bookgeologie',
'Informatique' => 'bookinformatique',
'Math' => 'bookmath',
'Medecine' => 'bookmedecine',
'Physique' => 'bookphysique',
];
@endphp

@foreach ($categories as $nomCategorie => $routeCategorie)
@php
$livres = DB::table('livres')->where('categorie', $nomCategorie)->limit(3)->get();
@endphp

@if ($livres->count())
<section class="container mx-auto px-4 py-10">
    <h2 class="section-title">📚 Catégorie : {{ $nomCategorie }}</h2>
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($livres as $livre)
        <div class="book-card">
            <img src="{{ asset($livre->image) }}" alt="{{ $livre->titre }}">
            <div class="card-body">
                <h2>{{ $livre->titre }}</h2>
                <p>{{ \Illuminate\Support\Str::limit($livre->description, 120) }}</p>
                <a href="{{ route('livre.show', $livre->id) }}" class="orange-button">Lire</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-6">
        <a href="{{ url($routeCategorie) }}" class="view-more-link">Voir tous les livres de {{ $nomCategorie }} →</a>
    </div>
</section>
@endif
@endforeach
@endsection