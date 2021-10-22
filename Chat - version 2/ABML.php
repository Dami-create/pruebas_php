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

    class Mensaje extends Conexion
    {

        private $conexion;

        public function __construct()
        {
            $this->conexion = new Conexion();
        }


        // Listar Usuario



        public function ListarUsuario()
        {
            try {

                //$obj_conexion = Conexion::getConexion();
                $con = new Conexion();

                if (!$con) {
                    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
                } else {
                    echo "";

                    ?>
                    <div>
                    
                    <?php 

                    /* ejemplo de una consulta */

                    $consulta = "SELECT * FROM chat";
                    $resultado = $con->query($consulta);


                    ?>

                    </div>

                    <?php 
                    
                    // echo "<table border='1' align='center'>
                    //     <tr bgcolor='#E6E6E6'>
                    //         <th>--ID--</th>
                    //         <th>--Nombre--</th>
                    //         <th>--Apellido--</th>
                    //         <th>--Tipo De Usuario--</th>
                    //         <th>--CI--</th>
                    //         <th>--Contraseña--</th>

                    //     </tr>";

                    foreach ($resultado as $fila) {

                        echo "<tr>
                        <td>" . $fila["nombre"] . "</td>";
                        echo "<td>" . $fila["mensaje"] . "</td>";
                        echo "<td>" . $fila["fecha"] . "</td></tr>";
                    }
                }
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }
        }




        // Agregar Usuario





        function AgregarMensaje($nombre, $mensaje, $fecha){

            $sql = "INSERT INTO chat (
            nombre,
            mensaje,
            fecha) VALUES (?,?,?)";


            try {

                $insert =  $this->conexion->prepare($sql);
                $arrData = array($nombre, $mensaje, $fecha);
                $insert->execute($arrData);
                $idInsert =  $this->conexion->lastInsertId();
                return $idInsert;
            } catch (PDOException $error) {

                echo $error->getMessage();
            }
    
        }
          
    }
    ?>

    
</body>

</html>


