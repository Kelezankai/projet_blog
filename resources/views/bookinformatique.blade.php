@extends('layouts.app')
<?php
$livres = array(
    'blue image' => array(
        'image' => 'img/blue.png',
        'description' => "Un voyage apaisant à travers des paysages d'un bleu profond."
    ),
    'bikes image' => array(
        'image' => 'img/bikes.png',
        'description' => "L'histoire fascinante des cyclistes intrépides à travers le monde."
    ),
    'pancakes image' => array(
        'image' => 'img/pancakes.png',
        'description' => "Une aventure gourmande autour des crêpes les plus délicieuses."
    ),
); ?>
@section('title', 'Découvrir')

@section('content')
<h1 class="text-4xl font-bold text-center mb-12 text-orange-500">Les Livres de informatique</h1>
<section class="container mx-auto px-4 py-12">
   <div class="Bookbiologie">
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $titre => $details): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($details['image']) ?>" alt="<?= htmlspecialchars($titre) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($titre) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($details['description']) ?></p>
            <a href="#" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
        </div>
    </div>
<?php endforeach; ?>    
@endsection