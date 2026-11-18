<?php
include 'conexion.php';

$titulo = $_POST['titulo'];
$isbn = $_POST['isbn'];
$ano_publicacion = $_POST['ano_publicacion'];
$idioma = $_POST['idioma'];
$numero_paginas = $_POST['numero_paginas'];

$sql = "INSERT INTO libro (titulo, isbn, ano_publicacion, idioma, numero_paginas) VALUES (?, ?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->execute([$titulo, $isbn, $ano_publicacion, $idioma, $numero_paginas]);

header("Location: index.php");
?>