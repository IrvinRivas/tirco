<?php
include '../components/conexion.php';

if($conexion->connect_error){
    die("Fallo la conexion". $conexion->connect_error);
} else {
    $consulta = "SELECT * from productos";
    $datos = $conexion->query($consulta);
}