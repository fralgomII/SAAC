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
        Schema::create('movimiento_creditos', function (Blueprint $table) {
            $table->id();
            //Llaves foráneas
            $table->unsignedBigInteger('credito_id')->nullable();
            $table->foreign('credito_id')->references('id')->on('creditos')->onDelete('set null');
            
            $table->string('cuota',3)->nullable();
            $table->decimal('interes',12,2)->nullable();
            $table->decimal('capital',12,2)->nullable();
            $table->integer('seguro_deudor')->nullable();
            $table->integer('seguro_credito')->nullable();
            $table->decimal('valor_cuota',12,2)->nullable();
            $table->decimal('valor_abono',12,2)->nullable();
            $table->decimal('valor_saldo',12,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_creditos');
    }
};
