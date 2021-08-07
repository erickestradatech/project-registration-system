<!DOCTYPE html>
<html>

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

    <?php
    include_once '../../Conexion/conectando.php';
    $obj = new Conectar();
    $cli_cod = $_REQUEST['cli'];
    ?>

    <div class="contenedor-h">
        <h1 class="title">Resultado</h1>
        <a href="../cliente_menu/pag_buscar.php"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>

    <div class="centrar-tabla-2">
        <form method="post" enctype="multipart/form-data">
            <table class="table1">
                <tr>
                    <th>Cliente</th>
                    <th>Menu</th>
                    <th>cantidad</th>
                    <th>fecha</th>
                    <th>hora</th>
                    <th>distrito</th>
                    <th>direccion</th>

                </tr>
                <?php
                foreach ($obj->listarPropiedadCod($cli_cod) as $a => $datos) {
                    echo "<tr><td>$datos[6]</td><td>$datos[7]</td><td>$datos[1]</td><td>$datos[2]</td><td>$datos[3]</td><td>$datos[4]</td><td>$datos[5]</td>";
                ?>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</body>

</html>