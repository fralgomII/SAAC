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
        Schema::create('lineacreditos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',80)->nullable();
            $table->string('plazo',3)->nullable();
            $table->integer('valor')->nullable();
            $table->decimal('interes_anual',5,2)->nullable();
            $table->decimal('interes',5,2)->nullable();
            $table->integer('seguro_vida')->nullable();
            $table->integer('seguro_credito')->nullable();
            $table->string('estado',20)->default('Activo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lineacreditos');
    }
};