<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contenido del archivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<?php

if (!isset($_FILES["miArchivo"])) {
    echo '<div class="alert alert-danger">Por favor, subí un archivo primero.</div>';
    exit;
}

$archivo = $_FILES["miArchivo"];

if ($archivo["error"] !== 0) {
    echo '<div class="alert alert-danger">Error al subir el archivo.</div>';
    exit;
}

$nombre = $archivo["name"];

if (substr($nombre, -4) !== ".txt") {
    echo '<div class="alert alert-warning">Solo se permiten archivos con extensión .txt</div>';
    exit;
}

$contenido = file_get_contents($archivo["tmp_name"]);
?>

    <h4 class="text-success">Contenido del archivo</h4>
    <textarea class="form-control" rows="20"><?= htmlspecialchars($contenido) ?></textarea>
    <a href="subirTexto.html" class="btn btn-secondary mt-3">Volver</a>

</div>

</body>
</html>
