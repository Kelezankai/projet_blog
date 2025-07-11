<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;  // Si tu crées un contrôleur personnalisé pour l'authentification
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DemandeEcrivainController;



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
Route::get('/blogg', [LivreController::class, 'index'])->name('livre.index');



Route::prefix('livre')->group(function () {
    Route::get('/', [LivreController::class, 'index'])->name('livre.index'); // Liste des livres
    Route::get('/create', [LivreController::class, 'create'])->name('livre.create'); // Formulaire de création
    Route::post('/', [LivreController::class, 'store'])->name('livre.store'); // Enregistrement d'un livre
    Route::get('/{id}', [LivreController::class, 'show'])->name('livre.show'); // Afficher un livre 
    Route::get('/livres', [LivreController::class, 'index'])->name('livres.index');
});


Route::resource('livres', LivreController::class);






Route::get('/admin/demandes', [DemandeEcrivainController::class, 'adminIndex'])->name('admin.demandes.index');
Route::post('/admin/demandes/{id}/approuver', [DemandeEcrivainController::class, 'approuver'])->name('admin.demandes.approuver');
Route::delete('/admin/demandes/{id}', [DemandeEcrivainController::class, 'supprimer'])->name('admin.demandes.supprimer');


Route::get('/devenir-ecrivain', [DemandeEcrivainController::class, 'create'])->name('demande-ecrivain.create');
Route::post('/devenir-ecrivain', [DemandeEcrivainController::class, 'store'])->name('demande-ecrivain.store');

Route::post('/livres/{livre}/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');


Route::get('/ecrivain/dashboard', [LivreController::class, 'dashboard'])
    ->name('dashboard.ecrivain')
    ->middleware('auth');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');


// Utilisateurs
Route::get('/admin/utilisateurs', [AdminController::class, 'showUsers'])->name('admin.users.index');
Route::patch('/admin/utilisateurs/{id}/role', [AdminController::class, 'updateUserRole'])->name('admin.users.updateRole');
Route::delete('/admin/utilisateurs/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');

// Livres
Route::get('/admin/livres', [AdminController::class, 'showLivres'])->name('admin.livres.index');
Route::delete('/admin/livres/{id}', [AdminController::class, 'deleteLivre'])->name('admin.livres.delete');

// Commentaires admin
Route::get('/admin/commentaires', [AdminController::class, 'showCommentaires'])->name('admin.commentaires.index');
Route::delete('/admin/commentaires/{id}', [AdminController::class, 'deleteCommentaire'])->name('admin.commentaires.delete');
