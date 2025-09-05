<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultadoForm.php" method="GET">
            <label for="edad">Ingrese su edad</label>
            <input type="number" name="edad" id="edad" required><br><br>
            <label for="tipoCliente">Usted es Estudiante?</label>
            <select name="tipocliente" id="tipocliente">
                <option value="1">Sí</option>
                <option value="2">No</option>
            </select>

            <input type="submit" value="Enviar">
            <input type="reset" value="limpiar">
        </form>
</body>
</html>