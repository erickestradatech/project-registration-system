<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css" />
	<link rel="stylesheet" href="../../css/styles.css" />
	<link rel="stylesheet" href="../../css/normalize.css" />
	<!-- titulo-->
	<title>Restaurante</title>
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
			<a href="Paginas/Compra/delivery.php">Delivery</a>
			<a href="../../login.php">Login</a>
			<a href="Carrito.php"><img src="../../img/carrito5.png" width="70px" height="50px"></a>

		</nav>

		<!--barra-->
	</header>
	<section class="portada-menu">
		<div class="img-menu">
			<h2>Delivery en todo Lima</h2>
		</div>
	</section>
	<?php
	include_once '../../Conexion/conectando.php';
	$obj = new Conectar();
	?>

	<table class="table1">
		<caption class="title-light">
			¡Comidas disponibles!
		</caption>
		<thead>
			<th>Código</th>
			<th>Comida</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Comprar</th>
		</thead>
		<tbody>
			<?php
			foreach ($obj->listarComida() as $key => $value) {
			?>
				<tr>
					<td><?= $value[0] ?></td>
					<td><img src="<?= '../' . $value[4] ?>" width="250px" height="200px"></td>
					<td><?= $value[1] ?></td>
					<td><?= $value[3] ?></td>
					<td>
						<form class="frm-delivery" action="delivery.php" method="POST">
							<input type="hidden" name="producto" value="<?= $value[1] ?>">
							<input type="number" name="cantidad" value="0">
							<input type="hidden" name="precio" value="<?= $value[3] ?>">
							<input type="submit" name="agregar" value="Agregar">
						</form>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<?php
	if (isset($_REQUEST["agregar"])) {
		$prod = $_REQUEST["producto"];
		$cant = $_REQUEST["cantidad"];
		$prec = $_REQUEST["precio"];

		if (empty($_SESSION["carrito"][$prod])) {
			$_SESSION["carrito"][$prod]["cantidad"] = $cant;
		} else {
			$_SESSION["carrito"][$prod]["cantidad"] += $cant;
		}
		$_SESSION["carrito"][$prod]["precio"] = $prec;
		echo "Se agrego $cant unidades al carrito";
	}
	?>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>

</html>