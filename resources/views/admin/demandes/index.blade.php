@extends('layouts.app')

@section('content')
<style>
    .admin-container {
        padding: 2rem;
        background-color: #fefaf6;
    }

    .admin-title {
        font-size: 2rem;
        font-weight: bold;
        color: #ff6600;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .admin-table {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(255, 128, 0, 0.1);
        overflow: hidden;
    }

    .admin-table thead {
        background-color: #ffeddc;
        color: #444;
    }

    .admin-table th,
    .admin-table td {
        padding: 1rem;
        vertical-align: middle;
        text-align: center;
    }

    .badge {
        font-size: 0.85rem;
        padding: 0.4rem 0.75rem;
        border-radius: 50px;
    }

    .bg-success {
        background-color: #28a745;
        color: #fff;
    }

    .bg-warning {
        background-color: #ffc107;
        color: #fff;
    }

    .btn-sm {
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
        border-radius: 30px;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 8px;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
    }
</style>

<div class="container admin-container">
    <h2 class="admin-title">📋 Liste des demandes d’écrivains</h2>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($demandes->isEmpty())
    <p class="text-center">Aucune demande trouvée.</p>
    @else
    <div class="table-responsive admin-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Motivation</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($demandes as $demande)
                <tr>
                    <td>{{ $demande->nom }}</td>
                    <td>{{ $demande->email }}</td>
                    <td>{{ Str::limit($demande->motivation, 100) }}</td>
                    <td>
                        @if($demande->approuve)
                        <span class="badge bg-success">Approuvée</span>
                        @else
                        <span class="badge bg-warning">En attente</span>
                        @endif
                    </td>
                    <td>
                        @if(!$demande->approuve)
                        <form action="{{ route('admin.demandes.approuver', $demande->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">✅ Approuver</button>
                        </form>
                        @endif
                        <form action="{{ route('admin.demandes.supprimer', $demande->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette demande ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">🗑 Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection