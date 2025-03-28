<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Global reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Styles */
        header {
            background-color: #1e3d58;
            padding: 15px;
            color: white;
            text-align: center;
        }

        header .logo {
            font-size: 1.8em;
            font-weight: bold;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.1em;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .btnLogin-popup {
            background-color: #f9c74f;
            padding: 10px 20px;
            border: none;
            color: white;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btnLogin-popup:hover {
            background-color: #f4a261;
        }

        /* Login Form Styles */
        .login-container {
            background-color: #fff;
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 40px auto;
        }

        .login-container h2 {
            margin-bottom: 30px;
            font-size: 2em;
            color: #333;
        }

        .input-field {
            margin-bottom: 20px;
            position: relative;
        }

        .input-field input {
            width: 100%;
            padding: 15px;
            font-size: 1.1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .input-field input:focus {
            border-color: #1e3d58;
        }

        .input-field label {
            position: absolute;
            top: 10px;
            left: 15px;
            color: #666;
            font-size: 1em;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .input-field input:focus+label,
        .input-field input:not(:placeholder-shown)+label {
            top: -10px;
            font-size: 0.9em;
            color: #1e3d58;
        }

        .login-btn {
            background-color: #1e3d58;
            color: white;
            padding: 15px;
            width: 100%;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #f9c74f;
        }

        .register-link {
            margin-top: 15px;
            font-size: 0.9em;
            color: #888;
        }

        .register-link a {
            color: #1e3d58;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* Mobile Responsiveness */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px;
            }

            .login-container h2 {
                font-size: 1.5em;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header>
        <!-- <div class="logo">Logo</div>
        <nav>
            <a href="Accueil">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Services</a>
            <a href="#">Contacts</a>
            <button class="btnLogin-popup">login</button></a>
        </nav> -->
    </header>

    <!-- Formulaire de Connexion -->
    <div class="login-container">
        <h2>Connexion</h2>
        <form action="traitement.php" method="POST">
            <div class="input-field">
                <input type="email" id="email" name="email" required placeholder=" ">
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Mot de passe</label>
            </div>
            <button type="submit" class="login-btn">Se connecter</button>
            <div class="register-link">

                <p>Vous n'avez pas de compte ? <a href="Inscription">S'inscrire</a></p>
            </div>
        </form>
    </div>

</body>

</html>