<?php
include_once '../Conexion/conectando.php';
$obj = new Conectar();
$accion = $_REQUEST['accion'];

if ($accion === "agregar") {

    $obj->agregarPropiedad(
        $_REQUEST['cod'],
        $_REQUEST['cod1'],
        $_REQUEST['cli'],
        $_REQUEST['cantidad'],
        $_REQUEST['fecha'],
        $_REQUEST['hora'],
        $_REQUEST['distrito'],
        $_REQUEST['direccion']

    );
    header("location:../Paginas/cliente_menu/pag_listar.php");
} else if ($accion === "eliminar") {
    $obj->eliminarPropiedad($_REQUEST['cod']);
    header("location:../Paginas/cliente_menu/pag_listar.php");
} else if ($accion === "modificar") {
    if (!empty($_FILES['fot']['tmp_name'])) {
        $foto = $_FILES['fot']['name'];
        $ruta = $_FILES['fot']['tmp_name'];
        $destino = "../imagenes/" . $foto;
        copy($ruta, $destino);
        $obj->actualizarTodoPropiedad(
            $_REQUEST['cod'],
            $_REQUEST['cli'],
            $_REQUEST['cod1'],
            $_REQUEST['cantidad'],
            $_REQUEST['fecha'],
            $_REQUEST['hora'],
            $_REQUEST['distrito'],
            $_REQUEST['direccion']
        );
    } else {
        $obj->actualizarPropiedad(
            $_REQUEST['cod'],
            $_REQUEST['cli'],
            $_REQUEST['cod1'],
            $_REQUEST['cantidad'],
            $_REQUEST['fecha'],
            $_REQUEST['hora'],
            $_REQUEST['distrito'],
            $_REQUEST['direccion']
        );
    }
    header("location:../Paginas/cliente_menu/pag_listar.php");
} else if ($accion === "buscar") {

    $obj->listarPropiedadCod($_REQUEST['codigo']);
    header("location:../Paginas/pag_buscar.php");
}
