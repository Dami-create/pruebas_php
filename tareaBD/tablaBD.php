<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index2.css">
    <link rel="stylesheet" href="./index.css">
  
</head>

<body>

<?php





$array=[ 

    "nombre"=>"titan"

]
;   

// PDO                  HOST              DB_NAME     USER    PASS
$pdo = new PDO('mysql:host=localhost;dbname=programación', 'root', '');

$sentencia = $pdo->query("SELECT * from ejemplo");
$array_persona= $sentencia->fetchAll();



//$fila = $sentencia->fetch(PDO::FETCH_ASSOC);



?>

</table>



    <table>
    <thead>
        <th class="border-tareaBD">
          nombre
        </th>

        <th class="border-tareaBD">
           apellido
        </th>

        <th class="border-tareaBD">
           ci
        </th>


    </thead>
    <?php






foreach ($array_persona as $persona) {
    

  echo "<tr>";
  echo "<td class='border-tareaBD'>" . ($persona["nombre"]) . "</td>";
  echo "<td class='border-tareaBD'>" . ($persona["apellido"]) . "</td>";
  echo "<td class='border-tareaBD'>" . ($persona["ci"]) . "</td>";
  echo "</tr>";

  
  }
  

  ?>
  
    

    </table>
    <br>



</body>

</html> 

    
