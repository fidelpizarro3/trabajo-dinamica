<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
<h2> <?php echo "hola me llamo" . $nombre . " " . $apellido . " tengo " . $edad . " de edad y mi direccion es: " . $direccion ?><h2
</html>