<?php

$archivo = $_FILES['miArchivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
$tamano = $archivo['size'];
$tmp = $archivo['tmp_name'];
$error = $archivo['error'];

$extensiones_validas = ['application/msword', 'application/pdf'];
$tamano_maximo = 2 * 1024 * 1024; // 2 MB
$directorio_destino = "uploads/";

// Verificar errores
if ($error > 0) {
    echo " Error al subir el archivo. Código de error: $error";
    exit;
}

// Verificar tipo
if (!in_array($tipo, $extensiones_validas)) {
    echo "❌ Tipo de archivo no válido. Solo se permiten .doc y .pdf";
    exit;
}

// Verificar tamaño
if ($tamano > $tamano_maximo) {
    echo "❌ El archivo excede el tamaño máximo permitido (2MB)";
    exit;
}

// Crear carpeta si no existe
if (!is_dir($directorio_destino)) {
    mkdir($directorio_destino, 0777, true);
}

// Mover archivo
$ruta_destino = $directorio_destino . basename($nombre);

if (move_uploaded_file($tmp, $ruta_destino)) {
    echo " Archivo cargado exitosamente.<br>";
    echo " <a href='$ruta_destino' target='_blank'>Ver archivo</a>";
} else {
    echo " Error al guardar el archivo en el servidor.";
}
?>
