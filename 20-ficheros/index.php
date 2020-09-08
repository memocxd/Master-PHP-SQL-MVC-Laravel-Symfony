<?php 
/* 
// Abrir archivo 
// "r" => lectura || "w" => escritura || "x" => ejecutar || "a+" => leer y escribir
$archivo = fopen("fichero.txt", "a+");

// Leer archivo
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido. '<br>';
}

// Escribir
fwrite($archivo, " <br> Soy un texto ingresado con php");

// Cerrar archivo
fclose($archivo); */

// Copiar
// copy('fichero.txt', 'fichero_copiado.txt') or die("Error al copias");

// Renombrar
// rename('fichero_copiado.txt', 'fichero_renombrado.txt');

// Eliminar
// unlink('fichero_renombrado.txt') or die('error al borrar');

if (file_exists('fichero.txt')) {
    echo 'El archivo existe';
}else {
    echo 'El archivo no existe';
}


?>