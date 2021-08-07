<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/icon.png">
    <script src="https://kit.fontawesome.com/e2cc90f8f5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <title>Entregable 05</title>
</head>

<body>
    <div class="contenedor-h">
        <h1 class="title">Registro de Clientes</h1>
        <a href="../cliente/pag_listar.php"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>

    <form class="form form-signo" action="../../llamadas/procesoCliente.php" method="post">

        <fieldset>
            <legend>Datos Personales</legend>

            <label for="codigo_cliente">Código:</label>
            <input type="text" name="cod" require>

            <label for="nombre_cliente">Nombre del cliente:</label>
            <input type="text" name="nom" require>

            <label for="">Apellidos:</label>
            <input type="text" name="ape" require>

            <label for="">Género:</label>
            <input type="text" name="genero" require>

            <label for="">Teléfono:</label>
            <input type="text" name="tele" require>


        </fieldset>

        <input type="hidden" name="accion" value="agregar">

        <div class="content-f-2">
            <input type="submit" value="Guardar">
        </div>

    </form>
</body>

</html>