<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <title>Menu</title>
    <script src="https://kit.fontawesome.com/e2cc90f8f5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/normalize.css" />
</head>

<body>

    <?php
    include_once '../../Conexion/conectando.php';
    $obj = new Conectar();
    ?>

    <div class="contenedor-h">
        <h1 class="title">Agregar menú</h1>
        <a href="../Producto/Pag_Listar.php"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>

    <form class="form form-signo" action="../../Llamadas/ProcesoProducto.php" method="post" enctype="multipart/form-data">
        <fieldset>

            <legend>Registra un nuevo menú</legend>

            <label for="codigo_mes">Código:</label>
            <input type="text" name="cod" required>

            <label for="nombre_mes">Nombre:</label>
            <input type="text" name="nom" required>

            <label for="ape_mes">Tipo:</label>
            <input type="text" name="tipo" required>

            <label for="price">Precio:</label>
            <input type="text" name="pre" required>

            <input type="file" name="fot" id="foto_mes">

            </label>

        </fieldset>

        <input type="hidden" name="accion" value="agregar">

        <div class="btn-add-menu">
            <input type="submit" value="Guardar">
        </div>
    </form>

</body>

</html>