<?php
class Conectar
{
    private $conn = null;

    function conectar()
    {
        if ($this->conn == null) {
            $this->conn = mysqli_connect("localhost", "root", "", "prueba1");
        }
    }

    /*  function validarUsuario($usuario, $password){
        $sql="select * from usuarios where nomusu='$usuario' and pasusu='$password'";;
        $res= mysqli_query($this->conn, $sql);
        $fila = mysqli_num_rows($res);
        return $fila;
    }*/

    //método para agreegar registros
    function agregarComida($co_cod, $co_nombre, $co_tipo, $co_pre, $co_foto)
    {
        $sql = "insert into comida values('$co_cod','$co_nombre','$co_tipo','$co_pre', '$co_foto')";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }


    //método para eliminar registros
    function eliminarComida($co_cod)
    {
        $sql = "delete from comida where co_cod=$co_cod";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para actualizar registros
    function actualizarTodoComida($co_cod, $co_nombre, $co_tipo, $co_pre, $co_foto)
    {
        $sql = "update comida set co_nombre='$co_nombre', co_tipo='$co_tipo', co_precio='$co_pre', co_foto='$co_foto' where co_cod=$co_cod";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para actualizar registros sin foto
    function actualizarComida($co_cod, $co_nombre, $co_tipo, $co_pre)
    {
        $sql = "update comida set co_nombre='$co_nombre', co_tipo='$co_tipo', co_precio='$co_pre' where co_cod=$co_cod";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para buscar registro
    function buscarComida(string $co_cod)
    {
        $sql = "select co_nombre, co_tipo,co_precio, co_foto from comida where co_cod=$co_cod";
        $res = mysqli_query($this->conn, $sql);
        $vec = array();
        if (mysqli_num_rows($res) > 0) {
            $vec = mysqli_fetch_array($res);
        }
        return $vec;
    }

    //método para listar registros
    function listarComida()
    {
        $sql = "select co_cod, co_nombre, co_tipo, co_precio, co_foto from comida";
        $res = mysqli_query($this->conn, $sql);
        $vec = array();
        while ($f = mysqli_fetch_array($res))
            $vec[] = $f;
        return $vec;
    }
    //CLIENTES

    function agregarCliente($cli_cod, $cli_nom, $cli_apellidos, $cli_genero, $cli_telefono)
    {
        $sql = "insert into persona values('$cli_cod','$cli_nom', '$cli_apellidos','$cli_genero','$cli_telefono')";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para eliminar registros
    function eliminarCliente($cli_cod)
    {
        $sql = "delete from persona where cli_cod=$cli_cod";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para actualizar registros
    function actualizarCliente($cod, $nom, $ape, $genero, $tele)
    {
        $sql = "update persona set  cli_nombre='$nom', cli_apellidos= '$ape',  cli_genero='$genero', cli_telefono='$tele' where cli_cod='$cod'";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para buscar registro
    function buscarCliente(string $cod)
    {
        $sql = "select cli_nombre, cli_apellidos, cli_genero, cli_telefono from persona where cli_cod='$cod'";
        $res = mysqli_query($this->conn, $sql);
        $vec = array();
        if (mysqli_num_rows($res) > 0) {
            $vec = mysqli_fetch_array($res);
        }
        return $vec;
    }

    //método para listar registros
    function listarCliente()
    {
        $sql = "select cli_cod, cli_nombre, cli_apellidos, cli_genero, cli_telefono from persona";
        $res = mysqli_query($this->conn, $sql);
        $vec = array();
        while ($f = mysqli_fetch_array($res))
            $vec[] = $f;
        return $vec;
    }



    //método para agreegar registros
    function agregarPropiedad($codigo, $cli_cod, $co_cod, $cantidad, $fecha, $hora, $distrito, $direccion)
    {
        $sql = "insert into pedido values('$codigo','$cli_cod','$co_cod','$cantidad','$fecha','$hora','$distrito','$direccion')";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para eliminar registros
    function eliminarPropiedad($codigo)
    {
        $sql = "delete from pedido where codigo='$codigo'";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para actualizar registros
    function actualizarTodoPropiedad($codigo, $cli_cod, $co_cod, $cantidad, $fecha, $hora, $distrito, $direccion)
    {
        $sql = "update pedido set cli_cod='$cli_cod', co_cod='$co_cod',cantidad='$cantidad',fecha='$fecha',hora='$hora', distrito='$distrito',direccion='$direccion' where codigo='$codigo'";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para actualizar registros sin foto
    function actualizarPropiedad($codigo, $cli_cod, $co_cod, $cantidad, $fecha, $hora, $distrito, $direccion)
    {
        $sql = "update pedido set cli_cod='$cli_cod', co_cod='$co_cod',cantidad='$cantidad',fecha='$fecha',hora='$hora',distrito='$distrito',direccion='$direccion' where codigo='$codigo'";
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para buscar registro
    function buscarPropiedad(string $codigo)
    {
        $sql = "select * from pedido where codigo='$codigo'";
        $res = mysqli_query($this->conn, $sql);
        $vec = array();
        if (mysqli_num_rows($res) > 0) {
            $vec = mysqli_fetch_array($res);
        }
        return $vec;
    }

    //método para buscar registro
    function listarPropiedadCod(string $codigo)
    {
        $sql = "select x.co_cod , cantidad , fecha, hora, distrito, direccion, a.cli_nombre , x.co_nombre
        from pedido p inner join persona a on p.cli_cod=a.cli_cod 
        inner join comida x on p.co_cod=x.co_cod        
         where a.cli_cod= '$codigo'";
        $res = mysqli_query($this->conn, $sql);
        $vec = array();
        while ($f = mysqli_fetch_array($res))
            $vec[] = $f;
        return $vec;
    }

    //método para listar registros
    function listarPropiedad()
    {
        $sql = "select codigo, x.co_cod , cantidad , fecha, hora, distrito, direccion, a.cli_nombre , x.co_nombre
        from pedido p inner join persona a on p.cli_cod=a.cli_cod 
        inner join comida x on p.co_cod=x.co_cod
        ";
        $res = mysqli_query($this->conn, $sql);
        $vec = array();
        while ($f = mysqli_fetch_array($res))
            $vec[] = $f;
        return $vec;
    }
}
