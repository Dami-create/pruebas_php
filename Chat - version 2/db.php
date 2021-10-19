<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "appchat";

try{
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
}catch(PDOException $e){
   echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
   exit;
}

function formatearfecha($fecha){

   return date('g:i a', strtotime($fecha));

}

?>





  
