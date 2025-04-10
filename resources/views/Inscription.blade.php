<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        header {
            width: 100%;
            background: #2c3e50;
            padding: 15px 0;
            text-align: center;
        }

        .navigation a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }

        .form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-box input:focus+label,
        .input-box input:valid+label {
            top: 5px;
            font-size: 12px;
            color: #2c3e50;
        }

        .checkbox-group {
            margin: 15px 0;
        }

        .checkbox-group label {
            display: block;
            margin-bottom: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #34495e;
        }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
    </head>

    <body>
        <h1>Inscription</h1>

        <!-- Affichage des messages de succès -->
        @if(session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
        @endif

        <!-- Affichage des erreurs de validation -->
        @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Formulaire d'inscription -->
        <form action="{{ route('inscription.submit') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
            </div>

            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Confirmer le mot de passe :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div>
                <label for="role"> votre rôle :</label>
                <select name="role" id="role" required>
                    <option value="">-- Sélectionnez un rôle --</option>
                    <option value="lecteur" {{ old('role') == 'lecteur' ? 'selected' : '' }}>Lecteur</option>
                    <!-- <option value="ecrivain" {{ old('role') == 'ecrivain' ? 'selected' : '' }}>Écrivain</option> -->
                </select>
            </div>

            <div>
                <button type="submit">S'inscrire</button>
            </div>
        </form>
    </body>

    </html>


</body>


<!-- <header>
        <nav class="navigation">
            <a href="Accueil">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Services</a>
            <a href="#">Contacts</a>
        </nav>
    </header> -->

<!-- <div class="form">
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
                <<<<<<< HEAD=======<label><input type="checkbox"> Livres d'informatiques</label>

                    >>>>>>> origin/ma-nouvelle-branche
            </div>
            <button type="submit" class="btn">S'inscrire</button>
        </form> -->
</div>
</body>

</html>