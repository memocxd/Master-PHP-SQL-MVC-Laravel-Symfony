<?php 

/* 
    FUNCIONES:
Conjunto de intrucciones agrupadas bajo un nombre concreto 
y que pueden reutilizarce invocando la funcion.
*/

// Ejemplo 1

function muestraNombres(){
    echo 'Kevin <br>';
    echo 'Memo <br>';
    echo 'Mora <br>';
    echo 'Zurita <br>';
}
muestraNombres();

// Ejemplo 2

function tabla($numero) {
    echo "<h3> Tabla de multiplicar del numero $numero </h3>";
    for ($i=1; $i <=10 ; $i++) { 
    $operacion = $numero*$i;
    echo "$numero x $i = $operacion <br>";
    }
}
tabla(93);

/* for ($i=1; $i <= 10 ; $i++) { 
    tabla($i);
} */
echo '<hr>';

// Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    $cadenaTexto = "";
    
    if ($negrita) {
        $cadenaTexto .= '<h1>';
    }
    
    $cadenaTexto .= "Suma: $suma <br>";
    $cadenaTexto .= "Resta: $resta<br>";
    $cadenaTexto .= "Multiplicacion: $multiplicacion<br>";
    $cadenaTexto .= "Division: $division<br>";
    
    if ($negrita) {
        $cadenaTexto .= '</h1>';
    }
    $cadenaTexto .= '<hr>';
    return $cadenaTexto;
}
echo calculadora(10, 30, 1);
print calculadora(15, 80);

// Ejemplo 4 con return y funciones dentro de otras

function getNombre($nombre){
    $texto = "Los nombres son: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}
function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            .'<br>'.
            getApellidos($apellidos);
    return $texto;
}
echo devuelveElNombre("Guillermo Kevin", 'Mora Zurita');
echo '<br>'. getNombre('Carlos');





































?>