<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />

	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/normalize.css" />
	<!-- titulo-->
	<title>Restaurante</title>
	<!-- titulo-->
</head>

<body>
	<!-- header-menu -->
	<header class="header-menu">
		<!--barra-->

		<!-- title -->
		<div class="title-menu">
			<a href="/Entrega_Final_4">
				<h1>DelyFooD</h1>
			</a>
		</div>
		<!-- title -->

		<!-- Navegacion de opciones -->
		<nav class="navegacion">
			<a href="ubicanos.php">Ubicanos</a>
			<a href="menu.php">Menus</a>
			<a href="blog.php">Experiencias</a>
			<a href="contacto.php">Contacto</a>
			<a href="Paginas/Compra/delivery.php">Delivery</a>
			<a href="login.php">Login</a>
			<a href="Paginas/Compra/Carrito.php"><img src="img/carrito5.png" width="70px" height="50px"></a>

		</nav>
		<!-- Navegacion de opciones -->
	</header>
	<!-- header-menu -->

	<!-- portada-menu -->
	<section class="portada-menu">
		<div class="img-menu">
			<h2>Contáctanos para más información</h2>
		</div>
	</section>
	<!-- portada-menu -->

	<!-- formulario -->
	<main class="contenedor ancho-form">
		<h2>Llena el formulario de contacto</h2>

		<form class="contacto">
			<fieldset>
				<legend>Información Personal</legend>

				<!-- Escriba el nombre -->
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombre" placeholder="Tu nombre" />
				<!-- Escriba-nombre -->

				<!-- Correo electronico -->
				<label for="email">E-mail</label>
				<input type="email" id="email" placeholder="Tu correo electrónico" required />
				<!-- Correo electronico -->

				<!-- Para el telefono -->
				<label for="telefono_x">Teléfono:</label>
				<input type="tel" id="telefono_x" placeholder="Tu teléfono" required />
				<!-- Para el telefono -->

				<!-- Escribir mensaje -->
				<label for="mensaje">Mensaje:</label>
				<textarea id="mensaje"></textarea>
				<!-- Escribir mensaje -->
			</fieldset>

			<fieldset>
				<legend>Información sobre su pedido</legend>

				<!-- Opciones de pedido -->
				<label for="opciones">Elije tu pedido</label>
				<select id="opciones">
					<option disabled selected>-- Seleccione --</option>
					<option value="arroz">Arroz con Pollo</option>
					<option value="tallarines">Tallarines</option>
					<option value="carapulcra">Carapulcra</option>
					<option value="sopaseca">Sopa seca</option>
					<option value="ceviche">Ceviche</option>
					<option value="lomo">Lomo Saltado</option>
				</select>
				<!-- Opciones de pedido -->

				<!-- Elegir cantidad -->
				<label for="cantidad">Cantidad:</label>
				<input type="number" id="cantidad" min="1" max="20" step="1" />
				<!-- Elegir cantidad -->
			</fieldset>

			<fieldset>
				<legend>Contacto</legend>

				<p>Como desea ser contactado:</p>

				<!-- Como contactarlo -->
				<div class="forma-contacto">
					<label for="telefono">Teléfono</label>
					<input type="radio" name="contacto" value="telefono" id="telefono" />

					<label for="correo">E-mail</label>
					<input type="radio" name="contacto" value="correo" id="correo" />
				</div>
				<!-- Como contactarlo -->

				<p>Si eligió Teléfono, elija la fecha y la hora:</p>

				<!-- Opciones Fecha y Hora -->
				<label for="fecha">Fecha:</label>
				<input type="date" id="fecha" />

				<label for="hora">Hora:</label>
				<input type="time" id="hora" min="09:00" max="18:00" />
				<!-- Opciones Fecha y Hora -->
			</fieldset>

			<!-- Boton para enviar -->
			<input type="submit" value="Enviar" class="boton boton-verde" />
			<!-- Boton para enviar -->
		</form>
	</main>
	<!-- formulario -->

	<!-- Footer -->
	<footer class="footer-information">
		<!-- contenedor -->
		<div class="contenedor-footer">
			<h3>Locales</h3>
			<p>Calle Daylu 202, Miraflores 14094, Lima</p>

			<h4>Restaurante DelyFooD</h4>
			<p>
				Un restaurante con los mejores platillos muy deliciosos para que usted
				y su familia lo disfruten al maximo. Siempre continuaremos mejorando
				cada dia más, para asi poder brindarle un mejor servicio a todos
				ustedes.
			</p>

			<a href="contacto.html">
				<p class="footer-call">Contáctanos</p>
			</a>

			<p class="footer-copyrigh">Todos los derechos reservados &copy;</p>
		</div>
		<!-- contenedor -->
	</footer>
	<!-- Footer -->
</body>

</html>