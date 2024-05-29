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
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asociado_id')->constrained();
            $table->string('tipo_primer_bien',20)->nullable();
            $table->string('direccion_primer_bien',100)->nullable();
            $table->integer('valor_primer_bien')->nullable();
            $table->string('hipoteca_primer_bien',50)->nullable();
            $table->integer('saldo_primer_bien')->nullable();
            $table->string('tipo_segundo_bien',20)->nullable();
            $table->string('direccion_segundo_bien',100)->nullable();
            $table->integer('valor_segundo_bien')->nullable();
            $table->string('hipoteca_segundo_bien',50)->nullable();
            $table->integer('saldo_segundo_bien')->nullable();
            $table->string('tipo_primer_vehiculo',20)->nullable();
            $table->integer('valor_primer_vehiculo')->nullable();
            $table->string('marca_primer_vehiculo',20)->nullable();
            $table->string('placa_primer_vehiculo',10)->nullable();
            $table->integer('saldo_primer_vehiculo')->nullable();
            $table->string('prenda_primer_vehiculo',50)->nullable();
            $table->string('tipo_segundo_vehiculo',20)->nullable();
            $table->integer('valor_segundo_vehiculo')->nullable();
            $table->string('marca_segundo_vehiculo',20)->nullable();
            $table->string('placa_segundo_vehiculo',10)->nullable();
            $table->integer('saldo_segundo_vehiculo')->nullable();
            $table->string('prenda_segundo_vehiculo',50)->nullable();
            $table->string('descripcion_primer_otrobien',255)->nullable();
            $table->integer('valor_primer_otrobien')->nullable();
            $table->integer('saldo_primer_otrobien')->nullable();
            $table->string('prenda_primer_otrobien',50)->nullable();
            $table->string('descripcion_segundo_otrobien',255)->nullable();
            $table->integer('valor_segundo_otrobien')->nullable();
            $table->integer('saldo_segundo_otrobien')->nullable();
            $table->string('prenda_segundo_otrobien',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activos');
    }
};
