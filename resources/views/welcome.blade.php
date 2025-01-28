@extends('libros.layout')

@section('title', 'Lanzarote')

@section('content')
 
    <!-- HEADER -->
    <header>
        <h1>Bienvenido a Lanzarote</h1>
        <p>Descubre la isla de los volcanes, las playas y la cultura canaria</p>

        <!-- Enlaces de navegación -->
        <nav>
            <a href="/libros">Libros</a>
            <a href="/playas">Playas</a>
        </nav>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <h2>La isla volcánica de Lanzarote</h2>
            <p>Explora los paisajes únicos de Lanzarote, una isla en el corazón del Archipiélago Canario. Conoce su geografía volcánica, hermosas playas y la rica herencia cultural que hace que cada visita sea especial. ¡Un destino ideal para los amantes de la naturaleza y el sol!</p>
        </div>
        <img src="https://images.unsplash.com/photo-1594401708939-49f49fdf596a?q=80&w=1950&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Imagen de Lanzarote" class="hero-image">
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 Lanzarote Turismo. Todos los derechos reservados.</p>
    </footer>

