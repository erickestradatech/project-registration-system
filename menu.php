<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/normalize.css" />
	<!-- titulo-->
	<title>Restaurante</title>
	<!-- titulo-->
</head>


<body>
	<header class="header-menu">
		<!--barra-->

		<!-- title -->
		<div class="title-menu">
			<a href="/Entrega_Final_4">
				<h1>DelyFooD</h1>
			</a>
		</div>
		<!-- title -->

		<nav class="navegacion">
			<a href="ubicanos.php">Ubicanos</a>
			<a href="menu.php">Menus</a>
			<a href="blog.php">Experiencias</a>
			<a href="contacto.php">Contacto</a>
			<a href="Paginas/Compra/delivery.php">Delivery</a>
			<a href="login.php">Login</a>
			<a href="Paginas/Compra/Carrito.php"><img src="img/carrito5.png" width="70px" height="50px"></a>

		</nav>

		<!--barra-->
	</header>

	<!-- Portada -->
	<section class="portada-menu">
		<div class="img-menu">
			<h2>Nuestros horarios de menús</h2>
		</div>
	</section>
	<!-- Portada -->

	<!-- Tabla de horario de comidas -->
	<table class="table">
		<caption>
			¡Elige tu comida ya!
		</caption>

		<thead>
			<tr>
				<th>#Días</th>
				<th>Lunes</th>
				<th>Martes</th>
				<th>Miércoles</th>
				<th>Jueves</th>
				<th>Viernes</th>
				<th>Sábado</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>4 Octubre</th>
				<td>Lomo Salto</td>
				<td>Seco a la norteña</td>
				<td>Papa rellena</td>
				<td>Tallarines rojos</td>
				<td>Aji de Gallina</td>
				<td>Estofado de Pollo</td>
			</tr>
			<tr>
				<th>5 Octubre</th>
				<td>Lentejas con visted</td>
				<td>Pollo al horno</td>
				<td>Anticuchos</td>
				<td>Ceviche</td>
				<td>Pachamanca</td>
				<td>Carapulcra con sopa seca</td>
			</tr>
			<tr>
				<th>6 Octubre</th>
				<td>Cau cau</td>
				<td>Escaveche de pollo</td>
				<td>Ceviche</td>
				<td>Arroz chaufa</td>
				<td>Tacu Tacu</td>
				<td>Cuy chactado</td>
			</tr>
		</tbody>
	</table>
	<!-- Tabla de horario de comidas -->

	<h3 class="p-postres">Acompaña tu almuerzo con los mejores postres</h3>

	<!-- Lista de postres -->
	<div class="section-postres">
		<ul class="lista-postres">
			<li>Helado de vainilla</li>

			<li>Mazamorra morada</li>

			<li>Suspiro a la Limeña</li>

			<li>Gelatina de fresa</li>

			<li>Flan</li>

			<li>Combo mix: platano, mandarina y manzana</li>
		</ul>
		<div class="img-postres">
			<img src="img/postres.jpg" alt="img-postres" />
		</div>
	</div>
	<!-- Lista de postres -->

	<!-- Footer -->
	<footer class="footer-information">
		<!-- contenedor -->
		<div class="contenedor-footer">
			<h3>Locales</h3>
			<p>Calle Daylu 202, Miraflores 14094, Lima</p>

			<h4>Restaurante DelyFooD</h4>
			<p>
				Un restaurante con los mejores platillos muy deliciosos para que usted y su familia lo disfruten al
				maximo. Siempre continuaremos mejorando cada dia más, para asi poder brindarle un mejor servicio a todos
				ustedes.
			</p>

			<a href="contacto.php">
				<p class="footer-call">Contáctanos</p>
			</a>

			<p class="footer-copyrigh">Todos los derechos reservados &copy;</p>
		</div>
		<!-- contenedor -->
	</footer>
	<!-- Footer -->
</body>

</html>