<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord de l'Écrivain</title>
</head>

<body>
    <h1>Bienvenue sur le tableau de bord de l'Écrivain</h1>
    <p>Vous pouvez créer et gérer vos articles ici.</p>
    <!-- Ajoute un formulaire pour créer un article -->
    <h1>Bienvenue, Écrivain !</h1>

    <!-- <form action="{{ route('ecrivain.dashboard') }}" method="POST">
        @csrf
        <label for="titre">Titre du Livre :</label>
        <input type="text" name="titre" id="titre" required>

        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>

        <label for="categorie">Catégorie :</label>
        <select name="categorie" id="categorie">
            <option value="physique">Physique</option>
            <option value="chimie">Chimie</option>
            <option value="biologie">Biologie</option>
        </select>

        <button type="submit">Publier</button>
    </form> -->


    <form action="{{ route('livres.publier') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="titre" placeholder="Titre du livre" required>

        <textarea name="description" placeholder="Description"></textarea>

        <select name="categorie" required>
            <option value="" disabled selected>Choisissez une catégorie</option>
            <option value="physique">Physique</option>
            <option value="chimie">Chimie</option>
            <option value="biologie">Biologie</option>
            <option value="medecine">Math</option>
            <option value="medecine">genie-civil</option>
            <option value="medecine">geologie</option>
            <option value="medecine">informatique</option>
            <option value="medecine">Médecine</option>


        </select>

        <label for="image">Image du livre</label>
        <input type="file" name="image" id="image" accept="image/*">

        <button type="submit">Publier</button>
    </form>



</body>

</html>