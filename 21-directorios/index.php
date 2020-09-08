<?php 

// Para crear un directorio
if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
    echo 'Carpeta creada exitosamente';
}else {
    echo 'Ya existe la carpeta <br>';
    /* rmdir('mi_carpeta');
    echo 'Carpeta eliminada'; */
}

echo '<hr>';

if ($gestor = opendir('./mi_carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo !='.' && $archivo != '..') {
            echo $archivo. '<br>';
        }
    }
}


?>