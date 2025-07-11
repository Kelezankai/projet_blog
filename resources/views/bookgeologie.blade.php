@extends('layouts.app')
<?php
// Connexion à la base de données
$dsn = "mysql:host=localhost;dbname=projet_tache;charset=utf8";
$user = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Requête SQL pour récupérer les livres de Géologie
$query = "SELECT * from livres where categorie='Géologie'";
$stmt = $pdo->query($query);
$livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

@section('title', 'Livres de Géologie')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12 bg-[#fff8e1] rounded-lg shadow-xl font-serif text-[#4a3b1f]">

    <h1 class="text-4xl font-extrabold text-center mb-12 text-[#d2691e]" style="font-family: 'Georgia', serif;">
        🌍 Les Livres de Géologie
    </h1>

    <section class="grid gap-10 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($livres as $livre): ?>
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 overflow-hidden">
                <img src="<?= asset($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>"
                     class="w-full h-56 object-cover">

                <div class="p-6 text-[#5a3b00]">
                    <h2 class="text-2xl font-bold mb-2" style="font-family: 'Georgia', serif;">
                        <?= htmlspecialchars($livre['titre']) ?>
                    </h2>
                    <p class="text-base leading-relaxed mb-4 italic">
                        <?= htmlspecialchars($livre['description']) ?>
                    </p>
                    <a href="{{ route('livre.show', $livre['id']) }}"
                       class="inline-block bg-gradient-to-r from-[#ffb347] via-[#ffcc33] to-[#d2691e] text-black font-semibold px-6 py-2 rounded-full shadow hover:brightness-110 transition"
                       style="font-family: 'Georgia', serif;">
                        📖 Lire
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

</div>

<style>
    body {
        background-color: #fff8e1;
        font-family: 'Georgia', serif;
    }

    h1, h2 {
        text-shadow: 0 1px 1px rgba(102, 51, 0, 0.2);
    }

    p {
        color: #5a3b00;
    }

    a:hover {
        filter: brightness(1.1);
    }
</style>
@endsection
