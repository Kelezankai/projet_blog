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
); 
/*  
Quand notre base de donné sera prete nous utiliserons le code suivant pour appeler un a un tout les élément de toutes les livres un a un  qui sera une table de notre base de donné
use App\Models\Bookchimie;
use App\Models\Bookbiologie;
use App\Models\Bookgeologie;
use App\Models\Boolkgeniecivil;
use App\Models\Bookmath;
use App\Models\Bookmedecine;
use App\Models\Bookinformatique;
use App\Models\Bookphysique;
// Récupération des livres depuis la base de données
$bookbiologie = Bookbiologie::all();
$bookchimie = Bookchimie::all();
$bookgeniecivil = Bookgeniecivil::all();
$bookgeologie = Bookgeologie::all();
$bookmath = Bookmath::all();
$bookmedecine = Bookmedecine::all();
$bookinformatique = Bookinformatique::all();
$bookphysique = Bookphyqiue::all();
aprés nous allons appeller peut être trois éléments de chaque livre pour les affiché un à un sur  notre DISCOVER
Ce tableau Liver sert juste d'exemple 
*/

?>
@section('title', 'Découvrir')

@section('content')
<h1 class="text-4xl font-bold text-center mb-12 text-orange-500">Découvrir des histoires</h1>
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookbiologie">Les livres de biologie</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookchimie">
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookchimie">Les livres de Chimie</a>
   </div>
   
</section>

<section class="container mx-auto px-4 py-12">
   <div class="Bookgeniecivil">
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="Accueil">Les livres de Génie civil</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookgeologie">
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="Accueil">Les livres de Géologie</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookinformatique">
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="Accueil">Les livres de Informatique</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookmathematique">
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="Accueil">Les livres de Mathématique</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookmedecine">
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="Accueil">Les livres de Médecine</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookphyqiue">
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
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="Accueil">Les livres de Physique</a>
   </div>
   
</section>
@endsection