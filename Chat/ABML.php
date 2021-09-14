<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
include_once("db.php");

class Pedidos_Model extends Conexion 
{

    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }











    // Agregar Pedidos




    public static function AgregarPedidos_SP($nombre, $mensaje)
    {
        try {
            $con = new Conexion();
            $sql = "CALL sp_AgregarPedidos(?,?,?)";
            $insert =  $con->prepare($sql);
            $insert->bindParam(1, $nombre, PDO::PARAM_STR, 50);
            $insert->bindParam(4, $mensaje, PDO::PARAM_STR, 50); 
            $insert->bindParam(5, $idInsert, PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT); 
            $insert->execute();
            return $idInsert;
        } catch (PDOException $pe) {
            // die es el equivalente a exit()
            die("Error occurred: " . $pe->getMessage());
        }
    }

    public function AgregarPedidos( $nombre, $mensaje)
    {

        $sql = "INSERT INTO pedido (
            nombre$nombre, 
            mensaje) VALUES (?,?)";
        $insert =  $this->conexion->prepare($sql);
        $arrData = array( $nombre, $mensaje);
        $insert->execute($arrData);
        $idInsert =  $this->conexion->lastInsertId();
        return $idInsert;
    }

    public static function AgregarPedidos_Static($nombre, $mensaje)
    {

        $con = new Conexion();
        $sql = "INSERT INTO pedido ( 
            nombre$nombre, 
            mensaje) VALUES (?,?)";
        $insert = $con->prepare($sql);
        $arrData = array($nombre, $mensaje);
        $insert->execute($arrData);
        $idInsert = $con->lastInsertId();
        return $idInsert;
    }




}

?>
</body>
</html>