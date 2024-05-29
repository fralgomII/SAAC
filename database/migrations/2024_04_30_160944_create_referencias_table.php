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
        Schema::create('referencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asociado_id')->constrained();
            $table->string('referenciap_nombre1',50)->nullable();
            $table->string('referenciap_relacion1',50)->nullable();
            $table->string('referenciap_direccion1',100)->nullable();
            $table->string('referenciap_ciudad1',50)->nullable();
            $table->string('referenciap_telefono1',50)->nullable();
            $table->string('referenciap_nombre2',50)->nullable();
            $table->string('referenciap_relacion2',50)->nullable();
            $table->string('referenciap_direccion2',100)->nullable();
            $table->string('referenciap_ciudad2',50)->nullable();
            $table->string('referenciap_telefono2',50)->nullable();
            $table->string('referenciac_entidad1',50)->nullable();
            $table->string('referenciac_tipo1',50)->nullable();
            $table->string('referenciac_producto1',50)->nullable();
            $table->string('referenciac_ciudad1',50)->nullable();
            $table->string('referenciac_telefono1',50)->nullable();
            $table->string('referenciac_entidad2',50)->nullable();
            $table->string('referenciac_tipo2',50)->nullable();
            $table->string('referenciac_producto2',50)->nullable();
            $table->string('referenciac_ciudad2',50)->nullable();
            $table->string('referenciac_telefono2',50)->nullable();
            $table->string('beneficiario_nombre1',50)->nullable();
            $table->string('beneficiario_documento1',20)->nullable();
            $table->string('beneficiario_porcentaje1',3)->nullable();
            $table->date('beneficiario_nacimiento1')->nullable();
            $table->string('beneficiario_parentesco1',20)->nullable();
            $table->string('beneficiario_nombre2',50)->nullable();
            $table->string('beneficiario_documento2',20)->nullable();
            $table->string('beneficiario_porcentaje2',3)->nullable();
            $table->date('beneficiario_nacimiento2')->nullable();
            $table->string('beneficiario_parentesco2',20)->nullable();
            $table->string('beneficiario_nombre3',50)->nullable();
            $table->string('beneficiario_documento3',20)->nullable();
            $table->string('beneficiario_porcentaje3',3)->nullable();
            $table->date('beneficiario_nacimiento3')->nullable();
            $table->string('beneficiario_parentesco3',20)->nullable();
            $table->string('referido_por',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referencias');
    }
};
