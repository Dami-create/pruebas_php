




<?php

$array=[ 

    "nombre"=>"titan"

]
;   

// PDO                  HOST              DB_NAME     USER    PASS
$pdo = new PDO('mysql:host=localhost;dbname=programación', 'root', '');

$sentencia = $pdo->query("SELECT * from ejemplo");

$fila = $sentencia->fetch(PDO::FETCH_ASSOC);

var_dump($fila);

foreach ($fila as $key => $value) {
    
    

    echo "<br>$key: $value";
}

echo $fila["nombre"];

?>
