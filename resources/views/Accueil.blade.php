<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fb;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #1e3d58;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .logo {
            font-size: 1.8em;
            font-weight: bold;
            letter-spacing: 2px;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-size: 1.2em;
        }

        nav a:hover {
            color: #f9c74f;
            text-decoration: underline;
        }

        .btnLogin-popup {
            background-color: #f9c74f;
            color: white;
            border: none;
            padding: 8px 15px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }

        .btnLogin-popup:hover {
            background-color: #f1a10a;
        }

        main {
            padding: 20px;
        }

        .section-title {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .category {
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .category a {
            color: #1e3d58;
            text-decoration: none;
            font-size: 1.2em;
        }

        .category a:hover {
            color: #f9c74f;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #1e3d58;
            color: white;
        }

        footer p {
            font-size: 1em;
        }
    </style>
</head>

<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <a href="Connexion"><button class="btnLogin-popup">Login</button></a>
        </nav>
    </header>

    <main>
        <div class="section-title">Explorez Nos Livres</div>
        <div class="category">
            <a href="bookchimie">Les livres de chimie</a>
        </div>
        <div class="category">
            <a href="bookphysique">Les livres de Physique</a>
        </div>
        <div class="category">
            <a href="bookmath">Les livres de Mathématiques</a>
        </div>
        <div class="category">
            <a href="bookbiologie">Les livres de Biologie</a>
        </div>
        <div class="category">
            <a href="bookgenie-civil">Les livres de Génie Civil</a>
        </div>
        <div class="category">
            <a href="bookmedecine">Les livres de Médecine</a>
        </div>
        <div class="category">
            <a href="bookgeologie">Les livres de Géologie</a>
        </div>
        <div class="category">
            <a href="bookinformatique">Les livres d'informatiques</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Blogin pour ecrivain. Tous droits réservés.</p>
    </footer>
</body>

</html>