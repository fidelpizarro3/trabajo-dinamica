<?php
$ok = $_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["poster"]) && isset($_POST["titulo"], $_POST["genero"], $_POST["anio"]);
$nombre_archivo = null;
$mensaje = null;
if ($ok) {
    $tmp = $_FILES["poster"]["tmp_name"] ?? null;
    $nombre = $_FILES["poster"]["name"] ?? "";
    $error = $_FILES["poster"]["error"] ?? UPLOAD_ERR_NO_FILE;
    $peso = $_FILES["poster"]["size"] ?? 0;
    $base = pathinfo($nombre, PATHINFO_FILENAME);
    $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
    $permitidas = ["jpg","jpeg","png","gif","webp"];
    if ($error === UPLOAD_ERR_OK && in_array($ext, $permitidas) && $peso > 0) {
        $id = bin2hex(random_bytes(4));
        $nombre_archivo = $id . "-" . preg_replace("/[^a-z0-9-_]+/i", "_", $base) . "." . $ext;
        $dest = __DIR__ . "/subidas/" . $nombre_archivo;
        if (!is_dir(__DIR__ . "/subidas")) mkdir(__DIR__ . "/subidas", 0777, true);
        if (!move_uploaded_file($tmp, $dest)) { $ok = false; $mensaje = "No se pudo guardar la imagen."; }
    } else { $ok = false; $mensaje = "Archivo no válido."; }
} else { $mensaje = "Datos incompletos."; }

$titulo = htmlspecialchars($_POST["titulo"] ?? "", ENT_QUOTES, "UTF-8");
$genero = htmlspecialchars($_POST["genero"] ?? "", ENT_QUOTES, "UTF-8");
$anio = htmlspecialchars($_POST["anio"] ?? "", ENT_QUOTES, "UTF-8");
$duracion = htmlspecialchars($_POST["duracion"] ?? "", ENT_QUOTES, "UTF-8");
$src = $nombre_archivo ? ("subidas/" . rawurlencode($nombre_archivo)) : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detalle de Película</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <?php if ($ok): ?>
          <div class="card shadow-sm overflow-hidden">
            <div class="row g-0 align-items-stretch">
              <div class="col-12 col-md-5 p-3 d-flex align-items-center justify-content-center bg-white">
                <?php if ($src): ?>
                    <img src="<?= $src ?>" alt="Poster" class="img-fluid rounded" style="max-height:420px;object-fit:contain;">
                <?php endif; ?>
                </div>
                <div class="col-12 col-md-7">
                <div class="card-body">
                    <h1 class="h4 mb-3"><?= $titulo ?></h1>
                    <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item"><strong>Género:</strong> <?= $genero ?></li>
                    <li class="list-group-item"><strong>Año:</strong> <?= $anio ?></li>
                    <?php if ($duracion !== ""): ?>
                        <li class="list-group-item"><strong>Duración:</strong> <?= $duracion ?> min</li>
                    <?php endif; ?>
                    </ul>
                    <div class="d-grid gap-2">
                    <a class="btn btn-outline-secondary" href="../vista/vista-e3.php">Cargar otra</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert"><?= htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8") ?></div>
            <a class="btn btn-outline-secondary" href="../vista/vista-e3.php">Volver</a>
        <?php endif; ?>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
