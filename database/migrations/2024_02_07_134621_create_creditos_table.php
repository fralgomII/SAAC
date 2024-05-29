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
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_credito')->nullable();

            //Llaves foráneas
            $table->unsignedBigInteger('asociado_id')->nullable();
            $table->unsignedBigInteger('lineacredito_id')->nullable();

            $table->foreign('asociado_id')->references('id')->on('asociados')->onDelete('set null');
            $table->foreign('lineacredito_id')->references('id')->on('lineacreditos')->onDelete('set null');

            $table->decimal('interes_anual',5,2)->nullable();
            $table->decimal('interes_credito',5,2)->nullable();
            $table->integer('seguro_deudor')->nullable();
            $table->integer('seguro_credito')->nullable();
            $table->string('plazo_credito',3)->nullable();
            $table->integer('valor_credito')->nullable();
            $table->decimal('valor_cuota',12,2)->nullable();
            $table->string('estado',20)->default('Solicitado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creditos');
    }
};