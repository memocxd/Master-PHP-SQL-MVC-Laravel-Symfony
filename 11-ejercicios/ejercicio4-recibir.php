<?php 

/* 
Ejercicio 4, recoger 2 numeros por la url y hacer todas las 
operaciones basicas de una calculadora 
(suma, resta, divicion, multiplicacion)
*/

$numero1 = $_GET['x'];
$numero2 = $_GET['y'];

echo "$numero1 + $numero2 = ". ($numero1+$numero2). '<br>';
echo "$numero1 - $numero2 = ". ($numero1-$numero2). '<br>';
echo "$numero1 * $numero2 = ". ($numero1*$numero2). '<br>';
echo "$numero1 / $numero2 = ". ($numero1/$numero2). '<br>';

?>