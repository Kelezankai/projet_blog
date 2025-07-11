@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff8f0;
    }

    .writer-request-container {
        max-width: 600px;
        margin: 3rem auto;
        padding: 2.5rem 2rem;
        background-color: #fffaf5;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(255, 150, 0, 0.15);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .writer-request-container h2 {
        font-weight: 700;
        color: #ff6b00;
        margin-bottom: 2rem;
        text-align: center;
        font-size: 2rem;
    }

    label.form-label {
        display: block;
        font-weight: 600;
        color: #5a3e36;
        margin-bottom: 0.6rem;
        text-align: center;
        font-size: 1.1rem;
    }

    input.form-control,
    textarea.form-control {
        width: 100%;
        max-width: 400px;
        margin: 0 auto 1.6rem auto;
        padding: 10px 15px;
        font-size: 1rem;
        border-radius: 12px;
        border: 1.5px solid #ffe0c0;
        box-shadow: 0 3px 6px rgba(255, 126, 0, 0.1);
        display: block;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        resize: vertical;
    }

    input.form-control:focus,
    textarea.form-control:focus {
        border-color: #ff7e00;
        box-shadow: 0 0 8px rgba(255, 126, 0, 0.4);
        outline: none;
    }

    .btn-orange {
        background: linear-gradient(45deg, #ff7e00, #ff4b00);
        border: none;
        color: white;
        font-weight: 700;
        padding: 12px 40px;
        border-radius: 30px;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(255, 75, 0, 0.4);
        transition: all 0.3s ease-in-out;
        display: block;
        margin: 2rem auto 0 auto;
        max-width: 300px;
        text-align: center;
        font-size: 1.1rem;
    }

    .btn-orange:hover {
        background: linear-gradient(45deg, #ff4b00, #d14000);
        transform: scale(1.05);
    }

    .alert-success,
    .alert-error {
        padding: 1rem;
        border-radius: 10px;
        max-width: 600px;
        margin: 1rem auto 2rem auto;
        font-weight: 600;
        text-align: center;
        font-size: 1rem;
    }

    .alert-success {
        background-color: #eaffea;
        color: #2f7a2f;
        border-left: 6px solid #38c172;
    }

    .alert-error {
        background-color: #fff0f0;
        color: #b30000;
        border-left: 6px solid #ff0000;
    }

    .btn-retour {
        text-align: center;
        margin-top: 1.5rem;
    }

    .btn-retour a {
        text-decoration: none;
        color: #ff6b00;
        font-weight: bold;
        font-size: 1rem;
    }

    .btn-retour a:hover {
        text-decoration: underline;
    }
</style>

<div class="writer-request-container">
    <h2>📨 Devenir écrivain</h2>

    {{-- Message succès --}}
    @if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
    @endif

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
    <div class="alert-error">
        <ul style="list-style-type: none; padding: 0; margin: 0;">
            @foreach ($errors->all() as $error)
            <li>⚠️ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Affichage du formulaire seulement si connecté --}}
    @auth
    <form action="{{ route('demande-ecrivain.store') }}" method="POST">
        @csrf

        <label for="nom" class="form-label">🧑 Nom complet</label>
        <input type="text" id="nom" name="nom" class="form-control" value="{{ Auth::user()->name ?? old('nom') }}" required placeholder="Ex: Mariam Traoré">

        <label for="email" class="form-label">📧 Adresse email</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email ?? old('email') }}" readonly required>

        <label for="motivation" class="form-label">📝 Pourquoi voulez-vous devenir écrivain ?</label>
        <textarea id="motivation" name="motivation" class="form-control" rows="4" required placeholder="Décrivez votre motivation...">{{ old('motivation') }}</textarea>

        <button type="submit" class="btn-orange">✅ Envoyer la demande</button>
    </form>
    @else
    <div class="alert-error">
        🚫 Vous devez <a href="{{ route('login') }}" style="color:#ff4b00;">vous connecter</a> pour faire une demande d’écrivain.
    </div>
    @endauth

    <div class="btn-retour">
        <a href="{{ url('/') }}">← Retour à l’accueil</a>
    </div>
</div>
@endsection