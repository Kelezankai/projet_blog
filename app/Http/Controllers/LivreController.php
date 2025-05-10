<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivreController extends Controller
{
    // ✅ Pour publier un livre (réservé à l’écrivain)
    public function publier(Request $request)
    {
        if (!Auth::check() || Auth::user()->role !== 'ecrivain') {
            return redirect()->route('home')->with('error', 'Seuls les écrivains peuvent publier des livres.');
        }

        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'categorie' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('livres', 'public'); // stocke l'image dans storage/app/public/livres
        }

        Livre::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'categorie' => $request->categorie,
            'user_id' => Auth::id(),
            'image' => $imagePath, // enregistre le chemin de l’image
        ]);

        return redirect()->route('livres.categorie', ['categorie' => $request->categorie])
            ->with('success', 'Livre publié avec succès.');
    }

    // ✅ Afficher tous les livres pour les lecteurs
    public function tousLesLivres()
    {
        if (!Auth::check() || Auth::user()->role !== 'lecteur') {
            return redirect()->route('home')->with('error', 'Accès réservé aux lecteurs.');
        }

        $livres = Livre::all();
        return view('lecteur.articles', compact('livres'));
    }

    // ✅ Affichage des livres par catégorie (accessible à tous si connecté)
    public function afficherParCategorie($categorie)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter pour voir les livres.');
        }

        $livres = Livre::where('categorie', $categorie)->get();
        $viewName = 'book' . strtolower($categorie); // ex: bookroman, bookpoesie...

        if (!view()->exists($viewName)) {
            abort(404, 'La vue pour cette catégorie n\'existe pas.');
        }

        return view($viewName, compact('livres'));
    }
}
