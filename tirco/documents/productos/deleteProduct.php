<?php
require "../components/conexion.php";

	if($conexion->connect_error){
		die("Fallo la conexión". $conexion->connect_error);
	} else {
	$codigo = $_POST["code"];

	$sql = "DELETE from productos WHERE codigo = $codigo";

	if($conexion->query($sql) === TRUE){
		echo "Registro eliminado <a href='products.php'>Regresar</a>";
	}else{
        echo "Error al eliminar el producto<a href='products.php'>Regresar</a>";
    }
	}

    
