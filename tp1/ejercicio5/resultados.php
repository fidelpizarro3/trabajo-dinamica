<?php

$nivelestudios = $_GET['nivelEstudios'];
$sexo = $_GET['sexo'];

if($nivelestudios == 1){
    $nivelDeEstudios = "No tiene estudios";
} elseif($nivelestudios == 2){
    $nivelDeEstudios = "Estudios primarios";
} elseif($nivelestudios == 3){
    $nivelDeEstudios = "Estudios secundarios";
}

echo "Su nivel de estudios es: " . $nivelDeEstudios . " y su sexo es: " . $sexo;