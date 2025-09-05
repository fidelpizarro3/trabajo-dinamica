<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../control/contro-e5.php">
                <!-- Nivel de estudios -->
        <p>Nivel de estudios:</p>
        <input type="radio" name="nivelEstudios" value="1" id="sinEstudios" required>
        <label for="sinEstudios">No tiene estudios</label><br>

        <input type="radio" name="nivelEstudios" value="2" id="primarios">
        <label for="primarios">Estudios primarios</label><br>

        <input type="radio" name="nivelEstudios" value="3" id="secundarios">
        <label for="secundarios">Estudios secundarios</label><br><br>

        <p>Sexo:</p>
        <input type="radio" name="sexo" value="masculino" id="masculino" required>
        <label for="masculino">Masculino</label><br>

        <input type="radio" name="sexo" value="femenino" id="femenino">
        <label for="femenino">Femenino</label><br>

        <input type="radio" name="sexo" value="otro" id="otro">
        <label for="otro">Otro</label><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>