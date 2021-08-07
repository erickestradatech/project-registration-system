<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/icon.png">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <title>Entregable 05</title>
</head>

<body>
    <?php
    include_once '../../Conexion/conectando.php';
    $obj = new Conectar();
    $codigo = $_REQUEST['cod'];
    $a = $obj->buscarPropiedad($codigo);
    ?>

    <div class="contenedor">
        <h1 class="title"> Modificar Pedidos</h1>
        <a href="pag_listar.php">
            << Princial</a> </div> <div class="contenedor-img">

    </div>

    <div class="contenedor-form">
        <form class="form form-signo" action="../../Llamadas/procesoPropiedad.php" method="post" enctype="multipart/form-data">

            <fieldset>
                <legend>Datos de los pedidos</legend>

                <input type="hidden" name="cod" value="<?= $cod ?>">

                <label for="">Cliente</label>
                <select name="cli">
                    <?php
                    foreach ($obj->listarCliente() as $b => $datos) {
                        if ($datos[0] === $a[1]) {
                            echo '<option value="' . $datos[0] . '" selected>' . $datos[1] . '</option>';
                        } else {
                            echo '<option value="' . $datos[0] . '">' . $datos[1] . '</option>';
                        }
                    }
                    ?>
                </select>

                <label for="">Menu</label>
                <select name="cod1">
                    <?php
                    foreach ($obj->listarComida() as $b => $datos) {
                        if ($datos[0] === $a[1]) {
                            echo '<option value="' . $datos[0] . '" selected>' . $datos[1] . '</option>';
                        } else {
                            echo '<option value="' . $datos[0] . '">' . $datos[1] . '</option>';
                        }
                    }
                    ?>
                </select>

                <label for="">Cantidad</label>
                <input type="text" name="pre" value="<?= $a[3] ?>" id="">


                <label for="">Fecha</label>
                <input type="text" name="fecha" value="<?= $a[4] ?>" id="">


                <label for="">Hora</label>
                <input type="text" name="hora" value="<?= $a[5] ?>" id="">

                <label for="">Distrito</label>
                <input type="text" name="distrito" value="<?= $a[6] ?>" id="">

                <label for="">Direccion</label>
                <input type="text" name="direccion" value="<?= $a[7] ?>" id="">


            </fieldset>

            <input type="hidden" name="accion" value="modificar">
            <input type="submit" value="Actualizar">
        </form>
    </div>

</body>

</html>