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
        Schema::create('asociado_aportes', function (Blueprint $table) {
            $table->id();
            //Llaves foráneas
            $table->unsignedBigInteger('asociado_id')->nullable();
            $table->unsignedBigInteger('lineaaporte_id')->nullable();
            $table->integer('valor_aporte')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asociado_aportes');
    }
};
