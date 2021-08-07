<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e2cc90f8f5.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../../img/icon.png">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <title>Entregable 05</title>
</head>

<body>

    <?php
    include_once '../../Conexion/conectando.php';
    $obj = new Conectar();
    $cod = $_REQUEST['cod'];
    $a = $obj->buscarCliente($cod);
    ?>

    <div class="contenedor-h">
        <h1 class="title"> Modificar Cliente</h1>
        <a href="../cliente/Pag_Listar.php">
            <i class="fas fa-arrow-left"></i> Regresar</a>
    </div>


    <form class="form form-signo" action="../../llamadas/ProcesoCliente.php" method="post" enctype="multipart/form-data">

        <fieldset>
            <legend>Datos Personales</legend>

            <input type="hidden" name="cod" value="<?= $cod ?>">


            <label for="nombre_cliente">Nombre</label>
            <input type="text" name="nom" value="<?= $a[0] ?>">

            <label for="">Apellidos</label>
            <input type="text" name="ape" value="<?= $a[1] ?>">

            <label for="">Genero</label>
            <input type="text" name="genero" value="<?= $a[2] ?>">

            <label for="">Telefono</label>
            <input type="text" name="tele" value="<?= $a[3] ?>">


        </fieldset>
        <input type="hidden" name="accion" value="modificar">

        <div class="content-f-3">
            <input type="submit" value="Actualizar">
        </div>

    </form>

</body>

</html>