<?php
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "root", "", "users_delyfoot");
$sql = "select * from users where us_nom='$usuario' and us_pas='$password'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_num_rows($resultado);

if ($fila > 0) {

    header("Location:pedidos.php");
} else {

    echo "Usuario o password incorrectos";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
