<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BiblioExpress - Registrar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Registrar Nuevo Libro</h2>
    <a href="index.php" class="btn btn-secondary mb-3">Volver al Catálogo</a>

    <form action="guardar.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Título del Libro:</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>

        <div class="mb-3">
            <label class="form-label">ISBN:</label>
            <input type="text" class="form-control" name="isbn" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Año de Publicación:</label>
            <input type="number" class="form-control" name="ano_publicacion" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Idioma:</label>
            <input type="text" class="form-control" name="idioma" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Número de Páginas:</label>
            <input type="number" class="form-control" name="numero_paginas" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Libro</button>
    </form>

</body>
</html>