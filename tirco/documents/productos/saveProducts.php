<?php
require '../components/conexion.php';

if($conexion->connect_error){
    die("Fallo la conexion". $conexion->connect_error);
} else {
$codigo = $_POST["code"];
$nombre =$_POST["name"];
$descripcion =$_POST["description"];
$precio =$_POST["price"];
$stock =$_POST["stock"];
/* $img = $_POST["img"]; */

$sql = "INSERT INTO productos (codigo, nombre, descripcion, precio, cantidad)
VALUES('$codigo','$nombre','$descripcion','$precio',$stock)";

if($conexion->query($sql) === TRUE){
echo "Registro de producto exitoso <br><br>";
echo "<a href='products.php'>Regresar alos productos</a>";
} else {
echo "Error: ". $sql . "<br><br>".$conexion->error."<br><br>";
echo "<a href='addProducts.php'>Regresar al formulario</a>";
}

$conexion->close();
}

