<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LivreController extends Controller
{
    public function show($id)
    {
        // Récupérer le livre depuis la base de données
        $livre = DB::table('livres')->where('id', $id)->first();
        // Envoyer le livre à la vue
        return view('show', compact('livre'));
    }
   
    
}
