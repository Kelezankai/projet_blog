<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Afficher tous les utilisateurs
    public function showUsers()
    {
        // Pas besoin de vérification ici, on affiche directement les utilisateurs
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    // Mettre à jour le rôle d'un utilisateur
    public function updateUserRole(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validation du rôle
        $request->validate([
            'role' => 'required|in:lecteur,ecrivain',
        ]);

        // Mise à jour du rôle
        $user->role = $request->input('role');
        $user->save();

        return back()->with('success', 'Rôle mis à jour avec succès');
    }
}
