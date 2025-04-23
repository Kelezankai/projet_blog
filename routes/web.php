<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;  // Si tu crées un contrôleur personnalisé pour l'authentification
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/Accueil', function () {
    return view('Accueil'); // Respecte bien la casse
});

Route::get('Inscription', function () {
    return view('Inscription');
});
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
