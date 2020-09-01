<?php 

// CONDICIONALES

/*
//    CONDICIONAL IF:

if (condicion){
    instrucciones
}else{
    otras instrucciones
}

//  OPERADORES DE COMPARACION

== igual, similares
=== identico, exacto
!= distinto, diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

//  OPERADORES LOGICOS

&& AND y
|| OR o
! NOT no
and, or

*/

//  Ejemplo 1
$color = /* 'rojo' */ 'verde';

if($color == 'rojo') {
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}
echo '<br><br>';

//  Eejemplo 2
$year = 2020;
if($year < 2020) {
    echo 'Es un año anterior a 2020';
}elseif($year > 2020) {
    echo 'Es un año posterior a 2020';
}else {
    echo 'Es el año 2020';
}

//  Ejemplo 3
$nombre = 'Kevin Zurita';
$edad = 23;
$ciudad = 'Mexico';
$continente = 'America' ;
$mayoriaEdad = 18;

if ($edad >= $mayoriaEdad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente = 'america') {
        echo "<h2>y vive en la ciudad de $ciudad</h2>";
    }else {
        echo 'No es de America';
    }
}else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}

//  Ejemplo 4
$dia = 3;

if($dia == 1) {
    echo 'Es lunes';
}elseif($dia == 2) {
    echo 'Es martes';
}elseif($dia == 3) {
    echo 'Es Miercoles';
}elseif($dia == 4) {
    echo 'Es jueves';
}elseif($dia == 5) {
    echo 'Es viernes';
}elseif($dia == 6) {
    echo 'Es sabado';
}elseif($dia == 7) {
    echo 'Es domingo';
}else {
    echo 'ingrese un numero del 1 al 7 segun el dia de la semana';
}

echo '<hr>';

// Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edadOficial = 20;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
    echo 'Esta en edad de trabajar';
}else {
    echo 'No esta en edad de trabajar';
}





























?>