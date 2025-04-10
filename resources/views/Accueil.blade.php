@php
$livre =[
    'zkIVBIVU' => asset('img/blue.png'),
    'zkvIVBIVU' => asset('img/bikes.png'),
    'vhbvivhlbv' => asset('img/pancakes.png'),
    'zkvibibbU' => asset('img/notes.png'),
];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=2, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/livre.css') }}">
    <link rel="stylesheet" href="{{ asset('css/https://rsms.me/inter/inter.css')}}">
    <link rel="stylesheet" href="{{ asset('css/post.css')}}"> -->
</head>
<body>
<header>
       <a class="logo" href="Accueil">Logo </a>
            <nav class="navigation">
                <a href="#">Accueil</a>
                <a href="#">à propos</a>
                <a href="#">Services</a>
                <a href="#">Contacts</a>
                <button type="submit" href="Connexion" class="btnLogin-popup">Login</button>
            </nav>
        </header>      
    <!-- <h1>Accueil</h1>
    <p>Ceci sera la page d'Accueil</p> -->
    <!-- <div class="md:container mx-auto md:px-6 lg:px-8 grid md:grid-cols-2 xl:grid-cols-3 gap-y-12 md:gap-x-8 pb-16 md:pt-16 grid grid-cols-3 gap-4"> -->
<ul>
  <li>
    <div class="chimie"> 
  <div  class="image">
    @foreach($livre as $titre => $img)
      <div  class="img">
      <a href="bookchimie"><img src="{{$img}}" alt="{{$titre}}"></a>
        
        <h1>
       {{$titre}}
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookchimie">Les livres de chimie</a>
</div>
  <!-- <a href="bookchimie">les livres de chimie</a> -->
  </li>


  <li>
  <div class="physique"> 
  <div  class="physiqueimage">
    @foreach($livre as $titre => $img)
      <div  class="physiqueimg">
        <img src="{{$img}}" alt="{{$titre}}">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
          <a href="bookphysique">{{$titre}}</a>
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookphysique">Les livres de physique</a>
</div>
  <!-- <a href="bookmath">les livres de math</a> -->
  </li>


  <li>
  <div class="geologie"> 
  <div  class="geologieimage">
    @foreach($livre as $titre => $img)
      <div  class="geologieimg">
        <img src="{{$img}}" alt="{{$titre}}">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
          <a href="bookgeologie">{{$titre}}</a>
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookgéologie">les livres de géologie</a>
</div>
  </li>


  <li>
  <div class="math"> 
  <div  class="mathimage">
    @foreach($livre as $titre => $img)
      <div  class="mathimg">
        <img src="{{$img}}" alt="{{$titre}}">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
          <a href="bookmath">{{$titre}}</a>
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookmath">les livres de Mathématique</a>
</div>
  </li>


  <li>
  <div class="geniecivil"> 
  <div  class="geniecivilimage">
    @foreach($livre as $titre => $img)
      <div  class="geniecivilimg">
        <img src="{{$img}}" alt="{{$titre}}">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
          <a href="bookgenie-civil">{{$titre}}</a>
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookgeniecivil">les livres de Génie civil</a>
</div>
  </li>
 
  <li>
  <div class="medecine"> 
  <div  class="medecineimage">
    @foreach($livre as $titre => $img)
      <div  class="medecineimg">
        <img src="{{$img}}" alt="{{$titre}}">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
          <a href="bookmedecine">{{$titre}}</a>
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookmedecine">les livres de Medecine</a>
</div>
  </li>


  <li>
  <div class="biologie"> 
  <div  class="biologieimage">
    @foreach($livre as $titre => $img)
      <div  class="biologieimg">
        <img src="{{$img}}" alt="{{$titre}}">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
          <a href="bookbiologie">{{$titre}}</a>
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookbiologie">les livres de Biologie</a>
</div>
  </li> 

  <li>
  <div class="informatique"> 
  <div  class="informatiqueimage">
    @foreach($livre as $titre => $img)
      <div  class="informatiqueimg">
        <img src="{{$img}}" alt="{{$titre}}">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
          <a href="bookinformatique">{{$titre}}</a>
        </h1>
      </div>
    @endforeach
  </div>
  <a href="bookinformatique">les livres d'Informatique</a>
</div>
  </li>   
</ul>

<!-- <footer>
  <section>
    <h1>PIED DE PAGE</h1>
  </section>
</footer> -->
</body>
</html>
