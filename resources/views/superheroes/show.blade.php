<!DOCTYPE html>
<html lang="es">
<head>
    <title>Perfil de {{ $superhero->hero_name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5 text-center">
    <h2>Perfil de {{ $superhero->hero_name }}</h2>
    
    <div class="card mx-auto mt-4" style="width: 18rem;">
        <img src="{{ asset('images/' . $superhero->photo_url . '.jpeg') }}" class="card-img-top" alt="Foto de {{ $superhero->hero_name }}">
        
        <div class="card-body">
            <h5 class="card-title">Nombre Real: {{ $superhero->real_name }}</h5>
            <p class="card-text">{{ $superhero->additional_info }}</p>
            <a href="{{ route('superheroes.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</body>
</html>