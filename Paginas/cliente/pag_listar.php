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
        <h1 class="title"> Relación de Clientes</h1>
        <a href="../../pedidos.php"><i class="fas fa-arrow-left"></i> Principal</a>
    </div>

    <div class="title">
        <a class="btn-success" href="pag_agregar.php">Agregar Clientes</a>
    </div>

    <form method="post" enctype="multipart/form-data">
        <table class="table1">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

            <?php
            foreach ($obj->listarCliente() as $a => $datos) {

                echo "<tr><td>$datos[0]</td><td>$datos[1]</td><td>$datos[2]</td><td>$datos[3]</td><td>$datos[4]</td>";
            ?>
                <td><a class="btn-danger" href="../../llamadas/procesoCliente.php?accion=eliminar&cod=<?= $datos[0] ?>">Eliminar</a></td>
                <td><a class="btn-warning" href="pag_modificar.php?cod=<?= $datos[0] ?>">Modificar</a></td>
                </tr>
            <?php
            }

            ?>
        </table>
    </form>
</body>

</html>