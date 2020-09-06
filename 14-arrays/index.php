<?php 

/* 
ARRAYS:
Es una coleccion de datos, es una coleccion de variables
Es una variable que contiene muchas variables
*/

$pelicula = 'Batman';
$peliculas = array('Batman', 'Spiderman', 'Sin limites');
$vikingos = ['Ragnar', 'Bjorn', 'Ivar'];

// Array asociativo
$personas = array(
    'nombre' => 'Kevin',
    'apellido' => 'Zurita',
    'web' => 'kevinzurita.com'
);

echo $personas['web'];

/* var_dump($peliculas);
var_dump($personas);
var_dump($vikingos); */

echo '<br>';
echo $vikingos[0];
echo '<br>';
echo $peliculas[2];
echo '<br>';

// Recorrer con for
echo '<h1>Listado de peliculas</h1>';

echo '<ul>';
for ($i=0; $i <= count($peliculas) ; $i++) { 
    if ($i <= (count($peliculas)-1)) {
        echo '<li>'. $peliculas[$i]. '</li>';
    }
}
echo '</ul>';

// Recorrer con foreach
echo '<h1>Listado de Vikingos</h1>';

echo '<ul>';
foreach ($vikingos as $key => $vikingo) {
    echo '<li>'. $vikingo. '</li>';
}
echo '</ul>';


// Array multidimencionales

$contactos = array(
    array(
        'nombre' => 'Luis',
        'mail' => 'luis@gmail.com'
    ),
    array(
        'nombre' => 'Juan',
        'mail' => 'Juan@gmail.com'
    ),
    array(
        'nombre' => 'Ana',
        'mail' => 'Ana@gmail.com'
        )
);
//var_dump($contactos);
echo $contactos[1]['mail']. '<br>';

foreach ($contactos as $key => $contacto) {
    echo $contacto['nombre']. '<br>';
}








?>