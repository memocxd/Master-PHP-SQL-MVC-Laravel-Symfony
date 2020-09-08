<?php

$error = 'faltan_valores';
if (empty($_POST['nombre']) && empty($_POST['apellidos']) 
&& empty($_POST['edad']) && empty($_POST['mail']) 
&& empty($_POST['pass']) ) {
    $error = 'faltan_valores';
    header("Location:index.php?error=$error");
}else {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($error == 'ok'): ?>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$mail?></p>
        <p><?=$pass?></p>
    <?php endif; ?>
</body>
</html>