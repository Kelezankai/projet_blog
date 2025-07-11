@extends('layouts.app')

@section('title', 'Gestion des utilisateurs')

@section('content')
<style>
    .table-container {
        background-color: #fffaf7;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(255, 107, 0, 0.08);
        overflow: hidden;
    }

    .table-header {
        background: linear-gradient(to right, #ff6b00, #ffa15c);
        color: white;
    }

    .role-select {
        border: 1px solid #ffb07c;
        border-radius: 8px;
        padding: 4px 8px;
        font-size: 0.9rem;
        background-color: #fff8f2;
        color: #444;
    }

    .role-select:focus {
        outline: none;
        border-color: #ff6b00;
        box-shadow: 0 0 0 2px rgba(255, 107, 0, 0.2);
    }

    .btn-danger {
        background-color: #ff4d4f;
        color: white;
        padding: 5px 12px;
        font-size: 0.9rem;
        border-radius: 20px;
        transition: 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #d9363e;
    }

    .alert-success {
        background-color: #e6fffa;
        border-left: 5px solid #2dd4bf;
        padding: 12px 16px;
        color: #065f46;
        border-radius: 10px;
    }
</style>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-extrabold text-orange-600 mb-6">👥 Gestion des utilisateurs</h1>

    @if(session('success'))
    <div class="alert-success mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="table-container">
        <table class="w-full text-sm">
            <thead class="table-header text-left">
                <tr>
                    <th class="px-5 py-3">Nom</th>
                    <th class="px-5 py-3">Email</th>
                    <th class="px-5 py-3">Rôle</th>
                    <th class="px-5 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse($users as $user)
                <tr class="border-b hover:bg-orange-50 transition duration-150">
                    <td class="px-5 py-3 font-medium">{{ $user->name }} {{ $user->firstname }}</td>
                    <td class="px-5 py-3">{{ $user->email }}</td>
                    <td class="px-5 py-3">
                        <form action="{{ route('admin.users.updateRole', $user->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('PATCH')
                            <select name="role" onchange="this.form.submit()" class="role-select">
                                <option value="lecteur" {{ $user->role == 'lecteur' ? 'selected' : '' }}>Lecteur</option>
                                <option value="ecrivain" {{ $user->role == 'ecrivain' ? 'selected' : '' }}>Écrivain</option>
                            </select>
                        </form>
                    </td>
                    <td class="px-5 py-3">
                        <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Confirmer la suppression ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-danger">🗑️ Retirer</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center px-5 py-4 text-gray-500">Aucun utilisateur trouvé.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection