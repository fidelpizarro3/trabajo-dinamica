<?php
$usuarios = [
    ["usuario" => "juan",  "clave" => "1234abcd"],
    ["usuario" => "maria", "clave" => "abcd1234"],
    ["usuario" => "admin", "clave" => "admin1234"]
];

$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada   = $_POST['clave'] ?? '';

$encontrado = false;
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuarioIngresado && $u['clave'] === $claveIngresada) {
    $encontrado = true; break;
    }
}

if ($encontrado) {
    echo '<div class="alert alert-success" role="alert">Bienvenido, ' . htmlspecialchars($usuarioIngresado) . ' 👋</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Error: Usuario o contraseña incorrectos</div>';
    echo '<a href="login.html">Volver al login</a>';
}
?>
