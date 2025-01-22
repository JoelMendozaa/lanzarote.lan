<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // En esta sección hemos combinado las dos migraciones
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('editorial');
            $table->string('autor');

            // Se ha movido la declaración de las columnas 'anioPublicacion' y 'genero' aquí
            // antes estaban en la segunda migración como parte de Schema::table()
            $table->integer('anioPublicacion');  // Esta es la columna que antes agregabas en la segunda migración
            $table->char('genero', 2);           // Esta también

            $table->string('descripcion');

            /*$table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();*/
            
            // Auditoría
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar la tabla 'libros' si es necesario revertir la migración
        Schema::dropIfExists('libros');
    }
};
