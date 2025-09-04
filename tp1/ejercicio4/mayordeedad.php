<?php



$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$direccion = $_GET['direccion'];


if($edad>=18){
    echo  "hola " . $nombre . " sos mayor de edad";
}
elseif($edad<18){
    echo "hola " . $nombre . " sos menor de edad";
}