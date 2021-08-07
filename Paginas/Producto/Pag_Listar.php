<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e2cc90f8f5.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/normalize.css" />
</head>

<body>
    <?php
    include_once '../../Conexion/conectando.php';
    $obj = new Conectar();
    ?>
    <div class="contenedor-h">
        <h1 class="title"> Relación de Menus</h1>
        <a href="../../pedidos.php"><i class="fas fa-arrow-left"></i> Principal</a>
    </div>

    <div class="title">
        <a class="btn-success" href="Pag_Agregar.php">Agregar Menú</a><br><br>
    </div>

    <form method="post" enctype="multipart/form-data">
        <table class="table1">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            <?php
            foreach ($obj->listarComida() as $a => $datos) {
                echo "<tr><td>$datos[0]</td><td>$datos[1]</td><td>$datos[2]</td><td>$datos[3]</td>";
            ?>
                <td><img src="<?= '../' . $datos[4] ?>" width="100" height="100"></td>
                <td><a class="btn-danger" href="../../Llamadas/ProcesoProducto.php?accion=eliminar&cod=<?= $datos[0] ?>">Eliminar</a></td>
                <td><a href="Pag_Modificar.php?cod=<?= $datos[0] ?>" class="btn-warning">Modificar</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>

</body>

</html>