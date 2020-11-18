<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    
    <title>Editar Producto</title>
    <style>
        .form-input{
        border:0.5px solid ;
        border-radius:10px;
        padding-left:20px;
        width: 300px;
        }
        .btn-primary{
            background-color:#266DD3;
            border-radius:40px;
        }
        .-ch{
			width:100px;
		}
    </style>
</head>
<body>
<?php
require '../components/dom.php';

echo $header;
?>
<div class="container">
<?php 
require '../components/conexion.php';

$codigo = $_POST['code'];

if($conexion->connect_error){
    die("Fallo la conexión". $conexion->connect_error);
} else {

$consulta = "SELECT * FROM productos where codigo=$codigo";

$datos = $conexion->query($consulta);
$producto = mysqli_fetch_assoc($datos);
}
?>
<h1>Editar Sucursal</h1><hr>
		<form method="POST" action="updateProduct.php">
		    <label for="code" class="form-item">Codigo:
                <input name="code" class="form-input" type="number" required value="<?php echo $producto['codigo'] ?>">
            </label>

		    <label for="name" class="form-item">Nombre:
                <input name="name" class="form-input" type="text" required value="<?php echo $producto['nombre'] ?>">
            </label>
		    

		    <label for="description" class="form-item">Descripcion:
                <input name="description" class="form-input" type="text"required value="<?php echo $producto['descripcion']; ?>">
            </label>
		    
		    <label for="price" class="form-item">Precio:
                <input name="price" class="form-input" type="number" required value="<?php echo $producto['precio']; ?>">
            </label>
            
            
            <label for="stock" class="form-item">Cantidad:
                <input name="stock" class="form-input" type="number" required value="<?php echo $producto['cantidad']; ?>">
            </label>
		    

		    <input name="code" type="hidden" value="<?php echo $producto['codigo']; ?>">

		  	<input type="submit" class="btn btn-primary -ch" value="Editar">
		</form>

</div>
    
</body>
</html>