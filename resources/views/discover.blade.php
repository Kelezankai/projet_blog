@extends('layouts.app')
<?php
//Connexion à la base de données
 $dsn = "mysql:host=localhost;dbname=projet_tache;charset=utf8";
 $user = "root";
 $password = "";

 try {
     $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("Erreur de connexion : " . $e->getMessage());
 }
 $categorie= [
    'Biologie',
    'Chimie',
    'Génie-civil',
    'Géologie',
    'Informatique',
    'Mathématique',
    'Medecine',
    'Physique',
 ];

?>
@section('title', 'Découvrir')

@section('content')
<h1 class="text-4xl font-bold text-center mb-12 text-orange-500">Découvrir des histoires</h1>
<section class="container mx-auto px-4 py-12">
   <div class="Bookbiologie">
    <?php  //Requête SQL pour récupérer les livres de physique
$query = "SELECT * from livres where categorie='Biologie' limit 3";
$stmt = $pdo->query($query);
$livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
 // Convertit le tableau en objet ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
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
   <?php  //Requête SQL pour récupérer les livres de physique
$query = "SELECT * from livres where categorie='Chimie' limit 3";
$stmt = $pdo->query($query);
$livres = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre):?>
      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
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
   <?php  //Requête SQL pour récupérer les livres de physique
$query = "SELECT * from livres where categorie='Génie-civil' limit 3";
$stmt = $pdo->query($query);
 $livres = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
        </div>
    </div>
<?php endforeach; ?>      
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookgenie-civil">Les livres de Génie civil</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookgeologie">
   <?php  //Requête SQL pour récupérer les livres de physique
$query = "SELECT * from livres where categorie='Géologie' limit 3";
$stmt = $pdo->query($query);
 $livres = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
        </div>
    </div>
<?php endforeach; ?>      
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookgeologie">Les livres de Géologie</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookinformatique">
   <?php  //Requête SQL pour récupérer les livres d'INFORMATIQUE
$query = "SELECT * from livres where categorie='Géologie' limit 3";
$stmt = $pdo->query($query);
 $livres = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
        </div>
    </div>
<?php endforeach; ?>   
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookinformatique">Les livres de Informatique</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookmathematique">
   <?php  //Requête SQL pour récupérer les livres de mathématique
$query = "SELECT * from livres where categorie='Mathématique' limit 3";
$stmt = $pdo->query($query);
 $livres = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
        </div>
    </div>
<?php endforeach; ?>    
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookmath">Les livres de Mathématique</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookmedecine">
   <?php  //Requête SQL pour récupérer les livres de Medecine
$query = "SELECT * from livres where categorie='Medecine' limit 3";
$stmt = $pdo->query($query);
 $livres = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
        </div>
    </div>
<?php endforeach; ?>     
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookmedecine">Les livres de Médecine</a>
   </div>
   
</section>
<section class="container mx-auto px-4 py-12">
   <div class="Bookphyqiue">
   <?php  //Requête SQL pour récupérer les livres de Physique
$query = "SELECT * from livres where categorie='Medecine' limit 3";
$stmt = $pdo->query($query);
 $livres = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
   <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
   <?php foreach ($livres as $livre): ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
        <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>" class="w-full h-48 object-cover">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($livre['titre']) ?></h2>
            <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($livre['description']) ?></p>
            <a href="{{ route('livre.show', $livre['id']) }}" class="orange-button px-4 py-2 rounded-md inline-block">Lire</a>
        </div>
    </div>
<?php endforeach; ?>      
        <!-- Tu pourras ajouter autant de livres que tu veux en copiant le même modèle ! -->
    </div>
    <a href="bookphysique">Les livres de Physique</a>
   </div>
   
</section>
@endsection