<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;  // Si tu crées un contrôleur personnalisé pour l'authentification
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('Accueil'); // Respecte bien la casse
})->name('Accueil');

Route::get('/discover', function () {
    return view('discover');
})->name('discover');

Route::get('/decouvrir', function () {
    return view('discover');
})->name('decouvrir');



Route::post('/login', [AuthController::class, 'login'])->name('login');

// Optionnel : route pour la page de connexion (GET)
Route::get('/login', function () {
    return view('auth.login');
})->name('login.page');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

// Route::get('/livre/detail', function () {
//     return view('book.detail');
// })->name('livre.detail');






Route::get('livres/Connexion', function () {
    return view('Connexion');
});
Route::get('bookbiologie', function () {
    return view('bookbiologie');
});
Route::get('bookchimie', function () {
    return view('bookchimie');
});
Route::get('bookphysique', function () {
    return view('bookphysique');
});
Route::get('bookmath', function () {
    return view('bookmath');
});
Route::get('bookgeologie', function () {
    return view('bookgeologie');
});
Route::get('bookgenie-civil', function () {
    return view('bookgenie-civil');
});
Route::get('bookmedecine', function () {
    return view('bookmedecine');
});
Route::get('bookinformatique', function () {
    return view('bookinformatique');
});
Route::get('Lecture', function () {
    return view('show');
});
// route permettant d'afficher un article en fonction de son id 
Route::get('/livre/{id}', [LivreController::class, 'show'])->name('livre.show');
