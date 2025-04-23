@php
$livre =[
'zkIVBIVU' => asset('img/blue.png'),
'zkvIVBIVU' => asset('img/bikes.png'),
'vhbvivhlbv' => asset('img/pancakes.png'),
'zkvibibbU' => asset('img/notes.png'),
];
@endphp
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <header>
    <a class="logo" href="#">Logo</a>
    <nav>
      <a href="#">Accueil</a>
      <a href="#">À propos</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
      <a href="Connexion"><button class="btnLogin-popup">Login</button></a>
      <a href="Inscription"><button class="btnLogin-popup">S’inscrire</button></a>
    </nav>
  </header>

  <main>
    <div class="section-title">Explorez Nos Livres</div>
    <ul>
      @foreach (['chimie', 'physique', 'math', 'biologie', 'genie-civil', 'medecine', 'geologie', 'informatique'] as $categorie)
      <li>
        <div class="{{ $categorie }}">
          <div class="{{ $categorie }}image">
            @foreach($livre as $titre => $img)
            <div class="{{ $categorie }}img">
              <img src="{{ $img }}" alt="{{ $titre }}">
              <h1>
                <a href="book{{ $categorie }}">{{ $titre }}</a>
              </h1>
            </div>
            @endforeach
          </div>
          <a href="/livres/{{ $categorie }}">Les livres de {{ ucfirst(str_replace('-', ' ', $categorie)) }}</a>
        </div>
      </li>
      @endforeach
    </ul>
  </main>

  <footer>
    <p>&copy; 2025 Blogin pour écrivain. Tous droits réservés.</p>
  </footer>
</body>

</html>