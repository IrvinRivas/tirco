<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    
    <title>Iniciar sesion</title>

    <style>
        .login-container{
            align-content:center;
            border:1px solid #c2c2c2;
            box-shadow:2px 2px 2px #8888;
            display:flex;
            flex-wrap:wrap;
            height:350px;
            justify-content:center;
            margin:0 auto;
            margin-top:50px;
            margin-bottom:50px;
            padding:20px;
            text-align:center;
            width:400px;
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
    <p>¿No tienes cuenta? </p><a href="registrer.php">registrarte</a>
        <div class="login-container">
            <form method="POST" action="validate.php">
            <h3>Inicio de sesion</h3>
            
            <div class="login-item">
                <label for="">Correo</label><br>
                <input type="email" placeholder="introduzca su correo" class="login-input" name="correo">
            </div>

            <div class="login-item">
                <label for="">Contraseña</label><br>
                <input type="password" placeholder="contraseña" class="login-input" name="contrasena">
            </div>
            <div class="login-item">
                <input type="submit" class="btn btn-primary -ch" value="Iniciar sesion">
            </div>
            </form>

        </div>



    </div>
    
    


</body>
</html>


