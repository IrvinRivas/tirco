<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/index.css">
	
	<title>Productos</title>
	<style>
		/* .btn:hover{
			color:#C1DFF0;
		}

		.buttons-container{
			display:flex;
		}
		td{
			padding: 20px;
		}
		.btn-primary{
			background-color:#266DD3;
			border:1px solid #c2c2c2;
			border-radius:40px;
		}
		.btn-secundary{
			background-color: #BF1A2F;
			border:1px solid #c2c2c2;
			border-radius:40px;
		}

		.-ch{
			width:100px;
		}
		.-g{
			width:150px;
		} */
	</style>
</head>
<body>
    <?php require "getProducts.php"; ?>
<header>
    <a href="../../index.html"><img src="../../images/TIRCO-01.png" class='header-img' alt="Tirco logo"></a>
    <ul>
    <form action="searchProduct.php">
        <input type="text">
        <input type="submit" value="buscar" class="btn-search">
    </form>
        <a href="products.php"><li>Productos</li></a>
        <a href="../usuarios/login.php"><li>Mi cuenta</li></a>
        
    </ul>
    </header>
    <div class="container">
        <h1>Nuestros Productos</h1>
        <a href="addProducts.php"><button class="btn btn-primary btn-g">Agregar Producto </button></a>
        <hr>
        <table class="table table-hover">
			<thead>
				<tr class="product-column">
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Stock</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if($datos->num_rows >0){
						while ($row = $datos->fetch_assoc()) {
							echo "<tr>";
								echo "<td>".$row["codigo"]."</td>";
								echo "<td>".$row["nombre"]."</td>";
								echo "<td>".$row["descripcion"]."</td>";
								echo "<td>".$row["precio"]."</td>";
								echo "<td>".$row["cantidad"]."</td>";
					?>			
								<td>
									<div class="buttons-container">
									<form method="POST" action="editProduct.php">
										<input name="code" type="hidden" value="<?php echo $row["codigo"] ?>">
										<input type="submit" class="btn btn-primary btn-ch" value="Editar">
									</form>
									<form action="deleteProduct.php" method="POST">
										<input name="code" type="hidden" value="<?php echo $row["codigo"] ?>">
										<input type="submit" class="btn btn-secundary btn-ch" value="Eliminar" >
									</form>
									</div>
								
								</td>
				<?php
							echo "</tr>";
						}
					}
				?>
			</tbody>
		</table>

    </div>
	
</body>
</html>