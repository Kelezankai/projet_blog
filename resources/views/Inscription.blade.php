<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>
        <nav class="navigation">
            <a href="Accueil">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Services</a>
            <a href="#">Contacts</a>
        </nav>
    </header>

    <div class="form">
        <h2>Inscription</h2>
        <form action="check_inscription.php" method="get">
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
            <button type="submit" class="btn">S'inscrire</button>
        </form>
    </div>
</body>

</html>