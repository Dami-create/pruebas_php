<?php
 
    echo "Comenzamos a realizar el debug...";

    $valor="Hola Mundo";

    $valor = 12;



    function una_prueba(&$val){

        $val = 5;

        return "hola";
    }



    $val = 3;
    una_prueba($val);




    //public void una_prueba(&$val)

    for ($i=0; $i < 3; $i++) { 
    
        $val = $val+2;
        echo "Valor: " . $val;
    }
 



    $var1 = 45;
    
    $var2 = 45;


    