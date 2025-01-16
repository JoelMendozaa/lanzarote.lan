<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Libro</title>
    <style>
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Libro</h1>
        <form action="{{ url('/store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre del Libro</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" required>

            <label for="editorial">Editorial</label>
            <input type="text" id="editorial" name="editorial" required>

            <label for="anioPublicacion">Año de Publicación</label>
            <input type="text" id="anioPublicacion" name="anioPublicacion" required>

            <label for="genero">Género</label>
            <input type="text" id="genero" name="genero" required>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <div class="form-actions">
                <button type="submit">Crear Libro</button>
                <a href="{{ url('/') }}" class="btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
