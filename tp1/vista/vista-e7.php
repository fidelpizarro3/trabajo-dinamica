<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simple</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="../control/contro-e7.php" method="GET">
        <label for="numeroA">Número A:</label>
        <input type="text" name="numeroA" id="numeroA" required><br><br>

        <label for="numeroB">Número B:</label>
        <input type="text" name="numeroB" id="numeroB" required><br><br>

        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
