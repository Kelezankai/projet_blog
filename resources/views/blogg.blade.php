@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="{{ asset('images/' . $livre->image) }}" class="img-fluid" alt="Couverture du livre">
            <h1>{{ $livres->titre }}</h1>
            <p>{{ $livres->description }}</p>
        </div>
    </div>
</div>
@endsection