<?php 

/* 
Ejercicio 4, crear un script que tenga 4 variables, una de 
tipo array, otra de tipo string, otra int y otra booleana
y que imprima un mensaje segun el tipo de variable que sea.
*/

$tipoArray = ['Soy un array'];
$tipoString = 'Soy una variable tipo string';
$tipoInt = 555;
$tipoBoolean = true;

function imprimir($imprimir){
    $texto = "";
    $texto .= $imprimir. '<br>';
    return $texto;
}

echo imprimir($tipoArray[0]);
echo imprimir($tipoString);
echo imprimir($tipoInt);
echo imprimir($tipoBoolean);


?>