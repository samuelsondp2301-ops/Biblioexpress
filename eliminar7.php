<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM libro WHERE id_libro = ?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$id]);

header("Location: index.php");
?>