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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('objeto', 1000);
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->foreignId('salon_id')
                ->nullable()
                ->references('id')
                ->on('salones');
            $table->foreignId('estado_id')
                ->nullable()
                ->references('id')
                ->on('estados'); 
            $table->unsignedBigInteger('registrado_por')
                ->nullable(); 
            $table->unsignedBigInteger('aprobado_por')
                ->nullable();
            $table->unsignedBigInteger('confirmado_por')
                ->nullable(); 
            $table->unsignedBigInteger('responsable')
                ->nullable();           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
