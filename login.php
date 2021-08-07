<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="css/styles.css" />

	<link rel="stylesheet" href="css/normalize.css" />
	<!-- titulo-->
	<title>Restaurante</title>
	<!-- titulo-->
</head>

<body>

	<div class="regresar-login">
		<a href="/Entrega_Final_4">Regresar</a>
	</div>

	<div class="contenedor-login">
		<div class="card-login">
			<div class="entrada">
				<h1>Bienvenido</h1>

				<img src="img/img_login.png" alt="img" />
			</div>

			<form class="frm-login" action="validar.php" method="POST">
				<div class="input-login">
					<input type="text" name="usuario" placeholder="Usuario" required />

					<input type="password" name="password" placeholder="Password" required />
				</div>

				<div class="btn-login">
					<input type="submit" name="aceptar" value="Ingresar" />
				</div>
			</form>

			<p>¿No tienes una cuenta? <span>Regístrate</span></p>
		</div>
	</div>
</body>

</html>