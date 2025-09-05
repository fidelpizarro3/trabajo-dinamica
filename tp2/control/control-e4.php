<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="alert alert-success">
        <h4 class="text-primary">La película introducida es</h4>
        <p><strong>Título:</strong> <?= htmlspecialchars($_POST["titulo"]) ?></p>
        <p><strong>Actores:</strong> <?= htmlspecialchars($_POST["actores"]) ?></p>
        <p><strong>Director:</strong> <?= htmlspecialchars($_POST["director"]) ?></p>
        <p><strong>Guión:</strong> <?= htmlspecialchars($_POST["guion"]) ?></p>
        <p><strong>Producción:</strong> <?= htmlspecialchars($_POST["produccion"]) ?></p>
        <p><strong>Año:</strong> <?= htmlspecialchars($_POST["anio"]) ?></p>
        <p><strong>Nacionalidad:</strong> <?= htmlspecialchars($_POST["nacionalidad"]) ?></p>
        <p><strong>Género:</strong> <?= htmlspecialchars($_POST["genero"]) ?></p>
        <p><strong>Duración:</strong> <?= htmlspecialchars($_POST["duracion"]) ?> minutos</p>
        <p><strong>Restricciones de edad:</strong> <?= htmlspecialchars($_POST["restriccion"]) ?></p>
        <p><strong>Sinopsis:</strong> <?= nl2br(htmlspecialchars($_POST["sinopsis"])) ?></p>
    </div>
</div>

</body>
</html>
