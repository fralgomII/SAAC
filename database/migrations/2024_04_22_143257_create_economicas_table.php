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
        Schema::create('economicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asociado_id')->constrained();
            $table->string('actividad_economica',20)->nullable();
            $table->string('declara_renta',2)->nullable();
            $table->string('codigo_ciiu',5)->nullable();
            $table->string('descripcion_ciiu',50)->nullable();
            $table->string('ocupacion',50)->nullable();
            $table->string('cargo',50)->nullable();
            $table->string('empresa',50)->nullable();
            $table->string('tipo_empresa',10)->nullable();
            $table->string('tipo_contrato',30)->nullable();
            $table->string('tiempo_actividad',10)->nullable();
            $table->string('jornada',10)->nullable();
            $table->string('direccion_empresa',100)->nullable();
            $table->string('ciudad_empresa',6)->nullable();
            $table->string('dpto_empresa',2)->nullable();
            $table->string('telefono_empresa',30)->nullable();
            $table->string('extension',10)->nullable();
            $table->string('actividad_secundaria',50)->nullable();
            $table->string('direccion_secundaria',100)->nullable();
            $table->string('ciudad_secundaria',6)->nullable();
            $table->string('dpto_secundaria',2)->nullable();
            $table->string('telefono_secundaria',30)->nullable();
            $table->string('descripcion_secundaria',255)->nullable();
            $table->string('pensionado',2)->nullable();
            $table->string('entidad_pension',20)->nullable();
            $table->integer('valor_pension')->nullable();
            $table->date('fecha_pension')->nullable();
            $table->string('resolucion_pension',20)->nullable();
            $table->date('fecha_corte')->nullable();
            $table->integer('ingresos_anuales')->nullable();
            $table->integer('ingresos_mensuales')->nullable();
            $table->integer('egresos_anuales')->nullable();
            $table->integer('egresos_mensuales')->nullable();
            $table->integer('total_activos')->nullable();
            $table->integer('total_pasivos')->nullable();
            $table->integer('otros_ingresos')->nullable();
            $table->string('descripcion_ingresos',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('economicas');
    }
};
