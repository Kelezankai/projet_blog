<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Livre;
use Illuminate\Support\Facades\Auth;
use App\Models\Commentaire;


class AdminController extends Controller
{
    // 🔒 Vérifie si l'utilisateur est un admin
    private function verifierAdmin()
    {
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'Accès refusé'); // Retourne une erreur 403 si non admin
        }
    }

    // 🎯 Affiche le tableau de bord de l'admin
    public function dashboard()
    {
        $this->verifierAdmin();
        return view('admin.dashboard');
    }

    // 👥 Liste des utilisateurs (hors admin)
    public function showUsers()
    {
        $this->verifierAdmin();

        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.users.index', compact('users'));
    }

    // 🔁 Mise à jour du rôle (lecteur <=> écrivain)
    public function updateUserRole(Request $request, $id)
    {
        $this->verifierAdmin();

        $request->validate([
            'role' => 'required|in:lecteur,ecrivain',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->input('role');
        $user->save();

        return back()->with('success', 'Rôle mis à jour avec succès.');
    }

    // ❌ Supprimer un utilisateur + ses livres
    public function deleteUser($id)
    {
        $this->verifierAdmin();

        $user = User::findOrFail($id);

        // Supprimer les livres liés s'ils existent (relation définie)
        if (method_exists($user, 'livres')) {
            $user->livres()->delete();
        }

        $user->delete();

        return back()->with('success', 'Utilisateur supprimé avec succès.');
    }

    // 📚 Voir tous les livres publiés avec leur auteur
    public function showLivres()
    {
        $this->verifierAdmin();

        $livres = Livre::with('user')->get(); // Assure que la relation user est chargée
        return view('admin.livres.index', compact('livres'));
    }

    // ❌ Supprimer un livre spécifique
    public function deleteLivre($id)
    {
        $this->verifierAdmin();

        $livre = Livre::findOrFail($id);
        $livre->delete();

        return back()->with('success', 'Livre supprimé avec succès.');
    }


public function showCommentaires()
{
    $this->verifierAdmin();
    $commentaires = Commentaire::with('user', 'livre')->latest()->get();
    return view('admin.commentaires.index', compact('commentaires'));
}

public function deleteCommentaire($id)
{
    $this->verifierAdmin();
    $commentaire = Commentaire::findOrFail($id);
    $commentaire->delete();
    return back()->with('success', 'Commentaire supprimé.');
}
}
