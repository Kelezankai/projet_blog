<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=2, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/livre.css') }}">
    <link rel="stylesheet" href="{{ asset('css/https://rsms.me/inter/inter.css')}}">
    <link rel="stylesheet" href="{{ asset('css/post.css')}}"> -->
</head>
<body>
<header>
       <a class="logo" href="Accueil">Logo </a>
            <nav class="navigation">
                <a href="#">Accueil</a>
                <a href="#">à propos</a>
                <a href="#">Contacts</a>
                <button type="submit" href="Connexion" class="btnLogin-popup">Login</button>
            </nav>
        </header>      
<body>
   
    <!-- <h1>Bienvenue sur Notre Blog sur les livres scientifiques</h1><br>
    <p>Veullez renseigner certaines insformations pour vous inscrire et profiter pleinement d'une expérience de blogeur</p> -->
   
    <div class="wrapper">
    <div class="form">
        <form action="password" method="get">
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
            <button type="submit" class="btn">Continuer</button>
        </form>
    </div>
    </div>
   
</body>
</html>