<?php

$numero = $_POST['numero'];
$mensaje = "";


if($numero > 0){
    $mensaje = "el numero ingresado ($numero) es positivo";
}
elseif($numero < 0){
    $mensaje = "el numero ingresado ($numero) es negativo";
}
else{
    $mensaje = "el numero ingresado es cero";
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2><?php echo $mensaje; ?></h2>
    <a href="index.html">Volver</a>
</body>
</html>