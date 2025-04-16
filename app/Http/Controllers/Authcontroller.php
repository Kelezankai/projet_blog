<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Formulaire d'inscription
    public function showRegistrationForm()
    {
        return view ('Inscription');
    }

    // Traitement de l'inscription
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:lecteur,ecrivain',
        ]);

        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => null, // Rôle en attente
        ]);

        Auth::login($user);

        return redirect()->route('livres.accueil')->with('success', 'Inscription réussie ! Bienvenue sur notre plateforme.');
    }

    // Formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Traitement de la connexion
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.users');
            } elseif ($user->role === 'lecteur') {
                return redirect()->route('lecteur.articles');
            } elseif ($user->role === 'ecrivain') {
                return redirect()->route('ecrivain.dashboard');
            } else {
                return redirect()->route('inscription.attente')->with('error', 'Votre rôle n\'a pas encore été validé.');
            }
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ]);
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout(); // Déconnexion de l'utilisateur
        $request->session()->invalidate(); // Invalider la session
        $request->session()->regenerateToken(); // Regénérer le token CSRF

        return redirect()->route('livres.accueil'); // Rediriger vers la page d'accueil des livres
    }
}