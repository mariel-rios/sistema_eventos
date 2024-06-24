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
        Schema::create('equipos_reservas', function (Blueprint $table) {
    		$table->id();
            $table->foreignId('equipo_id')
                ->nullable()
                ->references('id')
                ->on('equipos');
            $table->foreignId('solicitud_id')
                ->nullable()
                ->references('id')
                ->on('solicitudes');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos_reservas');
    }
};
