<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;  // Si tu crées un contrôleur personnalisé pour l'authentification
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('livres/Accueil', function () {
    return view('Accueil');
})->name('livres.accueil');







Route::get('livres/Inscription', function () {
    return view('Inscription');
});
Route::get('livres/Connexion', function () {
    return view('Connexion');
});
// Route pour l'inscription
Route::post('livres/Inscription', [AuthController::class, 'register']);

// Route pour la connexion
Route::post('livres/Connexion', [AuthController::class, 'login']);

Route::post('livres/deconnexion', [AuthController::class, 'logout']);


// Route::get('bookbiologie', function () {
//     return view('bookbiologie');
// })->name('livres.biologie');
// Route::get('bookchimie', function () {
//     return view('bookchimie');
// })->name('livres.chimie');
// Route::get('bookphysique', function () {
//     return view('bookphysique');
// });
// Route::get('bookmath', function () {
//     return view('bookmath');
// });
// Route::get('bookgeologie', function () {
//     return view('bookgeologie');
// });
// Route::get('bookgenie-civil', function () {
//     return view('bookgenie-civil');
// });
// Route::get('livres/bookmedecine', function () {
//     return view('bookmedecine');
// });
// Route::get('bookinformatique', function () {
//     return view('bookinformatique');
// });






// Pour publier un livre (formulaire POST)
Route::post('/livres/publier', [LivreController::class, 'publier'])->name('livres.publier');

// Afficher tous les livres pour le lecteur
Route::get('/lecteur/articles', [LivreController::class, 'tousLesLivres'])->name('lecteur.articles');

// Afficher livres par catégorie
Route::get('/livres/categorie/{categorie}', [LivreController::class, 'afficherParCategorie'])->name('livres.categorie');



Route::post('/livres/publier', [LivreController::class, 'publier'])->name('livres.publier');

Route::get('/livres/{categorie}', [LivreController::class, 'afficherParCategorie'])->name('livres.categorie');



// Route pour afficher les livres d'une catégorie spécifique
Route::get('/livres/{categorie}', [LivreController::class, 'afficherParCategorie'])->name('livres.categorie');

// Route pour publier un livre
Route::post('/livres/publier', [LivreController::class, 'publier'])->name('livres.publier');

Route::get('/livres/physique', [LivreController::class, 'afficherParCategorie'])->name('livres.physique');
Route::get('/livres/chimie', [LivreController::class, 'afficherParCategorie'])->name('livres.chimie');
Route::get('/livres/geologie', [LivreController::class, 'afficherParCategorie'])->name('livres.geologie');
Route::get('/livres/genie-civil', [LivreController::class, 'afficherParCategorie'])->name('livres.genie-civil');
Route::get('/livres/math', [LivreController::class, 'afficherParCategorie'])->name('livres.math');
Route::get('/livres/informatique', [LivreController::class, 'afficherParCategorie'])->name('livres.informatique');
Route::get('/livres/medecine', [LivreController::class, 'afficherParCategorie'])->name('livres.medecine');
Route::get('/livres/biologie', [LivreController::class, 'afficherParCategorie'])->name('livres.biologie');


// // Route dynamique pour afficher les livres par catégorie
// Route::get('/lecteur/articles/{categorie}', [LivreController::class, 'afficherParCategorie'])->name('lecteur.articles');







use Illuminate\Support\Facades\Auth;

Route::get('/ecrivain/dashboard', function () {
    // Vérifie si l'utilisateur est un écrivain
    if (Auth::check() && Auth::user()->role === 'ecrivain') {
        return view('ecrivain.dashboard');
    } else {
        return redirect()->route('home')->with('error', 'Vous n\'avez pas accès à ce tableau de bord.');
    }
})->name('ecrivain.dashboard');

Route::get('/lecteur/articles', function () {
    // Vérifie si l'utilisateur est un lecteur
    if (Auth::check() && Auth::user()->role === 'lecteur') {
        return view('lecteur.articles');
    } else {
        return redirect()->route('home')->with('error', 'Vous n\'avez pas accès à cette section.');
    }
})->name('lecteur.articles');

// Route d'accueil (pour les non connectés ou autres)
// Route::get('/home', function () {
//     return view('home'); // Vue d'accueil
// })->name('home');







// Route pour afficher tous les utilisateurs (accessible uniquement par un administrateur)
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');

// Route pour mettre à jour le rôle d'un utilisateur
Route::post('/admin/users/{userId}/update', [AdminController::class, 'updateUserRole'])->name('admin.updateRole');





// use App\Http\Controllers\AdminController;

// Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
// Route::post('/admin/users/{id}/update-role', [AdminController::class, 'updateUserRole'])->name('admin.updateRole');





// Route pour afficher la gestion des utilisateurs
Route::get('/admin/dashboard', [AdminController::class, 'showUsers'])->name('admin.dashboard');

// Route pour mettre à jour le rôle d'un utilisateur
Route::put('/admin/user/{id}/update', [AdminController::class, 'updateUserRole'])->name('admin.updateRole');





Route::post('livres/Inscription', [AuthController::class, 'register']);
// Route::get('inscription/attente', function () {
//     return view('inscription.attente'); // Page d'attente après l'inscription
// })->name('inscription.attente');

// Admin - Gestion des utilisateurs
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
Route::put('/admin/user/{id}/update', [AdminController::class, 'updateUserRole'])->name('admin.updateRole');







// Afficher le formulaire d'inscription
Route::get('/inscription', [AuthController::class, 'showRegistrationForm'])->name('inscription.form');

// Soumettre le formulaire d'inscription
Route::post('/inscription', [AuthController::class, 'register'])->name('inscription.submit');

//Page d'attente après inscription
// Route::get('/attente', function () {
//     return view('attente'); // Crée une vue 'attente.blade.php'
// })->name('inscription.attente');




Route::post('/livres/{livre}/commenter', [CommentaireController::class, 'store'])->name('commentaire.store');
