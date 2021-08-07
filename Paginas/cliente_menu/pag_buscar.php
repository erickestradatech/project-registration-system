<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e2cc90f8f5.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../../img/icon.png">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <title>Entregable 05</title>
</head>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    include_once '../../Conexion/conectando.php';
    $obj = new Conectar();
    ?>
    <div class="contenedor-h">
        <h1 class="title">Buscar clientes</h1>
        <a href="../../pedidos.php">
            <i class="fas fa-arrow-left"></i> Principal</a>
    </div>


    <div class="contenedor-form">
        <form class="form form-signo" action="Pag_listarCodigo.php" method="post" enctype="multipart/form-data">

            <fieldset>
                <legend> Inicia tu busqueda </legend>
                <label for="cli" class="title">Clientes</label>
                <select class="select-final" name="cli">
                    <?php
                    foreach ($obj->listarCliente() as $a => $datos) {
                    ?>
                        <option value="<?= $datos[0] ?>"><?= $datos[1] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </fieldset>
            <input type="hidden" name="accion" value="buscar">

            <div class="content-f-5">
                <input type="submit" value="Mostrar">
            </div>
        </form>
    </div>

</body>

</html>