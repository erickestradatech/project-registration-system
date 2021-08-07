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
    ?>

    <div class="contenedor-h">
        <h1 class="title"> Relación de Pedidos</h1>
        <a href="../../pedidos.php"><i class="fas fa-arrow-left"></i> Principal</a>
    </div>

    <div class="title">
        <a class="btn-success" href="pag_agregar.php">Agregar Pedidos</a>
    </div>

    <div class="centrar-tabla">
        <form method="post" enctype="multipart/form-data">
            <table class="table1">
                <tr>
                    <th>Codigo de pedido</th>
                    <th>Cliente</th>
                    <th>Menu</th>
                    <th>cantidad</th>
                    <th>fecha</th>
                    <th>hora</th>
                    <th>distrito</th>
                    <th>direccion</th>
                    <th>Eliminar</th>
                </tr>

                <?php

                foreach ($obj->listarPropiedad() as $a => $datos) {
                    echo "<tr><td>$datos[0]</td><td>$datos[7]</td><td>$datos[8]</td><td>$datos[2]</td><td>$datos[3]</td><td>$datos[4]</td><td>$datos[5]</td><td>$datos[6]</td>";
                ?>
                    <td><a class="btn-danger" href="../../llamadas/procesoPropiedad.php?accion=eliminar&cod=<?= $datos[0] ?>">Eliminar</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>

    <div class="aviso-1">
        <p>**Según las políticas de DelyfooD, usted no podrá modificar los pedidos, muchas gracias. </p>

    </div>

</body>

</html>