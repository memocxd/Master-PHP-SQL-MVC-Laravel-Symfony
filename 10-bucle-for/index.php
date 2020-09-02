<?php 

//  FOR
/* 
for (expresion inicial; condicion ; incrementa valor de contador) { 
    # code...
} 
*/

$resultado = 0;
for ($i=0; $i <= 100; $i++) { 
    $resultado += $i;
    echo $resultado;
    if ($i != 100) {
        echo ', ';
    }else {
        echo '.<br> <br>';
        echo "El resultado es $resultado";
    }
}

// Ejemplo modificando la url de esta manera: 10-bucle-for/?numero=55
if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
}else {
    $numero =1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";


for ($contador = 1; $contador <= 10; $contador++) {
    if ($numero == 45) {
        echo 'No se pueden mostrar estas multiplicaciones prohibidas';
    break;
    }
    echo "$numero x $contador = ". ($numero*$contador). '<br>';
}
echo '<br>';

?>