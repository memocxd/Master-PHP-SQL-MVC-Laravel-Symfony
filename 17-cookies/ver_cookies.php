<?php 

/* 
Para mostrar el valor de las cookies tengo que usar $_cookie que es una variable super global y es un array asociativo.
*/

if (isset($_COOKIE['micookie'])) {
    echo "<h1>". $_COOKIE['micookie']. "</h1>";
}else {
    echo 'No existe la cookie';
}

if (isset($_COOKIE['unyear'])) {
    echo "<h1>". $_COOKIE['unyear']. "</h1>";
}else {
    echo 'No existe la cookie';
}
echo '<a href="borrar_cookies.php">Borrar cookies</a><br>';
echo '<a href="crear_cookies.php">Crear cookies</a>';

?>