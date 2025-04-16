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
        <form action="{{ route('inscription.submit') }}"  method="get">
            @csrf
           <div class="input-box">
           <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required>

             <label for="name">Nom</label>
            </div>
            <div class="input-box">
            <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
             <label for=""firstname>Prénom</label>
            </div>
            <div class="input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            </div>
            <div class="input-box">
            <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-box">
                <label for="password_confirmation">Confirmer le mot de passe :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn">S'inscrire</button>
            @csrf
        </form>
    </div>
    </div>
   
</body>

</html>