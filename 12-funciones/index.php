<?php 

/* 
    FUNCIONES:
Conjunto de intrucciones agrupadas bajo un nombre concreto 
y que pueden reutilizarce invocando la funcion.
*/

function muestraNombres(){
    echo 'Kevin <br>';
    echo 'Memo <br>';
    echo 'Mora <br>';
    echo 'Zurita <br>';
}
muestraNombres();

function tabla($numero) {
    echo "<h3> Tabla de multiplicar del numero $numero </h3>";
    for ($i=1; $i <=10 ; $i++) { 
    $operacion = $numero*$i;
    echo "$numero x $i = $operacion <br>";
    }
}
tabla(93);

for ($i=1; $i <= 10 ; $i++) { 
    tabla($i);
}

?>