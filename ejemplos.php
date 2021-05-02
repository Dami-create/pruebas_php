<?php
$a = 1;
$b = 2;
do {
    $b = $a + $b;
    echo " ".$b ;
} while ($b <=199);

?>



<?php
$a = 1;
$b = 2;
function Suma()
{
global $a, $b;
$b = $a + $b;
}
Suma();
echo $b;
?>



<?php
$var = 'Roberto';
$Var = 'Juan';
echo "$var, $Var"; // imprime "Roberto, Juan"
$4site = 'aún no'; // inválido; comienza con un número
$_4site = 'aún no'; // válido; comienza con un carácter de subrayado
$täyte = 'mansikka'; // válido; 'ä' es ASCII (Extendido) 228
?>




<?php
$a = "Hello ";
$b = $a . "World!"; // ahora $b contiene "Hello World!"
$a = "Hello ";
$a .= "World!"; // ahora $a contiene "Hello World!"
// veremos que en PHP podemos concatenar valores numéricos directamente
// con texto sin que esto implique un problema, como pasa en otros lenguajes.
echo "La suma de " . 25 . " y " . 32 . " es igual a " . (25 + 32);
?>



<?php
function foo ()
{
return 5;
}
?>
