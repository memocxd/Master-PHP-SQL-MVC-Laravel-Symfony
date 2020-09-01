<?php 

/* 
//  BUCLE WHILE

Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces como sea necesario, en base a una condicion

while(condicion) {
    bloque de instrucciones
}

*/

$numero = 0;
while ($numero <= 100) {
    echo $numero;
    if ($numero != 100) {
        echo ', ';
    }
    $numero++;
}

echo '<hr>';

// Ejemplo modificando la url de esta manera: 09-bucles/?numero=55
if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
}else {
    $numero =1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$contador = 1;
while ($contador <= 10) {
    echo "$numero x $contador = ". ($numero*$contador). '<br>';
    $contador++;
}
echo '<br>';

// DO WHILE

$edad = 18;
$contador = 1;
do {
    echo "Tienes acceso al local privado $contador<br>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);





























?>