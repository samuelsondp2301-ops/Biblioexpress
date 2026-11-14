<?php
include 'conexion.php';

$stmt = $conexion->query("SELECT * FROM libro");
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BiblioExpress - Lista de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">BiblioExpress - Catálogo de Libros</h2>
    
    <a href="crear.php" class="btn btn-primary mb-3">Registrar Nuevo Libro</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>ISBN</th>
                <th>Año de Publicación</th>
                <th>Idioma</th>
                <th>Número de Páginas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?php echo $libro['id_libro']; ?></td>
                <td><?php echo $libro['titulo']; ?></td>
                <td><?php echo $libro['isbn']; ?></td>
                <td><?php echo $libro['ano_publicacion']; ?></td>
                <td><?php echo $libro['idioma']; ?></td>
                <td><?php echo $libro['numero_paginas']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $libro['id_libro']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="eliminar.php?id=<?php echo $libro['id_libro']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>