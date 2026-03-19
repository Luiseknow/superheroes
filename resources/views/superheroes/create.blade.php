<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Registrar Nuevo Superhéroe</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('superheroes.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label text-secondary fw-bold">Nombre de Héroe</label>
                            <input type="text" name="hero_name" class="form-control" required placeholder="Ej: Batman">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-secondary fw-bold">Nombre Real</label>
                            <input type="text" name="real_name" class="form-control" required placeholder="Ej: Bruce Wayne">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-secondary fw-bold">Nombre de la Foto</label>
                            <input type="text" name="photo_url" class="form-control" required placeholder="Ej: aquaman">
                            <small class="text-muted">Escribe solo el nombre de la imagen sin la extensión (ej. batman, aquaman, capitanamerica).</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-secondary fw-bold">Información Adicional</label>
                            <textarea name="additional_info" class="form-control" rows="3" required placeholder="Describe sus poderes, historia, etc."></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>