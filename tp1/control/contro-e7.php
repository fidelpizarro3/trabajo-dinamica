<?php


$numeroA = $_GET['numeroA'];
$numeroB = $_GET['numeroB'];        


$operacion = $_GET['operacion'];

echo "se eligio la operacion: " . $operacion . "<br>";

switch($operacion){
    case "sumar":
        $resultado = $numeroA + $numeroB;
        echo "El resultado de la suma entre " . $numeroA . " y " . $numeroB . " es: " . $resultado;
        break;
    case "restar":
        $resultado = $numeroA - $numeroB;
        echo "El resultado de la resta entre " . $numeroA . " y " . $numeroB . " es: " . $resultado;
        break;
    case "multiplicar":
       $resultado = $numeroA * $numeroB;
        echo "El resultado de la multiplicación entre " . $numeroA . " y " . $numeroB . "   es: " . $resultado;
        break;
}