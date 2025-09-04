<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="deportesresultados.php">
        <p>Nivel de estudios:</p>
        <input type="checkbox" name="deportes[]" value="Futbol" id="futbol" required>
        <label for="futbol">Futbol</label><br>

        <input type="checkbox" name="deportes[]" value="Basket" id="basket">
        <label for="basket">Basket</label><br>

        <input type="checkbox" name="deportes[]" value="Tenis" id="tenis">
        <label for="tenis">Tenis</label><br>
        <input type="checkbox" name="deportes[]" value="Voley" id="voley">
        <label for="voley">Voley</label><br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>