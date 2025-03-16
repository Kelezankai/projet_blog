<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('Accueil',function(){
    return view('Accueil');
});
Route::get('Inscription',function(){
    return view('Inscription');
});
Route::get('Connexion',function(){
    return view('Connexion');
});
Route::get('bookbiologie',function(){
    return view('bookbiologie');
});
Route::get('bookchimie',function(){
    return view('bookchimie');
});
Route::get('bookphysique',function(){
    return view('bookphysique');
});
Route::get('bookmath',function(){
    return view('bookmath');
});
Route::get('bookgeologie',function(){
    return view('bookgeologie');
});
Route::get('bookgenie-civil',function(){
    return view('bookgenie-civil');
});
Route::get('bookmedecine',function(){
    return view('bookmedecine');
});