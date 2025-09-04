<?php
//recibo datos del formulario con el get, 

$horas = array( 
    $_GET['lunes'],
    $_GET['martes'],
    $_GET['miercoles'],
    $_GET['jueves'],
    $_GET['viernes']
);



//calculo el total en un bucle
$total = 0;
$i = 0;
while($i<count($horas)){
    $total = $total +$horas[$i];
    $i++;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
<h2> Total de horas cursadas a la semana: <?php echo $total; ?><h2
</html>