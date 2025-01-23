@extends('libros.layout')

@section('title', 'Listado de libros')

@section('content')
<div class="container">
        <h1>Listado de Libros</h1>
        <div class="btn-container">
            <a href="{{ url('/libros/create') }}" class="btn">Crear Nuevo Libro</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año Publicación</th>
                    <th>Género</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->nombre }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->editorial }}</td>
                        <td>{{ $libro->anioPublicacion }}</td>
                        <td>{{ App\Models\Libro::GENEROS[$libro->genero] }}</td>
                        <td>{{ $libro->descripcion }}</td>
                        <td class="actions">
                            <a href="{{ url('/libros/edit/' , $libro->id) }}" class="btn">Editar</a>
                            <form action="{{ route('libros.delete' , $libro->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

