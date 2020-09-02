<?php 

/* 
Ejercicio 3, escribir un programa que imprima los cuadrados
de los primeros 40 numeros naturales
*/

for ($i=1; $i <=40 ; $i++) { 
    echo "$i^ = ". ($i * $i). '<br>';
}
echo '<br><br>';

// PD: utilizar bucle while
/* Ups pause la clase antes XD */

$numero = 1;
while ($numero <= 40) {
    echo "$numero^ = ". ($numero * $numero). '<br>';
    $numero++;
}

?>