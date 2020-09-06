<?php 

// Debuggear
$nombre = "Kevin Zurita <br>";
var_dump($nombre);

// Fechas
echo date('D-M-Y-h-s');
echo '<br>';

echo time();
echo '<br>';

// Matematicas
echo "Raiz cuadrada del 10': ". sqrt(10);
echo '<br>';

echo "Numero aleatorio entre el 10 y el 40 ". rand(10, 40);
echo '<br>';

echo "Numero pi ". pi();
echo '<br>';

echo "Redondear: ". round(7.8985684, 2);
echo '<br>';

// Mas funciones generales
echo gettype($nombre);
echo '<br>';

if (is_float($nombre)) {
    echo 'La variable es un numero decimal';
}else {
    echo 'La variable no es un numero decimal';
}
echo '<br>';

// Limpiar espacios
$frase = '       Hola mundo        ';
var_dump($frase);
echo '<br>';
var_dump(trim($frase));

// Eliminar variables / indice
echo '<br>';
$year = 2020;
unset($year);
var_dump($year);

// Comprobar variable vacia
echo '<br>';
$texto = '';
if (empty($texto)) {
    echo 'La variable texto esta vacia';
}else {
    echo 'La variable tecto tiene contenido';
}

// Contar caracteres de una cadena string
echo '<br>';
$cadena = '12345';
echo strlen($cadena);

// Encontrar caracter
echo '<br>';
$frase = 'La vida es bella';
echo strpos($frase, 'd'); 

// Remplazar palabras de un tring
echo '<br>';
$frase = str_replace('vida', 'moto', $frase);
echo $frase;

// Convertir a minusculas y mayusculas
echo '<br>';
echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);
echo '<br>';
echo $frase;

echo '<br>';


?>