<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <title>Crear cuenta</title>

    <style>
        .login-container{
            border:1px solid #c2c2c2;
            box-shadow:2px 2px 2px #8888;
            display:flex;
            flex-wrap:wrap;
            height:800px;
            justify-content:center;
            margin:0 auto;
            margin-top:50px;
            margin-bottom:50px;
            padding:20px;
            text-align:center;
            width:600px;
        }
        .login-input{
            border:1px solid #c2c2c2;
            border-radius: 20px;
            height:20px;
            margin-top:20px;
            padding-left:10px;
            width:300px;
        }
        .login-item{
            margin-top:40px;
            margin-bottom:20px;
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

        <h1>Registra tus datos</h1>
        <hr>

    <div class="login-container">   
        <form method="POST" action="saveUsers.php">
            
        <div class="login-item">
            <label for="">Nombre</label><br>
            <input type="text" class="login-input" name="nombre">
        </div>  

        <div class="login-item">
            <label for="">Apellido paterno</label><br>
            <input type="text" class="login-input" name="apellido-p">
        </div>

        <div class="login-item">
            <label for="">Apellido materno</label><br>
            <input type="text" class="login-input" name="apellido-m">
        </div>

        <div class="login-item">
            <label for="">Direccion</label><br>
            <input type="text" class="login-input" name="direccion">
        </div>

        <div class="login-item">
            <label for="">Celular</label><br>
            <input type="number" class="login-input" name="celular">
        </div>

        <div class="login-item">
            <label for="">Correo</label><br>
            <input type="email" class="login-input" name="correo">
        </div>

        <div class="login-item">
            <label for="">Contraseña</label><br>
            <input type="password" class="login-input" name="contrasena">
        </div>

        <div class="login-item">
                <input type="submit" class="btn btn-primary -ch" value="Registrarme">
            </div>
        </form>


    </div>
</div>

    
</body>
</html>