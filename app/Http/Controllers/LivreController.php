<?php
namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    // Affiche tous les livres
    public function index()
    {
        $livres = Livre::all();
        return view('livres.index', compact('livres'));
    }

    // Affiche un livre spécifique
    public function show($id)
    {
        $livre = Livre::findOrFail($id);
        return view('livres.show', compact('livre'));
    }

    // Enregistre un nouveau livre
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'category' => 'required|string',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $livre = Livre::create([
            'title' => $request->title,
            'image' => $imagePath,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        return redirect()->route('livre.show', ['id' => $livre->id])
            ->with('success', 'Livre publié avec succès !');
    }
}