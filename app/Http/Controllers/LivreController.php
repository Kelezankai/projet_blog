<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LivreController extends Controller
{
    // Affiche tous les livres
    public function index()
    {
        $livres = Livre::all();
        return view('livres.index', compact('livres'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        $categories = ['biologie', 'chimie', 'genie-civil', 'geologie', 'informatique', 'math', 'medecine', 'physique'];
        return view('livres.create', compact('categories'));
    }

    // Enregistre un nouveau livre

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'categorie' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('img'), $imageName);

        $livre = Livre::create([
            'titre' => $request->titre,
            'image' => 'img/' . $imageName,
            'categorie' => $request->categorie,
            'description' => $request->description,
            'user_id' => Auth::id(), // 👈 Plus sécurisé
        ]);

        return redirect()->route('livres.show', $livre->id)
            ->with('success', 'Livre publié avec succès !');
    }



    // Affiche un livre spécifique
    public function show($id)
    {
        $livre = Livre::findOrFail($id);
        return view('livres.show', compact('livre'));
    }

    // Tableau de bord de l'écrivain : uniquement ses livres
    public function dashboard()
    {
        if (Auth::user()->role !== 'ecrivain') {
            abort(403, 'Accès non autorisé.');
        }

        $livres = Livre::where('user_id', Auth::id())->latest()->get();

        return view('ecrivain.dashboard', compact('livres'));
    }
}
