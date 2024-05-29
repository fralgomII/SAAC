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
        Schema::create('asociados', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_afiliacion');
            $table->string('nombre',20);
            $table->string('primer_apellido',20);
            $table->string('segundo_apellido',20);
            $table->string('tipo_documento',5);
            $table->string('cedula',10)->unique();
            $table->date('fecha_expedicion')->nullable();
            $table->string('dpto_expedicion',2)->nullable();
            $table->string('lugar_expedicion',6)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('edad',3)->nullable();
            $table->string('dpto_nacimiento',2)->nullable();
            $table->string('lugar_nacimiento',6)->nullable();
            $table->string('nacionalidad',20)->nullable();
            $table->string('cedula_representante',10)->nullable();
            $table->string('nombre_representante',40)->nullable();
            $table->integer('edad_representante')->length(3)->nullable();
            $table->string('genero',11)->nullable();
            $table->string('estado_civil',15)->nullable();
            $table->integer('personas_adultos')->length(1)->nullable();
            $table->integer('personas_menores')->length(1)->nullable();
            $table->string('cabeza_familia',2)->nullable();
            $table->string('tipo_vivienda',10)->nullable();
            $table->integer('estrato')->length(1)->nullable();
            $table->string('dpto',2)->nullable();
            $table->string('ciudad',6)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('celular',20)->nullable();
            $table->string('email',80)->unique()->nullable();
            $table->string('nivel_educativo',15)->nullable();
            $table->string('profesion',30)->nullable();
            $table->string('idiomas',30)->nullable();
            $table->string('hobbies',30)->nullable();
            $table->string('autoriza_residencia',2)->nullable();
            $table->string('autoriza_trabajo',2)->nullable();
            $table->string('autoriza_familiar',2)->nullable();
            $table->string('autoriza_email',2)->nullable();
            $table->string('autoriza_telefono',2)->nullable();
            $table->string('autoriza_datos',2)->nullable();
            $table->string('estado',20)->default('Activo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asociados');
    }
};