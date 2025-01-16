<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Prueba</h1>
    <form action="/procesar_datos" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad">
        <br><br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>