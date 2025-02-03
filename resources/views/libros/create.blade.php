@extends('libros.layout')

@section('title', 'Crear Libro')

@section('content')
    <div class="container">
        <h1 class="form-title">Crear Nuevo Libro</h1>
        
        <!-- Formulario de creación de libro -->
        <form action="{{ url('/libros') }}" method="POST" class="form-create">
            @csrf
            
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre del Libro</label>
                <input type="text" id="nombre" name="nombre" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" id="autor" name="autor" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="editorial" class="form-label">Editorial</label>
                <select name="editorial" id="editorial" class="form-input" required>
                    <option value="">Selecciona una editorial...</option>
                    @foreach ($EDITORIALES as $clave_editorial => $texto_editorial)
                        <option value="{{ $clave_editorial }}">{{ $texto_editorial }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="anioPublicacion" class="form-label">Año de Publicación</label>
                <input type="number" id="anioPublicacion" name="anioPublicacion" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="genero" class="form-label">Género</label>
                <select name="genero" id="genero" class="form-input" required>
                    <option value="">Selecciona un género...</option>
                    @foreach ($GENEROS as $clave_genero => $texto_genero)
                        <option value="{{ $clave_genero }}">{{ $texto_genero }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-input" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="form-btn">Guardar</button>
            </div>
        </form>
    </div>
@endsection

