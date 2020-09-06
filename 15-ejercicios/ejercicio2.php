<?php 

/* 
Ejercicio 2, escribir un programa que añada valores a un array 
mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla.
*/

$numeros = [];

$contar = count($numeros);
echo 'Longitud de array: '. $contar. '<br>';
echo '<br>';

// Añadir valores al array
for ($i=1; $i < 120 ; $i++) { 
    //array_push($numeros, $i);
    $numeros[] = $i;
}

// Mostrar Array
foreach ($numeros as $key => $numero) {
    echo $numero. ', ';
}
echo '<br>';
echo '<br>';

// Contar longitud del array
$contar = count($numeros);
echo 'Longitud de array: '. $contar. '<br>';




?>