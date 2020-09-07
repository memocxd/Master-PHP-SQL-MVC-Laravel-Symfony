<?php 

/* 
Ejercicio 5, crear un array con el contenido de esta tabla:
Accion Aventura y Deportes
gta     assasins    fifa
cod     crash       pes
halo    bloodborne  mk

Cada fila debe ir en un fichero separado con include.
*/

$juegos = array(
    'Accion' => array('gta', 'cod', 'halo'),
    'Aventura' => array('assasins', 'crash', 'bloodborne'),
    'Deportes' => array('fifa', 'pes', 'mk')
);

$categorias = array_keys($juegos);

echo '<table>';

require_once 'ejercicio5-includes/categorias.php';
require_once 'ejercicio5-includes/primera.php';
require_once 'ejercicio5-includes/segunda.php';
require_once 'ejercicio5-includes/tercera.php';

echo '</table>';

?>