<?php



$deportes = $_GET['deportes'];

$cantidaddeportes = 0;
$i = 0;
while($i<count($deportes)){
    $cantidaddeportes = $cantidaddeportes + 1;
    $i++;
}

echo "Cantidad de deportes seleccionados: " . $cantidaddeportes;