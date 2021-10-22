<?php

include "db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200&display=swap" rel="stylesheet">

<script type="text/javascript">

function ajax(){

    var req = new XMLHttpRequest();

    req.onreadystatechange = function(){

        if (req.onreadystatechange == 4 && req.status == 200) {
            documemt.getElementById('chat').innerHTML = req.responseText;
        }

    }

    req.open('GET','chat.php', true);
    req.send();
}

// linea que hace que se refresque la pagina cada segundo
setInterval(function(){ajax();}, 1000);

</script>

</head>

<body onload="ajax();">
    
<div id="contenedor">
    <div id="caja-chat">
        <div id="chat">




        </div>
         
    </div>

    <form method="POST">

    <input type="text" name="nombre" placeholder="ingresa tu nombre">
    
    <input type="date" name="fecha" placeholder="fecha">

    <textarea name="mensaje" placeholder="ingresa tu mensaje"></textarea>
    
    <input type="submit" name="enviar" value="Enviar">

    </form>

 
<?php



// Obtengo los datos enviados por el Formulario
include "./ABML.php";

if (isset($_POST['enviar'])) {

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$mensaje = $_POST['mensaje'];




$mensaje = new Mensaje();
$mensaje->AgregarMensaje($nombre, $mensaje, $fecha);
}


?>


</div>

</body>
</html>