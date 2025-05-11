<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{




    public function login(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Vérification des informations d'identification
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Rediriger vers la page d'accueil si l'authentification réussit
            return redirect()->route('discover');
        }

        // Retourner une erreur si l'authentification échoue
        return back()->withErrors([
            'email' => 'Les informations d\'identification sont incorrectes.',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'lecteur', // nom correct dans la base
        ]);

        Auth::login($user);

        return redirect()->route('Accueil')->with('success', 'Inscription réussie !');
    }
}
