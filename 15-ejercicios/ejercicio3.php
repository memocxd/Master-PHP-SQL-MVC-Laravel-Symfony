<?php 

/* 
Ejercicio 3, programa que compruebe si una variable esta vacia
y si esta vacia rellenarla con texto en minusculas 
y mostrarlo en mayusculas y negrita
*/

$vacia = "";

if (empty($vacia)) {
    $vacia = "texto agregado para el ejercicio";
    echo '<b>'. strtoupper($vacia). '</b>';
}else {
    echo 'La variable tiene contenido';
}







?>