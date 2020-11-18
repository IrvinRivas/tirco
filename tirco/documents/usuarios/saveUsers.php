<?php
require '../components/conexion.php';
if($conexion->connect_error){
    die("Fallo la conexiÃ³n". $conexion->connect_error);
} else {
    $nombre = $_POST["nombre"];
$apellido_p = $_POST["apellido-p"];
$apellido_m = $_POST["apellido-m"];
$direccion = $_POST["direccion"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$sql = "INSERT INTO clientes (nombre, apellido_paterno,apellido_materno,direccion,celular, correo, contrasena)
VALUES('$nombre','$apellido_p','$apellido_p','$direccion','$celular','$correo','$contrasena')";
if($conexion->query($sql) === TRUE){
echo "Registro exitoso <br><br>";
echo "<a href='../../index.html'>Regresar al home</a>";
} else {
echo "Error: ". $sql . "<br><br>".$conexion->error."<br><br>";
echo "<a href='registrer.php'>Regresar al formulario</a>";
}

$conexion->close();
}


?>