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
        <a class="logo" href="Accueil">Logo</a>
        <nav class="navigation">
            <a href="#">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Contacts</a>
            <a href="Connexion" class="btnLogin-popup">Login</a>
        </nav>
    </header>

    <h1>Inscription</h1>

    <!-- Messages de succès -->
    @if(session('success'))
    <div style="color: green; font-weight: bold;">
        {{ session('success') }}
    </div>
    @endif

    <!-- Messages d'erreurs -->
    @if($errors->any())
    <div style="color: red;">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Formulaire -->
    <div class="wrapper">
        <div class="form">
            <form action="{{ route('inscription.submit') }}" method="POST">
                @csrf
                <div class="input-box">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="input-box">
                    <label for="firstname">Prénom :</label>
                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
                </div>

                <div class="input-box">
                    <label for="email">Email :</label>
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

                <div class="input-box">
                    <label for="role">Votre rôle :</label>
                    <select name="role" id="role" required>
                        <option value="">-- Sélectionnez un rôle --</option>
                        <option value="lecteur" {{ old('role') == 'lecteur' ? 'selected' : '' }}>Lecteur</option>
                        <!-- Ajouter d'autres rôles si besoin -->
                    </select>
                </div>

                <div class="checkbox-group">
                    <p>Sélectionnez vos catégories de livres préférées :</p>
                    <label><input type="checkbox" name="categories[]" value="chimie"> Livres de chimie</label>
                    <label><input type="checkbox" name="categories[]" value="biologie"> Livres de biologie</label>
                    <label><input type="checkbox" name="categories[]" value="physique"> Livres de physique</label>
                    <label><input type="checkbox" name="categories[]" value="maths"> Livres de mathématiques</label>
                    <label><input type="checkbox" name="categories[]" value="civil"> Livres de génie civil</label>
                    <label><input type="checkbox" name="categories[]" value="medecine"> Livres de médecine</label>
                    <label><input type="checkbox" name="categories[]" value="geologie"> Livres de géologie</label>
                    <label><input type="checkbox" name="categories[]" value="informatique"> Livres d'informatique</label>
                </div>

                <button type="submit" class="btn">S'inscrire</button>
            </form>
        </div>
    </div>

</body>

</html>