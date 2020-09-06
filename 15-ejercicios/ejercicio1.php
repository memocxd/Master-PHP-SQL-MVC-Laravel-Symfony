<?php 

/* 
Ejercicio 1, hacer un script con un array con 8 numeros y que haga lo sigueinte
-Recorrerlo y mostrarlo
-Ordenarlo y mostrarlo
-Mostrar su longitud
-Buscar algun elemento
*/

$numeros = [45, 23, 74, 56, 14, 37, 66, 25];

//-Recorrerlo y mostrarlo
function mostrar($numeros) {
    $texto ="";
    foreach ($numeros as $key => $numero) {
    $texto .= $numero. '<br>';
    }
    return $texto;
}
echo mostrar($numeros);
echo '<hr>';

//-Ordenarlo y mostrarlo
sort($numeros);
echo mostrar($numeros);
echo '<hr>';

//-Mostrar su longitud
var_dump($numeros);
echo '<hr>';

//-Buscar algun elemento
echo array_search(37, $numeros);

?>