<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("libros")->truncate();

DB::table('libros')->insert([
    ['nombre' => 'Cien años de soledad', 'autor' => 'Gabriel García Márquez', 'editorial' => 'Sudamericana', 'anioPublicacion' => 1967, 'genero' => 'Ficción', 'descripcion' => 'Una novela que narra la historia de la familia Buendía.'],
    ['nombre' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes', 'editorial' => 'Francisco de Robles', 'anioPublicacion' => 1605, 'genero' => 'Ficción', 'descripcion' => 'Un caballero con una visión única del mundo.'],
    ['nombre' => '1984', 'autor' => 'George Orwell', 'editorial' => 'Secker & Warburg', 'anioPublicacion' => 1949, 'genero' => 'Ciencia Ficción', 'descripcion' => 'Distopía sobre un régimen totalitario.'],
    ['nombre' => 'Orgullo y prejuicio', 'autor' => 'Jane Austen', 'editorial' => 'T. Egerton', 'anioPublicacion' => 1813, 'genero' => 'Ficción', 'descripcion' => 'Una historia de amor y prejuicio.'],
    ['nombre' => 'El principito', 'autor' => 'Antoine de Saint-Exupéry', 'editorial' => 'Reynal & Hitchcock', 'anioPublicacion' => 1943, 'genero' => 'Ficción', 'descripcion' => 'Un cuento poético con profundas reflexiones.'],
    ['nombre' => 'La metamorfosis', 'autor' => 'Franz Kafka', 'editorial' => 'Kurt Wolff Verlag', 'anioPublicacion' => 1915, 'genero' => 'Ficción', 'descripcion' => 'La historia de un hombre convertido en insecto.'],
    ['nombre' => 'Fahrenheit 451', 'autor' => 'Ray Bradbury', 'editorial' => 'Ballantine Books', 'anioPublicacion' => 1953, 'genero' => 'Ciencia Ficción', 'descripcion' => 'Un futuro en el que los libros están prohibidos.'],
    ['nombre' => 'Crimen y castigo', 'autor' => 'Fiódor Dostoyevski', 'editorial' => 'The Russian Messenger', 'anioPublicacion' => 1866, 'genero' => 'Ficción', 'descripcion' => 'Un análisis psicológico de un asesinato.'],
    ['nombre' => 'La sombra del viento', 'autor' => 'Carlos Ruiz Zafón', 'editorial' => 'Planeta', 'anioPublicacion' => 2001, 'genero' => 'Ficción', 'descripcion' => 'Una novela de misterio en la Barcelona de posguerra.'],
    ['nombre' => 'El Hobbit', 'autor' => 'J.R.R. Tolkien', 'editorial' => 'George Allen & Unwin', 'anioPublicacion' => 1937, 'genero' => 'Fantasía', 'descripcion' => 'Una aventura épica en la Tierra Media.'],
    ['nombre' => 'Matar a un ruiseñor', 'autor' => 'Harper Lee', 'editorial' => 'J.B. Lippincott & Co.', 'anioPublicacion' => 1960, 'genero' => 'Ficción', 'descripcion' => 'Un juicio que expone el racismo en los Estados Unidos.'],
    ['nombre' => 'Harry Potter y la piedra filosofal', 'autor' => 'J.K. Rowling', 'editorial' => 'Bloomsbury', 'anioPublicacion' => 1997, 'genero' => 'Fantasía', 'descripcion' => 'La primera aventura del joven mago Harry Potter.'],
        ]);
    }
}
