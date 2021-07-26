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
//$4site = 'aún no'; // inválido; comienza con un número
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




<?php
/* ejemplo 1 */
$i = 1;
while ($i <= 10) {
echo $i++; /* el valor presentado sería
$i antes del incremento
(post-incremento) */
}
/* ejemplo 2 */
$i = 1;
while ($i <= 10):
echo $i;
$i++;
endwhile;
?>







<?php
/* ejemplo 1 */
for ($i = 1; $i <= 10; $i++) {
echo $i;
}
/* ejemplo 2 */
for ($i = 1; ; $i++) {
if ($i > 10) {
break;
}
echo $i;
}
/* ejemplo 3 */
$i = 1;
for (; ; ) {
if ($i > 10) {
break;
}
echo $i;
$i++;
}
/* ejemplo 4 */
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>



<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo $valor;

}
// $array ahora es array(2, 4, 6, 8)
unset($valor); // rompe la referencia con el último elemento
?>






<?php
if ($i == 0) {
echo "i es igual a 0";
} elseif ($i == 1) {
echo "i es igual a 1";
} elseif ($i == 2) {
echo "i es igual a 2";
}
?>



<?php
$i=1;
switch ($i) {
case 0:
echo "i es igual a 0";
break;
case 1:
echo "i es igual a 1";
break;
case 2:
echo "i es igual a 2";
break;
}
?>






La estructura switch también permite el uso de strings.
<?php
$i="barra";
switch ($i) {
case "manzana":
echo "i es una manzana";
break;
case "barra":
echo "i es una barra";
break;
case "pastel":
echo "i es un pastel";
break;
}
?>





Cualquier cosa fuera de un par de etiquetas de apertura y cierre es ignorado por el intérprete de PHP, lo
que permite que los ficheros de PHP tengan contenido mixto. Esto hace que PHP pueda ser embebido en
documentos HTML para, por ejemplo, crear plantillas.

<p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
<?php echo 'Mientras que esto va a ser interpretado.'; ?>
<p>Esto también será ignorado por PHP y mostrado por el navegador.</p>




● Formularios
Los formularios es la única manera de que el usuario nos transmita información, y tenemos una gran cantidad de
posibilidades para recoger: textos, números, archivos, checks…
Para construir nuestro formulario necesitaremos la etiqueta <form> y dentro todos los <input>s que necesitemos.
Utilizamos var_dump($_REQUEST) para saber qué variables te llegan de un formulario.
$_REQUEST es un array que contiene todas las variables que recibimos, lo cual nos simplifica a la hora de extraer
cada elemento.
<html>
<body>
<form>
<?php
var_dump($_REQUEST);
?>
<input type="text" name="nombre">
<input type="submit">
</form>
</body>
</html>




ARRAY ASOCIATIVO



$edades=array(

"Damian"=>"17",
"Lucas"=>"18"

);

echo $edades["Lucas"];





MATRIZ 4X2


$var = [        /Col 0 */            /Col 1 */
    / fila 0 */ ['cantidad',           1],
    / fila 1 */ ['descripcion',        'titanic'],
    / fila 2 */ ['precio unuitario',   1000],
    / fila 3 */ ['subtotal',           1234123413]
  ];
  