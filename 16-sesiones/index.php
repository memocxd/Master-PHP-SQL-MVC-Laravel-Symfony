<?php 

/* 
SESION: Almacenar y persistir datos del usuario mientras que navega en un sitio web, hasta que cierra sesion o cierra el navegador.
*/

// Iniciar la sesion
session_start();

$variable_normal = "Soy una cadena de texto";

// Variable de sesion
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal. '<br>';
echo $_SESSION['variable_persistente']. '<br>';

?>