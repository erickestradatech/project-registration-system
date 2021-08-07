<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
	<title>Document</title>
	<link rel="stylesheet" href="../../css/styles.css" />
	<link rel="stylesheet" href="../../css/normalize.css" />
</head>

<body>
	<header class="header-menu">
		<!--barra-->
		<div class="title-menu">
			<a href="/Entrega_Final_4">
				<h1>DelyFooD</h1>
			</a>
		</div>

		<nav class="navegacion">
			<a href="../../ubicanos.php">Ubicanos</a>
			<a href="../../menu.php">Menus</a>
			<a href="../../blog.php">Experiencias</a>
			<a href="../../contacto.php">Contacto</a>
			<a href="delivery.php">Delivery</a>
			<a href="../../login.php">Login</a>
			<a href="Carrito.php"><img src="../../img/carrito5.png" width="70px" height="50px"></a>

		</nav>
	</header>

	<section class="portada-menu">
		<div class="img-menu">
			<h2>Tu carrito de compras</h2>
		</div>
	</section>

	<h3 class="title-light">Historial de Compras</h3>

	<div class="contenedor-delivery">

		<div class="table-delivery">
			<table class="table1">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					session_start();
					$total = 0;
					if (isset($_SESSION["carrito"])) {
						foreach ($_SESSION["carrito"] as $prod => $datos) {
							echo "<tr><td>$prod";
							$subtotal = $datos["cantidad"] *  $datos["precio"];
							$total = $total + $subtotal;

							foreach ($datos as $key => $value) {
								echo "<td>$value";
							}
							echo "<td><a href='Carrito.php?indice=$prod'>Eliminar producto</a>";
						}
					}

					if (isset($_REQUEST["indice"])) {
						$producto = $_REQUEST["indice"];
						unset($_SESSION["carrito"][$producto]);
						header("Location:Carrito.php");
					}

					if (isset($_REQUEST["limpiar"])) {
						session_destroy();
						header("Location:Carrito.php");
					}

					?>

				</tbody>
			</table>
		</div>

		<div class="operaciones-delivery">
			<div>
				<label for="">Total:</label>
				<input type="text" value="<?php if (isset($_SESSION["carrito"])) echo ($total) ?>">
			</div>

			<div class="limpiar-carro">
				<a href='Carrito.php?limpiar=true'>Limpiar carrito</a>
			</div>

			<div class="login-regresar">
				<a href='delivery.php'>Seguir comprando</a><br>
			</div>
		</div>

	</div>

	<br>
	<br>
	<br>
	<br>

</body>

</html>