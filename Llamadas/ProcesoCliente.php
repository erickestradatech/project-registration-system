<?php
include_once '../Conexion/conectando.php';

$obj = new Conectar();

$accion = $_REQUEST['accion'];

if ($accion === "agregar") {

    $obj->agregarCliente($_REQUEST['cod'], $_REQUEST['nom'], $_REQUEST['ape'], $_REQUEST['genero'], $_REQUEST['tele']);
} else if ($accion === "eliminar") {

    $obj->eliminarCliente($_REQUEST['cod']);
} else if ($accion === "modificar") {

    $obj->actualizarCliente($_REQUEST['cod'], $_REQUEST['nom'], $_REQUEST['ape'], $_REQUEST['genero'], $_REQUEST['tele']);
}

header("location:../paginas/cliente/pag_Listar.php");
