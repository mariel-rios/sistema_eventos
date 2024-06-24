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
        Schema::create('detalles_dominios', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('dominio_id')
                ->nullable()
                ->references('id')
                ->on('dominios');
            $table->foreignId('estado_id')
                ->nullable()
                ->references('id')
                ->on('estados'); 
            $table->string('nombre', 250)
                ->nullable();
            $table->text('descripcion')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_dominios');
    }
};
