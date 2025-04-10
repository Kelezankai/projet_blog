<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=2, initial-scale=1.0">
    <title>Livres de medecine</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<header>
    <nav class="navigation">
        <a href="Accueil">Accueil</a>
        <a href="#">À propos</a>
        <a href="#">Services</a>
        <a href="#">Contacts</a>
        <button class="btnLogin-popup">Login</button>
    </nav>
</header>

<body>

    <h1>Livres de medecine</h1>

    @if($livres->isEmpty())
    <p>Aucun livre de medecine disponible.</p>
    @else
    <ul>
        @foreach($livres as $livre)
        <li style="margin-bottom: 30px;">
            <strong>{{ $livre->titre }}</strong><br>

            {{-- ✅ Affichage de limage --}}
            @if($livre->image)
            <img src="{{ asset('storage/' . $livre->image) }}" alt="Image du livre" width="150" style="margin-top: 10px;"><br>
            @endif

            <em>{{ $livre->description }}</em><br>

            {{-- ✅ Formulaire de commentaire --}}
            @if(Auth::check() && Auth::user()->role === 'lecteur')
            <form action="{{ route('commentaire.store', $livre->id) }}" method="POST" style="margin-top: 10px;">
                @csrf
                <textarea name="contenu" rows="3" cols="50" placeholder="Votre commentaire..." required></textarea><br>
                <button type="submit">Commenter</button>
            </form>
            @endif

            {{-- ✅ Liste des commentaires --}}
            <h4>Commentaires :</h4>
            @if($livre->commentaires->isEmpty())
            <p>Aucun commentaire pour ce livre.</p>
            @else
            @foreach($livre->commentaires as $commentaire)
            <div style="margin-left: 20px; margin-bottom: 10px;">
                <strong>{{ $commentaire->user->name }}</strong> :
                <p>{{ $commentaire->contenu }}</p>
            </div>
            @endforeach
            @endif
        </li>
        @endforeach
    </ul>
    @endif

    <!-- <p>Ceci sera la page pour bloguer sur les livres de medecine</p> -->
</body>

</html>