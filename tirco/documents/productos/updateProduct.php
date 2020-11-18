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

$sql = "UPDATE productos SET codigo='$codigo', nombre='$nombre',
descripcion='$descripcion', precio='$precio', cantidad='$stock' WHERE codigo=$codigo";

if($conexion->query($sql) === TRUE){
echo "El registro se actualizo correctamente <br><br>";
echo "<a href='products.php'>Regresar alos productos</a>";
} else {
echo "Error: ". $sql . "<br><br>".$conexion->error."<br><br>";
echo "<a href='products'>Regresar alos productos</a>";
}
$conexion->close();
}
