<?php 

$vikingos = ['Ragnar', 'Bjorn', 'Ivar', 'Lagertha'];
$numeros = [1, 7, 6, 8, 2, 3, 9, 4, 5];

// orden alfabetico
asort($vikingos);
foreach ($vikingos as $key => $vikingo) {
    echo $vikingo. '<br>';
}
echo '<hr>';

// orden alfabetico inverso
arsort($vikingos);
foreach ($vikingos as $key => $vikingo) {
    echo $vikingo. '<br>';
}
echo '<hr>';

// ordena alfabeticamente o numericamente
sort($numeros);
foreach ($numeros as $key => $numero) {
    echo $numero. '<br>';
}
echo '<hr>';

// ordena alfabeticamente o numericamente a la inversa
/* rsort($numeros);
foreach ($numeros as $key => $numero) {
    echo $numero. '<br>';
}
echo '<hr>'; */

// Añadir elementos a un array
$vikingos[] = 'Floki';
array_push($vikingos, 'Torvi');

// Eliminar elementos array
array_pop($vikingos);
unset($vikingos[2]);

// Aleatorio
$indice = array_rand($vikingos);
echo $vikingos[$indice]. '<br> <br>';

// Dar la vuelta
var_dump(array_reverse($vikingos));
echo '<br>';
echo '<br>';

// Buscar dentro de un array
$resultado = array_search('Bjorn', $vikingos);
var_dump($resultado);
echo '<br>';
echo '<br>';

// Contar numero de elementos
echo count($vikingos). '<br>';
echo sizeof($vikingos);



/* echo '<br><br>';
foreach ($vikingos as $key => $vikingo) {
    echo $vikingo. '<br>';
} */


?>