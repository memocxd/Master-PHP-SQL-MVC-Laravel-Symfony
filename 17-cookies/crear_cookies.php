<?php 

/* 
COOKIE: es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de recordar datos o ratrear el comportamiento del mismo en la web.
*/

// Crear cookies
// setcookie('nombre', 'valor que solo puede ser texto', caducidad, ruta, dominio);

// Cookie basica
setcookie('micookie', 'valor de mi galleta');

// Cookie con expiracion
setcookie('unyear', 'valor de mi cookie anual', time() + (60*60*24*365));

header('Location:ver_cookies.php');
?>

<!-- <a href="ver_cookies.php">Ver las galletas</a> -->