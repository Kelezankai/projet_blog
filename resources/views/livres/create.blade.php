@extends('layouts.app')

@section('title', 'Publier un livre')

@section('content')
<style>
    body {
        background-color: #fff8f0;
    }

    .card {
        animation: fadeIn 0.8s ease-in-out;
        background: #fffdfb;
        border: 1px solid #f1e1d6;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h3 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #ff5e00;
        font-weight: bold;
    }

    .form-label {
        font-weight: 600;
        color: #5a3e36;
        display: block;
        text-align: center;
        margin-bottom: 0.5rem;
        font-size: 1.05rem;
    }

    .form-control,
    .form-select {
        width: 100%;
        max-width: 500px;
        margin: 0 auto 1.5rem auto;
        padding: 0.6rem 1rem;
        border-radius: 999px;
        box-shadow: 0 2px 6px rgba(255, 126, 0, 0.08);
        border: 1px solid #ffd8b5;
        transition: 0.3s ease;
        font-size: 1rem;
        display: block;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #ff7e00;
        box-shadow: 0 0 0 0.2rem rgba(255, 126, 0, 0.25);
        outline: none;
    }

    textarea.form-control {
        border-radius: 16px;
        resize: vertical;
    }

    .btn-wattpad {
        background: linear-gradient(45deg, #ff7e00, #ff4b00);
        border: none;
        color: white;
        font-weight: bold;
        padding: 12px 40px;
        border-radius: 50px;
        transition: all 0.3s ease-in-out;
        font-size: 1.1rem;
        box-shadow: 0 6px 14px rgba(255, 100, 0, 0.3);
    }

    .btn-wattpad:hover {
        background: linear-gradient(45deg, #ff4b00, #d14000);
        transform: scale(1.05);
    }

    .alert-danger {
        background-color: #ffe0e0;
        color: #a94442;
        border: 1px solid #f5c6cb;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-center rounded-top-4" style="background: #fff5ec; border-bottom: 1px solid #f1dfd0;">
                    <h3 class="my-2">📘 Publier un nouveau livre</h3>
                </div>

                <div class="card-body px-5 py-4">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>🚨 Oups !</strong> Veuillez corriger les erreurs :
                        <ul class="mt-2 mb-0">
                            @foreach ($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('livres.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                        <label for="titre" class="form-label">Titre du livre</label>
                        <input type="text" name="titre" class="form-control" placeholder="Ex : Le mystère des dunes" value="{{ old('titre') }}" required>

                        <label for="categorie" class="form-label">Catégorie</label>
                        <select name="categorie" class="form-select" required>
                            <option value="">-- Choisissez une catégorie --</option>
                            @foreach ($categories as $categorie)
                            <option value="{{ $categorie }}" {{ old('categorie') == $categorie ? 'selected' : '' }}>
                                {{ ucfirst($categorie) }}
                            </option>
                            @endforeach
                        </select>

                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Résumé du livre..." required>{{ old('description') }}</textarea>

                        <label for="image" class="form-label">Image de couverture</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-wattpad">
                                📤 Publier le livre
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection