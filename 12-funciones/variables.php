<?php 

/* 
Variables locales:
Son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles dentron. A no ser que hagamos return

Variables globales:
Las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones
*/

// variable global
$frase = "Los limites de mi mundo son los limites de mi lenguaje";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    $year = 2020;
    echo "<h1>$year</h1>";
    return $year;
}
/* echo */ holaMundo();

// Funciones variables

function buenasDias(){
    return "hola buenos dias";
}

function buenasTardes(){
    return "hola buenass tardes";
}

function buenasNoches(){
    return "hola buenass noches";
}

$horario = 'Noches';
$miFuncion = "buenas". $horario;
echo $miFuncion();





?>