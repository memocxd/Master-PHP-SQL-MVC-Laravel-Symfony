<?php 

/* 
Ejercicio 5, hacer un programa que muestre todos los numeros que hay
entre dos numeros que nos lleguen por la url
*/

/* 
Ejercicio 7 ahora mostrar solo los numeros impares
*/

// ingresando numeros en la url de esta manera: /ejercicio5.php?x=15&y=25
if ( isset($_GET['x']) && isset($_GET['y']) ) {
    $numeroX = $_GET['x'];
    $numeroY = $_GET['y'];
    if ($numeroX > $numeroY) {
        while ($numeroX >= $numeroY) {
            // if para mostrar solo los impares
            if ( ($numeroY%2) != 0 ) {
                echo $numeroY. '<br>';
            }
            $numeroY++;
        }
    }elseif ($numeroX < $numeroY) {
        while ($numeroX <= $numeroY) {
            // if para mostrar solo los impares
            if (($numeroX%2) != 0) {
                echo $numeroX. '<br>';
            }
            $numeroX++;
        }
    }else {
        echo 'Por favor ingresar dos numeros distintos';
    }
}else {
    echo 'Por favor ingresar los valores en la url correctamente';
}

?>