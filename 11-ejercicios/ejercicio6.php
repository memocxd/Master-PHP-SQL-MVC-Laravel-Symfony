<?php 

/* 
Ejercicio 6, mostrar una tabla de html 
con las tablas de multiplicar del 1 al 10
*/

// Adicionalmente cree un script que me imprime 10 tablas en vez de una para cada numero
echo '<h1>Tablas de multiplicar</h1>';
for ($i=1; $i <= 10 ; $i++) {
    for ($a=1; $a <= 10 ; $a++) {
        // Apertura de tabla
        if ($a == 1) {
            echo "<table>";
            echo "<caption>Tabla del $i</caption>";
            echo "<tbody>";
        }
        // Contenido de la tabla
        echo '<tr>'. "<td>$i</td> <td>x</td> <td>$a</td> <td>=</td> <td>". ($a*$i). '</td>' .'</tr>';
        // Cierre de tabla
        if ($a == 10) {
            echo "</table> </tbody>";
        }
    }
    if ($a == 11) {
    echo '<br>';
    }
}

?>