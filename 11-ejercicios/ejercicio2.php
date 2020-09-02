<?php 

/* 
Ejercicio 2, escribir un script que nos devuelva 
todos los numeros pares del 1 al 100
*/


// Mi solucion
$numeroPar = 2;

while ($numeroPar <= 100) {
    if ($numeroPar != 100) {
        echo "$numeroPar, ";
    }else {
        echo $numeroPar;
    }
    $numeroPar += 2;
}
echo '<br>'; // salto de linea necesario para correcta visualizacion

// solucion del maestro
for ($i=1; $i <= 100; $i++) { 
    if ($i%2 == 0) {
        echo $i. "<br>";
    }
}

?>