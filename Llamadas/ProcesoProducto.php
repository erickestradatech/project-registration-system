<?php
include_once '../Conexion/conectando.php';
$obj = new Conectar();

$accion = $_REQUEST['accion'];
if ($accion === "agregar") {

    $foto = $_FILES['fot']['name'];
    $ruta = $_FILES['fot']['tmp_name'];
    $destino = "../img/" . $foto;
    copy($ruta, $destino);
    $obj->agregarComida($_REQUEST['cod'], $_REQUEST['nom'], $_REQUEST['tipo'], $_REQUEST['pre'], $destino);
} else if ($accion === "eliminar") {

    $obj->eliminarComida($_REQUEST['cod']);
} else if ($accion === "modificar") {

    if (!empty($_FILES['fot']['tmp_name'])) {

        $foto = $_FILES['fot']['name'];
        $ruta = $_FILES['fot']['tmp_name'];
        $destino = "../img/" . $foto;
        copy($ruta, $destino);
        $obj->actualizarTodoComida($_REQUEST['cod'], $_REQUEST['nom'], $_REQUEST['tipo'], $_REQUEST['pre'], $destino);
    } else {

        $obj->actualizarComida($_REQUEST['cod'], $_REQUEST['nom'], $_REQUEST['tipo'], $_REQUEST['pre']);
    }
}
header("location:../Paginas/Producto/Pag_Listar.php");
