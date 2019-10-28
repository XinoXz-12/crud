<?php
$servidor = 'localhost';
$basedatos = 'biblioteca';
$tabla = 'libros';
$usuario = 'bibliotecario';
$contrasena = 'Ciclo2019';

$mysqli = mysqli_connect($servidor, $usuario, $contrasena, $basedatos); 

if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
 
?>
