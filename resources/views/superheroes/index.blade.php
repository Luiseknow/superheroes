<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Superhéroes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Lista de Superhéroes</h2>
    
    <a href="{{ route('superheroes.create') }}" class="btn btn-success mb-3">Registrar Nuevo</a>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nombre de Héroe</th>
                <th>Nombre Real</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($superheroes as $hero)
            <tr>
                <td>{{ $hero->hero_name }}</td>
                <td>{{ $hero->real_name }}</td>
                <td>
                    <a href="{{ route('superheroes.show', $hero->id) }}" class="btn btn-info btn-sm text-white">Ver</a>
                    
                    <a href="{{ route('superheroes.edit', $hero->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    
                    <form action="{{ route('superheroes.destroy', $hero->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar a {{ $hero->hero_name }}?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">No hay superhéroes registrados todavía. ¡Agrega el primero!</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>