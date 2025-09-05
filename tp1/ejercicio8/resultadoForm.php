<?php


$edad = $_GET['edad'];

$tipocliente = $_GET['tipocliente'];

function calcularPrecio($edad,$tipocliente){

    if($tipocliente == "1" || $edad < 12){
        $precio= 160;
    }
    elseif($tipocliente == "1" && $edad >= 12){
        $precio = 180;
    }
    else {
        $precio = 300;
    }
    return $precio;
}

$precioEntrada = calcularPrecio($edad,$tipocliente);

echo "el precio de la entrada es: $" . $precioEntrada;