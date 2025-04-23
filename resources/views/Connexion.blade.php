<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8"> <!-- Corrigé de UTC-8 en UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLECTIF DES ETUDIANTS POUR LE CHANGEMENT</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="#">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Services</a>
            <a href="#">Contacts</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <div class="form-box Login">
            <h2>Connexion</h2>
            <form action="{{ url('livres/Connexion') }}" method="POST">
                @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Mot de passe</label>
                </div>

                <button type="submit" class="btn">Se connecter</button>

                <div class="Login-register">
                    <p>Vous n'avez pas de compte ? <a href="Inscription" class="register-link">S'inscrire</a></p>
                </div>
            </form>

            <form action="{{ url('livres/deconnexion') }}" method="POST" style="margin-top: 10px;">
                @csrf
                <button type="submit" class="btn">Se déconnecter</button>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>