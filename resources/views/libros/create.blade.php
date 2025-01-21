@extends('libros.layout')

@section('title', 'crear libro')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Libro</h1>
        <form action="{{ url('/libros') }}" method="POST">
            @csrf
            <label for="nombre">Nombre del Libro</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" required>

            <label for="editorial">Editorial</label>
            <input type="text" id="editorial" name="editorial" required>

            <label for="anioPublicacion">Año de Publicación</label>
            <input type="number" id="anioPublicacion" name="anioPublicacion" required>

            <label for="genero">Género</label>
            <select id="genero" name="genero" required>
                <option value="">Selecciona un género...</option>
                @foreach (['Ficción', 'Aventura', 'Drama', 'Romance', 'Terror', 'Biografia'] as $genero)
                    <option value="{{$genero}}">{{$genero}}</option>
                @endforeach
            </select>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection