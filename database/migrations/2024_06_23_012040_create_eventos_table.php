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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dominio_id')
                ->nullable()
                ->references('id')
                ->on('dominios');
            $table->foreignId('solicitud_id')
                ->nullable()
                ->references('id')
                ->on('solicitudes');
            $table->foreignId('evento_tipo_id')
                ->nullable()
                ->references('id')
                ->on('eventos_tipos');
            $table->foreignId('refrigerio_id')
                ->nullable()
                ->references('id')
                ->on('refrigerios');
            $table->dateTime('refrigerio_hora');
            $table->unsignedInteger('num_participantes')          ->nullable();          
            $table->boolean('req_datashow');
            $table->boolean('req_portatil');
            $table->boolean('req_microfono');
            $table->text('req_otros');
            $table->text('participantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
