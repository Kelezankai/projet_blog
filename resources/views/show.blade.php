@extends('layouts.app')
<?php

// Connexion à la base de données
//  $dsn = "mysql:host=localhost;dbname=projet_tache;charset=utf8";
//  $user = "root";
//  $password = "code";

//  try {
//     $pdo = new PDO($dsn, $user, $password);
//      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  } catch (PDOException $e) {
//      die("Erreur de connexion : " . $e->getMessage());
//  }

 //Requête SQL pour récupérer les livres de physique
// $query = "SELECT * from livres where id='1' ";
//  $stmt = $pdo->query($query);
// $livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$livre = (object) $livre; // Convertit le tableau en objet

// // $livres = array(
//     'blue image' => array(
//         'image' => 'img/blue.png',
//         'description' => "Un voyage apaisant à travers des paysages d'un bleu profond."
//     ),
//     'bikes image' => array(
//         'image' => 'img/bikes.png',
//         'description' => "L'histoire fascinante des cyclistes intrépides à travers le monde."
//     ),
//     'pancakes image' => array(
//         'image' => 'img/pancakes.png',
//         'description' => "Une aventure gourmande autour des crêpes les plus délicieuses."
//     ),
// ); 
?>
@section('title', 'Découvrir')

@section('content')
<h1 class="text-4xl font-bold text-center mb-12 text-orange-500"><?= htmlspecialchars($livre->titre) ?></h1>
<section class="container mx-auto px-4 py-12">
   <div class="Bookbiologie">
          <div class="container mx-auto flex justify-center items-center min-h-screen">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-3/4" >
                   <img src="<?= asset($livre->image) ?>" alt="<?= htmlspecialchars( $livre->titre ) ?>" class="w-full h-[400px] object-cover">
                   <div class="mt-10 sm:mt-14 px-4 sm:px-6 md:px-0">
                     <form method="POST" action="" novalidate>
                     <input type="text" name="comment" placeholder="Écrivez votre commentaire et tapez sur ↵" class="w-full h-14 px-6 border-none focus:outline-none focus:ring-0 bg-gray-100 rounded-full">   
                     </form>
                    </div> 
                </div>
                <div class="p-6">
                  <p class="text-center max-w-2xl mx-auto text-gray-600 text-lg mt-4"><?= htmlspecialchars($livre->description) ?></p>
                </div>
          </div>
    </div>
@endsection






<!-- <link rel="stylesheet" href="{{ asset('https://rsms.me/inter/inter.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<article>
    dernier modification de l'image "class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300""
      <img class="w-full" src="../img/pancakes.png" alt="pancakes.png">
      <div class="px-4 sm:px-6 md:px-0"> -->
        <!-- <div x-data="{ modal: false }" x-cloak class="flex space-x-4 mt-6">
          <a href="edit.html" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Modifier le post
          </a>
          <button @click="modal = true" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Supprimer le post
          </button> -->
          <!-- <div x-show="modal" class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
              <div 
                x-show="modal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
              ></div>
              <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
              <div
                @click.away="modal = false"
                x-show="modal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
              >
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                      Suppression du post
                    </h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500">
                        Êtes-vous certain(e) de vouloir supprimer ce post ? Cette action est irréversible.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                  <button type="button" @click="document.getElementById('delete-form').submit();" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Supprimer le post
                  </button>
                  <button @click="modal = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                    Annuler
                  </button>
                </div>
                <form method="POST" action="" id="delete-form" class="hidden">
                </form> -->
              <!-- </div>
            </div> -->
          <!-- </div>
        </div> -->
        <!-- <time datetime="" class="block mt-6 font-normal text-sm text-gray-700">
          Publié le 18/02/2021 à 10:31
        </time>
        <h1 class="mt-6 text-4xl font-bold text-gray-900 sm:leading-normal">
          Lorem ipsum dolor sit amet consectetur adipisicing.
        </h1>
        <ul class="mt-6 flex space-x-8 font-bold text-sm text-gray-700">
          <li class="flex items-center leading-none">
            <svg class="stroke-current w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="mb-px ml-1">25</span>
          </li>
          <li class="flex items-center leading-none">
            <svg class="stroke-current w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="mb-px ml-1">6 minutes</span>
          </li>
        </ul>
        <p class="mt-6 text-lg lg:text-xl leading-loose lg:leading-loose text-gray-700">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis mollitia totam obcaecati, possimus modi nulla! Est asperiores, tempore commodi accusamus alias repudiandae iste incidunt hic suscipit quae quia pariatur rerum dignissimos facilis minus culpa, voluptatem, harum delectus voluptate. Deserunt harum accusantium natus atque delectus quidem, libero quaerat, repudiandae vitae similique soluta incidunt neque repellendus iste, veritatis praesentium reiciendis. Vel similique repellat culpa illum iusto accusamus laudantium repudiandae cumque doloremque debitis aperiam aliquam rem modi obcaecati, ad repellendus ipsum cum, pariatur quod. Numquam, quis? Molestias quos minus est voluptatem. Voluptas accusamus adipisci voluptate laborum dolore? Doloremque, incidunt omnis?<br>
          Voluptate perspiciatis consequuntur fugiat exercitationem, sunt facilis quisquam officia sint aut accusamus at iure natus! Adipisci ullam optio illo consectetur quisquam natus a porro in beatae. Omnis neque sunt quasi voluptatibus, nemo suscipit necessitatibus ipsa harum molestiae vel debitis ipsam laboriosam accusantium incidunt optio quas quae quo maiores dicta consequatur dolore! Similique quaerat eos excepturi ratione ipsa eaque. Laboriosam voluptas delectus impedit, voluptate ipsa consequuntur quas quidem ut a id, blanditiis illum harum nulla magni esse earum alias provident voluptatibus hic cumque non expedita dolores tenetur? Iusto exercitationem odit, explicabo rerum quibusdam libero assumenda repellat magni aliquid iste eaque iure ipsum possimus, provident, dignissimos accusantium? Eius at voluptatibus suscipit commodi quam, accusamus veritatis vitae reprehenderit veniam aliquam nobis quo.<br>
          Veniam illum a soluta, sint quo, numquam corrupti, officiis voluptate saepe facilis consequuntur praesentium quidem. Vero repudiandae voluptate eius aperiam explicabo laboriosam, officiis nam delectus facere, in sint assumenda doloremque quidem a alias similique tenetur natus nesciunt doloribus? Voluptatem minima eligendi nostrum corporis eius iure alias! Laborum dicta unde natus at quos esse? Commodi impedit veritatis, in soluta iusto molestiae omnis veniam natus explicabo quasi iste accusantium magnam at unde enim. Autem, molestiae laboriosam? Repudiandae, assumenda ea laborum obcaecati nisi consectetur commodi iure facere soluta dolores ipsum nam recusandae at aliquid consequuntur. Labore quae consequatur non at, libero quas explicabo dolorum nemo, quos doloremque nostrum aperiam dolores alias sequi in blanditiis repellendus inventore similique iure perspiciatis provident officiis sed. Rerum obcaecati quas amet deserunt.
        </p>
      </div>
    </article> 

    <div class="mt-10 sm:mt-14 px-4 sm:px-6 md:px-0">
      <hr class="border-gray-100">
      <form method="POST" action="" novalidate>
        <input type="text" name="comment" placeholder="Écrivez votre commentaire et tapez sur ↵" class="w-full h-14 px-6 border-none focus:outline-none focus:ring-0 bg-gray-100 rounded-full">   
      </form>
      <div class="mt-10 sm:mt-14 space-y-8">
        <div class="flex space-x-3">
          <img src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
          <div>
            <p class="text-gray-800">
              <strong class="font-bold text-gray-900">Steven Sil</strong>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In praesentium tenetur, ut nulla quaerat sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. In deserunt deleniti illum. Lorem ipsum dolor sit amet.
            </p>
            <time datetime="" class="mt-0.5 text-sm text-gray-500">
              18/02/2021 à 10:31
            </time>
          </div>
        </div>
        <div class="flex space-x-3">
          <img src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
          <div>
            <p class="text-gray-800">
              <strong class="font-bold text-gray-900">Steven Sil</strong>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In praesentium tenetur, ut nulla quaerat sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. In deserunt deleniti illum. Lorem ipsum dolor sit amet.
            </p>
            <time datetime="" class="mt-0.5 text-sm text-gray-500">
              18/02/2021 à 10:31
            </time>
          </div>
        </div>
      </div>
  </div> -->
