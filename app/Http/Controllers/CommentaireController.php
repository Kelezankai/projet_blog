<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function store(Request $request, $livre_id)
    {
        $request->validate([
            'contenu' => 'required|string|max:1000',
        ]);

        if (!Auth::check() || Auth::user()->role !== 'lecteur') {
            return redirect()->back()->with('error', 'Seuls les lecteurs peuvent commenter.');
        }

        Commentaire::create([
            'contenu' => $request->contenu,
            'user_id' => Auth::id(),
            'livre_id' => $livre_id,
        ]);

        return redirect()->back()->with('success', 'Commentaire publié avec succès.');
    }
}
