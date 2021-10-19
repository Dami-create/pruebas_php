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
    include_once("conexionBD.php");

    class Usuario_Model extends Conexion
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


                    /* ejemplo de una consulta */

                    $consulta = "SELECT * FROM users";
                    $resultado = $con->query($consulta);

                    echo "<table border='1' align='center'>
                        <tr bgcolor='#E6E6E6'>
                            <th>--ID--</th>
                            <th>--Nombre--</th>
                            <th>--Apellido--</th>
                            <th>--Tipo De Usuario--</th>
                            <th>--CI--</th>
                            <th>--Contraseña--</th>

                        </tr>";

                    foreach ($resultado as $fila) {

                        echo "<tr>
                        <td>" . $fila["idUser"] . "</td>";
                        echo "<td>" . $fila["nombre"] . "</td>";
                        echo "<td>" . $fila["apellido"] . "</td>";
                        echo "<td>" . $fila["userType"] . "</td>";
                        echo "<td>" . $fila["ci"] . "</td>";
                        echo "<td>" . $fila["userPass"] . "</td></tr>";
                    }
                }
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }
        }




        // Agregar Usuario





        public function AgregarUsuario($id, $ci, $contraseña, $nombre, $apellido, $tipoUsuario)
        {

            $sql = "INSERT INTO users (
            idUser,
            ci,
            userPass,
            nombre, 
            apellido, 
            userType) VALUES (?,?,?,?,?,?)";

            try {

                $insert =  $this->conexion->prepare($sql);
                $arrData = array($id, $ci, $contraseña, $nombre, $apellido, $tipoUsuario);
                $insert->execute($arrData);
                $idInsert =  $this->conexion->lastInsertId();
                return $idInsert;
            } catch (PDOException $error) {

                echo $error->getMessage();
            }
        }



        // Modificar Usuario


        public function ModificarUsuario($ci, $contraseña, $nombre, $apellido, $tipoUsuario)
        {

            $con = new Conexion();
            $sql = "UPDATE users SET
                    userPass = ?,
                    nombre = ?, 
                    apellido = ?, 
                    userType = ?
                    WHERE ci = ?";

            $update = $con->prepare($sql);

            $arrData = array($contraseña, $nombre, $apellido, $tipoUsuario, $ci);
            //a
            return  $update->execute($arrData);
        }




        // Eliminar Usuario




        public function EliminarUsuario($ci)
        {
            $con = new Conexion();
            $sql = "DELETE FROM `users` WHERE `ci`= :ci";
            $update = $con->prepare($sql);
            $update->bindParam(':ci', $ci, PDO::PARAM_INT, 8);
            $respuesta = false;
            if ($update->execute())
                $respuesta = true;
            return $respuesta;
        }
    }

    ?>
</body>

</html>