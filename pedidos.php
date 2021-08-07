<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- titulo-->
    <title>Restaurante</title>
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = "";
    }
    ?>


    <div class="content-sesion">
        <div class="detalle-sesion">
            <h2>User: <?= $_SESSION['usuario'] ?></h2>
            <a href="login.php">Cerrar Sesión</a>
        </div>
    </div>


    <div class="content">
        <h1 class="title-s-dely">Sistema del restaurante</h1>

        <div class="login content-login">
            <!-- <a href="Paginas/Producto/Pag_Agregar.php">Agregar Menu</a> -->
            <a href="Paginas/Producto/Pag_Listar.php">Listar Menu</a>
            <!-- <a href="Paginas/cliente/pag_agregar.php">Agregar Cliente</a> -->
            <a href="Paginas/cliente/pag_listar.php">Listar Cliente</a>
            <!-- <a href="Paginas/cliente_menu/pag_agregar.php">Agregar pedidos</a> -->
            <a href="Paginas/cliente_menu/pag_listar.php">Listar pedidos</a>
            <a href="Paginas/cliente_menu/pag_buscar.php">Buscar pedidos</a>
        </div>
    </div>

</body>

</htm>