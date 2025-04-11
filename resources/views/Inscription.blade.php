<!DOCTYPE html>
<html lang="fr">

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
                <label>Nom</label>
            </div>
            <div class="input-box">
                <input type="text" required>
                <label>Prénom</label>
            </div>
            <div class="input-box">
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <input type="password" id="password" required>
                <label>Mot de passe</label>
            </div>
            <div class="input-box">
                <input type="date" required>
                <label>date_de_naiss</label>
            </div>
            <div class="checkbox-group">
                <p>Sélectionnez vos catégories de livres préférées :</p>
                <label><input type="checkbox"> Livres de chimie</label>
                <label><input type="checkbox"> Livres de biologie</label>
                <label><input type="checkbox"> Livres de physique</label>
                <label><input type="checkbox"> Livres de mathématiques</label>
                <label><input type="checkbox"> Livres de génie civil</label>
                <label><input type="checkbox"> Livres de médecine</label>
                <label><input type="checkbox"> Livres de géologie</label>
                <label><input type="checkbox"> Livres d'informatiques</label>

            </div>
<<<<<<< HEAD
            <button type="submit" class="btn">Continuer</button>
=======
            <button type="submit" class="btn">S'inscrire</button>
>>>>>>> ea16a3fb272fbb12e8b2eb7f9443ba5260c2d09a
        </form>
    </div>
    </div>
   
</body>

</html>