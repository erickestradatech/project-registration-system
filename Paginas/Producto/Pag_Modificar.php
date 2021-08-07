<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e2cc90f8f5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/normalize.css" />
</head>

<body>

    <div class="contenedor-h">
        <h1 class="title">Registro de Menú</h1>
        <a href="../Producto/Pag_Listar.php"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>

    <?php
    include_once '../../Conexion/conectando.php';
    $obj = new Conectar();
    $cod = $_REQUEST['cod'];
    $a = $obj->buscarComida($cod);
    ?>

    <form class="form form-signo" action="../../Llamadas/ProcesoProducto.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Datos del Menú</legend>
            <input type="hidden" name="cod" value="<?= $cod ?>">

            <label>Nombres:</label>
            <input name="nom" value="<?= $a[0] ?>">

            <label>Tipo:</label>
            <input name="tipo" value="<?= $a[1] ?>">

            <label>Precio</label>
            <input name="pre" value="<?= $a[2] ?>">

            <label>Foto:</label>
            <input type="file" name="fot">

        </fieldset>

        <input type="hidden" name="accion" value="modificar">

        <div class="content-f-1">
            <input type="submit" value="Actualizar">
        </div>

    </form>

</body>

</html>