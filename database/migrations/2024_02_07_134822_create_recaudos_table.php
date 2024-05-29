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
        Schema::create('recaudos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_recaudo')->nullable();
             //Llaves foráneas
            $table->unsignedBigInteger('asociado_id')->nullable();
            $table->foreign('asociado_id')->references('id')->on('asociados')->onDelete('set null');
            
            $table->decimal('valor_recaudo',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recaudos');
    }
};