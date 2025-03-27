<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=2, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<header>
            <nav class="navigation">
                <a href="Accueil">Accueil</a>
                <a href="#">à propos</a>
                <a href="#">Services</a>
                <a href="#">Contacts</a>
                <button  class="btnLogin-popup">Login</button>
            </nav>
        </header>
<body>
   
    <!-- <h1>Bienvenue sur Notre Blog sur les livres scientifiques</h1><br>
    <p>Veullez renseigner certaines insformations pour vous inscrire et profiter pleinement d'une expérience de blogeur</p> -->
    <div class="form">
        <form action="check_inscrition.php" method="get">
        <div class="input-box">
                <input type="text" required>
                <label>Entrez votre Nom</label>
            </div>
            <div class="input-box">
                <input type="text" required>
                <label>Entrez Votre Prénom</label>
            </div>
            <div class="input-box">
                <input type="email" required>
                <label>Entrez votre Email</label>
            </div>
            <div class="input-box">
                <input type="date" required>
                <label>Entrez votre date de naissance</label>
            </div>
            <hr>
            <p>Selectionnez les types de livre que vous aimeimeriez</p>
            <label class="label" for="Categories">Livres de chimie</label>
            <input type="checkbox" for="Categories"><br>
            <label class="label" for="Categories">Livres de Biologie</label>
            <input type="checkbox" for="Categories"><br>
            <label class="label" for="Categories">Livres de Physique</label>
            <input type="checkbox" for="Categories"><br>
            <label class="label" for="Categories">Livres de Mathématique</label>
            <input type="checkbox" for="Categories"><br>
            <label class="label" for="Categories">Livres de génie_civil</label>
            <input type="checkbox" for="Categories"> <br>
            <label class="label" for="Categories">Livres de Biologie</label>
            <input type="checkbox" for="Categories"><br>
            <label class="label" for="Categories">Livres de médecine</label>
            <input type="checkbox" for="Categories"><br>
            <label class="label" for="Categories">Livres de géologie</label>
            <input type="checkbox" for="Categories"><br>
            <hr>
            <button type="submit" class="btn">S'inscrire</button>
        </form>
    </div>
</body>
</html>