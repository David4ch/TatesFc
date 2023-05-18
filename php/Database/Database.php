<?php
class Database
{
    public static function conectar(){
        $driver = "mysql";
        $host = "127.0.0.1";
        $port = "3306";
        $user = "root";
        $password = "";
        $db = "pfc";

        $dns = "$driver:dbname=$db;host=$host;port=$port";

        try {
            $gbd = new PDO($dns, $user, $password);
        } catch (PDOException $e) {
            echo "Error: fallo en la conexión" . $e->getMessage();
        }
        return $gbd;
    }
    //-------------------------------SECCION USUARIOS---------------------------------------------------------------------
    public static function getAllUsuarios() {
        /*
            1. Conecta
            2. Realiza la query
        */
        $sql = "SELECT * FROM usuarios";

        $resultado1 = self::conectar()->query($sql);

        return $resultado1;
    }
    //-------------------------------SECCION PRODUCTOS---------------------------------------------------------------------
    public static function getAllProductos(){
        $sql = "SELECT * FROM Productos";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    public static function getProductoId($id) {
        $sql = "SELECT * FROM productos WHERE id = $id";
        $resultado = self::conectar()->query($sql);

        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public static function saveProductos($datos){
        $sql = "INSERT INTO productos (nombre, precio, stock) VALUES ('$datos[0]', $datos[1], $datos[2])";
        self::conectar()->exec($sql);

    }

    public static function updateProductos($datos) {
        $sql = "UPDATE productos SET nombre = '$datos[1]' , precio = $datos[2], stock= '$datos[3]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);

    }
    public static function deleteProducto($id) {
        $sql = "DELETE  FROM productos WHERE id = $id";
        self::conectar()->exec($sql);

    }

    //-------------------------------SECCION USUARIOS_PRODUCTOS---------------------------------------------------------------------
    public static function getAllUsuariosProductos()
    {
        $sql = "SELECT * FROM usuario_has_productos";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
    //-------------------------------SECCION ROL---------------------------------------------------------------------
    public static function getAllRol()
    {
        $sql = "SELECT * FROM Rol";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
    //-------------------------------SECCION JUGADORES---------------------------------------------------------------------
    public static function getAllJugadores()
    {
        $sql = "SELECT * FROM Jugadores";
        $resultado1 = self::conectar()->query($sql);

        return $resultado1;
    }

    public static function getJugadorId($id)
    {
        $sql = "SELECT * FROM jugadores WHERE id = $id";
        $resultado = self::conectar()->query($sql);

        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    //Funcion que inserta valores en la tabla
    //$Datos recibe los elementos de los ordenadores
    public static function saveJugador($datos)
    {
        $sql = "INSERT INTO jugadores (nombre, apellido, dorsal, posicion) VALUES ('$datos[0]', '$datos[1]', $datos[2], '$datos[3]')";
        self::conectar()->exec($sql);

    }

    public static function updateJugador($datos)
    {
        $sql = "UPDATE jugadores SET nombre = '$datos[1]' , apellido = '$datos[2]', dorsal = $datos[3] , posicion = '$datos[3]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);

    }
    public static function deleteJugador($id)
    {
        $sql = "DELETE  FROM jugadores WHERE id = $id";
        self::conectar()->exec($sql);

    }
}

?>