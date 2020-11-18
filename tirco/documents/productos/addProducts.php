<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <title> Agregar Productos</title>
    <style>
    .form-container{
            align-content:center;
            border:1px solid #c2c2c2;
            box-shadow:2px 2px 2px #8888;
            display:flex;
            flex-wrap:wrap;
            height:550px;
            justify-content:center;
            margin:0 auto;
            margin-top:50px;
            margin-bottom:50px;
            padding:20px;
            text-align:center;
            width:500px;
        }
        .form-input{
            border:1px solid #c2c2c2;
            border-radius: 20px;
            height:20px;
            margin-top:20px;
            padding-left:10px;
            width:300px;
        }
        .form-item{
            margin-top:40px;
            margin-bottom:20px;
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
<h1>Agregar Producto</h1>
<hr>

<div class="form-container">
<form method="POST" action="saveProducts.php">
    <label for="Codigo" class="form-item">
        Codigo
        <input type="number" name="code" class="form-input">
    </label>
    <label for="nombre" class="form-item">
        Nombre del producto
        <input type="text" name="name" class="form-input">
    </label>
    <label for="descripcion" class="form-item">
        Descripcion
        <input type="text" name="description" class="form-input">
    </label>
    <label for="precio" class="form-item">
        Precio
        <input type="number" name="price" class="form-input">
    </label>
    <label for="stock" class="form-item" class="form-input">
        Cantidad

        <input type="number" name="stock" class="form-input">
    </label>
    <!-- <label for="img" class="form-item">
        Imagen:
        <input type="text" name="img">
    </label> -->
    

    <input type="submit" class="btn btn-primary -ch">
    </form>
</div>


</div>


    
</body>
</html>