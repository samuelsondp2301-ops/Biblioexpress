<?php
$driver = 'mysql'; 
$host = 'localhost';
$dbname = 'biblio_express';
$username = 'root';
$password = 'root';

try {
    if ($driver === 'pgsql') {
        $conexion = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    } else {
        $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    }
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error en la conexión a la base de datos.";
    exit();
}
?>