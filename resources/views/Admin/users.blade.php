<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs</title>
</head>

<body>

    <h1>Gestion des utilisateurs</h1>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Modifier le rôle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>

                <!-- Formulaire pour modifier le rôle -->
                <td>
                    <form action="{{ route('admin.updateRole', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <select name="role" id="role">
                            <option value="lecteur" {{ $user->role == 'lecteur' ? 'selected' : '' }}>Lecteur</option>
                            <option value="ecrivain" {{ $user->role == 'ecrivain' ? 'selected' : '' }}>Écrivain</option>
                        </select>

                        <button type="submit">Mettre à jour</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>