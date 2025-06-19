@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Publier un livre</h2>
    <form action="{{ route('livre.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Titre du livre :</label>
        <input type="text" id="title" name="title" class="form-control" required>

        <label for="image">Image de couverture :</label>
        <input type="file" id="image" name="image" class="form-control" accept="image/*" required>

        <label for="category">Catégorie :</label>
        <select id="category" name="category" class="form-control" required>
            <option value="">Choisissez une catégorie</option>
            <option value="roman">Roman</option>
            <option value="science-fiction">Science-fiction</option>
            <option value="poésie">Poésie</option>
            <option value="autre">Autre</option>
        </select>

        <label for="description">Description :</label>
        <textarea id="description" name="description" class="form-control" rows="5" required></textarea>

        <button type="submit" class="btn btn-primary mt-3">Publier</button>
    </form>
</div>
@endsection