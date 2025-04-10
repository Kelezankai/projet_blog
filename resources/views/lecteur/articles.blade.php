<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles pour les Lecteurs</title>
</head>

<body>
    <h1>Bienvenue Lecteur !</h1>
    <p>Ici, vous pouvez lire les articles et laisser des commentaires.</p>

    <!-- Exemple d'article -->
    <div>
        <h1>Bienvenue, Lecteur !</h1>

        <ul>
            <li><a href="{{ route('livres.physique') }}">Livres de Physique</a></li>
            <li><a href="{{ route('livres.chimie') }}">Livres de Chimie</a></li>
            <li><a href="{{ route('livres.biologie') }}">Livres de Biologie</a></li>
            <li><a href="{{ route('livres.informatique') }}">Livres informatique</a></li>
            <li><a href="{{ route('livres.math') }}">Livres de math</a></li>
            <li><a href="{{ route('livres.medecine') }}">Livres de medecine</a></li>
            <li><a href="{{ route('livres.geologie') }}">Livres de geologie</a></li>
            <li><a href="{{ route('livres.genie-civil') }}">Livres de genie-civil</a></li>



        </ul>

        <!-- <form action="{{ url('commenter-article') }}" method="POST">
            @csrf
            <textarea name="comment" placeholder="Laisser un commentaire" required></textarea>
            <button type="submit">Commenter</button>
        </form> -->
    </div>
</body>

</html>