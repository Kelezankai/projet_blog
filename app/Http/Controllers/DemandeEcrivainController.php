<?php

namespace App\Http\Controllers;


use App\Models\DemandeEcrivain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DemandeEcrivainController extends Controller
{
    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour faire une demande.');
        }

        return view('demande_ecrivain.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'motivation' => 'required|string',
        ]);

        DemandeEcrivain::create($request->all());

        return back()->with('success', 'Votre demande a été envoyée avec succès. Nous vous répondrons bientôt.');
    }




    public function adminIndex()
    {
        $demandes = \App\Models\DemandeEcrivain::latest()->get();
        return view('admin.demandes.index', compact('demandes'));
    }

    public function approuver($id)
    {
        $demande = \App\Models\DemandeEcrivain::findOrFail($id);
        $demande->approuve = true;
        $demande->save();

        // Mise à jour du rôle de l'utilisateur
        $user = \App\Models\User::where('email', $demande->email)->first();
        if ($user) {
            $user->role = 'ecrivain';
            $user->save();
        }

        return back()->with('success', 'Demande approuvée et rôle mis à jour avec succès.');
    }


    public function supprimer($id)
    {
        $demande = \App\Models\DemandeEcrivain::findOrFail($id);

        // Si la demande était approuvée, modifier le rôle de l’utilisateur
        if ($demande->approuve) {
            // On suppose que l’email de la demande correspond à l’utilisateur
            $user = \App\Models\User::where('email', $demande->email)->first();

            if ($user) {
                $user->role = 'lecteur';
                $user->save();
            }
        }

        $demande->delete();

        return back()->with('success', 'Demande supprimée. Le rôle a été réinitialisé.');
    }
}
