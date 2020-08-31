<?php 

/* 
Tipos de datos:
Numeros enteros (int/integer) 99
coma flotante / decimales (float/double) = 3.45
cadenas (string) = "texto"
boleanos (bool) = 1 0 true false
null
arrays (coleccion de datos)
objetos
*/

$numero = 111;
$decimal = 27.9;
$texto = "soy un texto $numero";
$texto2 = 'soy un texto2 $numero';
$texto3 = 'soy """"" comilla \' \' \' \'un texto3 ';
$verdadero = true;
$nula = null;

//     "\n"  salto de linea a nivel de consola \t se hace tab


echo gettype($numero). "<br>";
echo gettype($decimal). "<br>";
echo gettype($texto). "<br>";
echo gettype($verdadero). "<br>";
echo gettype($nula). "<br>";
echo $texto. "<br>";
echo $texto2. "<br>";
echo $texto3. "<br>";
//debugear

//$miNombre[] = "Kevin Zurita";
$miNombre = "Kevin Zurita";

var_dump($miNombre);



?>