@extends('libros.layout')

@section('title', 'Ver Libro: ' . $libro->nombre)

@section('content')
    <div class="container">
        <h1>Detalles del Libro: {{ $libro->nombre }}</h1>

        <div class="book-details">
            <p><strong>Autor:</strong> {{ $libro->autor }}</p>
            <p><strong>Editorial:</strong> {{ isset($EDITORIALES[$libro->editorial]) ? $EDITORIALES[$libro->editorial] : 'Desconocida' }}</p>
            <p><strong>Año de Publicación:</strong> {{ $libro->anioPublicacion }}</p>
            <p><strong>Género:</strong> {{ isset($GENEROS[$libro->genero]) ? $GENEROS[$libro->genero] : 'Desconocido' }}</p>
            <p><strong>Descripción:</strong> {{ $libro->descripcion }}</p>
        </div>

        <div class="btn-container">
            <a href="{{ url('/libros/edit', $libro->id) }}" class="btn">Editar Libro</a>
            <a href="{{ route('libros.index') }}" class="btn">Volver al Listado</a>
        </div>
    </div>
@endsection
