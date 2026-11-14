<?php
include 'conexion.php';

$id = $_GET['id'];

$stmt = $conexion->prepare("SELECT * FROM libro WHERE id_libro = ?");
$stmt->execute([$id]);
$libro = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $isbn = $_POST['isbn'];
    $ano_publicacion = $_POST['ano_publicacion'];
    $idioma = $_POST['idioma'];
    $numero_paginas = $_POST['numero_paginas'];

    $sql = "UPDATE libro SET titulo = ?, isbn = ?, ano_publicacion = ?, idioma = ?, numero_paginas = ? WHERE id_libro = ?";
    $stmtUpdate = $conexion->prepare($sql);
    $stmtUpdate->execute([$titulo, $isbn, $ano_publicacion, $idioma, $numero_paginas, $id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BiblioExpress - Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Editar Libro</h2>
    <a href="index.php" class="btn btn-secondary mb-3">Volver al Catálogo</a>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Título del Libro:</label>
            <input type="text" class="form-control" name="titulo" value="<?php echo $libro['titulo']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">ISBN:</label>
            <input type="text" class="form-control" name="isbn" value="<?php echo $libro['isbn']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Año de Publicación:</label>
            <input type="number" class="form-control" name="ano_publicacion" value="<?php echo $libro['ano_publicacion']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Idioma:</label>
            <input type="text" class="form-control" name="idioma" value="<?php echo $libro['idioma']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Número de Páginas:</label>
            <input type="number" class="form-control" name="numero_paginas" value="<?php echo $libro['numero_paginas']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Libro</button>
    </form>

</body>
</html>