<!DOCTYPE html>
<html lang="es">

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
    ?>
    <div class="contenedor-h">
        <h1 class="title"> Registro de Pedidos</h1>
        <a href="../cliente_menu/Pag_Listar.php"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>

    <div class="contenedor-form">

        <form class="form form-signo" action="../../Llamadas/procesoPropiedad.php" method="post" enctype="multipart/form-data">

            <fieldset>
                <legend> Datos del pedido</legend>


                <label for="mes_cod">Código pedido</label>
                <input type="text" name="cod" id="mes_cod" required>


                <label for="">Cliente:</label>
                <select name="cli">
                    <?php
                    foreach ($obj->listarCliente() as $a => $datos) {
                    ?>
                        <option value="<?= $datos[0] ?>"><?= $datos[1] ?></option>
                    <?php
                    }
                    ?>
                </select>


                <label for="mes_tel">Cantidad:</label>
                <input type="text" name="cantidad" id="mes_tel" required>

                <label for="">Menú:</label>
                <select name="cod1">
                    <?php
                    foreach ($obj->listarComida() as $a => $datos) {
                    ?>
                        <option value="<?= $datos[0] ?>"><?= $datos[1] ?></option>
                    <?php
                    }
                    ?>
                </select>

                <label for="mes_tel">Fecha:</label>
                <input type="text" name="fecha" id="mes_tel" required>

                <label for="mes_tel">Hora:</label>
                <input type="text" name="hora" id="mes_tel" required>

                <label for="mes_tel">Distrito:</label>
                <input type="text" name="distrito" id="mes_tel" required>

                <label for="mes_tel">Dirección:</label>
                <input type="text" name="direccion" id="mes_tel" required>


            </fieldset>


            <input type="hidden" name="accion" value="agregar">

            <div class="content-f-4">
                <input type="submit" value="Guardar"></td>
            </div>

        </form>

    </div>

</body>

</html>