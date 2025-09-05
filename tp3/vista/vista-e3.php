<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carga de Película</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h1 class="h4 mb-4 text-center">Nueva película</h1>
            <form action="../control/control-e3.php" method="post" enctype="multipart/form-data" class="vstack gap-3">
              <div>
                <label class="form-label" for="titulo">Título</label>
                <input class="form-control" type="text" id="titulo" name="titulo" required>
              </div>
              <div>
                <label class="form-label" for="genero">Género</label>
                <input class="form-control" type="text" id="genero" name="genero" required>
              </div>
              <div class="row g-3">
                <div class="col-6">
                  <label class="form-label" for="anio">Año</label>
                  <input class="form-control" type="number" id="anio" name="anio" min="1888" max="2100" required>
                </div>
                <div class="col-6">
                  <label class="form-label" for="duracion">Duración (min)</label>
                  <input class="form-control" type="number" id="duracion" name="duracion" min="1" max="999">
                </div>
              </div>
              <div>
                <label class="form-label" for="poster">Imagen</label>
                <input class="form-control" type="file" id="poster" name="poster" accept=".jpg,.jpeg,.png,.gif,.webp" required>
              </div>
              <div>
                <button class="btn btn-primary w-100" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
