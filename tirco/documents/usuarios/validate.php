<?php
require '../components/conexion.php';
if($conexion->connect_error){
    die("Fallo la conexion". $conexion->connect_error);
} else {
$email = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$consulta = "SELECT * FROM clientes where correo='$email'";

$datos = $conexion->query($consulta);
$usuario = mysqli_fetch_assoc($datos);

if($contrasena == $usuario["contrasena"]){
echo "<h2>Inicio de sesion correcto <a
href='../../index.html'>Continuar</a></h2>";
} else {
echo "Usuario no autorizado. Verifique su email o contraseña
<br><br>";
echo "Regresar al login <a href='login.php'>Iniciar Sesion</a>";
}
}
?>
