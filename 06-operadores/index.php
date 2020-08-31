<?php 

// Operadores aritmeticos

$numero1 = 55;
$numero2 = 33;

echo 'suma: '.($numero1+$numero2). '<br>';
echo 'resta: '.($numero1-$numero2). '<br>';
echo 'multiplicacion: '.($numero1*$numero2). '<br>';
echo 'division: '.($numero1/$numero2). '<br>';
echo 'resto: '.($numero1%$numero2). '<br>';

// Operadores de incremento y decremento

$year = 2020;

echo $year. '<br>';
$year++;    //Incremento
echo $year. '<br>';
$year--;    //Descremento
echo $year. '<br>';
++$year;    //Pre-incremento
echo $year. '<br>';
--$year;    //Pre-decremento
echo $year. '<br>';

// Operadores de asignacion

$edad = 55;

echo $edad. '<br>';
// $edad = $edad + 5;
echo ($edad+=5). '<br>';




?>