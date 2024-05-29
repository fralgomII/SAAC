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
        Schema::create('conocimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asociado_id')->constrained();
            $table->string('politica_expuesta',2)->nullable();
            $table->string('indique_politica_expuesta',50)->nullable();
            $table->string('representa_ong',2)->nullable();
            $table->string('indique_representa_ong',50)->nullable();
            $table->string('persona_publica',2)->nullable();
            $table->string('indique_persona_publica',50)->nullable();
            $table->string('movimiento_politico',2)->nullable();
            $table->string('indique_movimiento_politico',50)->nullable();
            $table->string('administra_publico',2)->nullable();
            $table->string('indique_administra_publico',50)->nullable();
            $table->string('tributa_otro_pais',2)->nullable();
            $table->string('indique_tributa_otro_pais',50)->nullable();
            $table->string('vinculo_pep',2)->nullable();
            $table->string('indique_vinculo_pep',50)->nullable();
            $table->string('vinculo1',20)->nullable();
            $table->string('nombre_vinculo1',50)->nullable();
            $table->string('tipodoc_vinculo1',5)->nullable();
            $table->string('numero_vinculo1',20)->nullable();
            $table->string('nacionalidad_vinculo1',20)->nullable();
            $table->string('entidad_vinculo1',20)->nullable();
            $table->string('cargo_vinculo1',20)->nullable();
            $table->date('fecha_vinculo1',20)->nullable();
            $table->string('vinculo2',20)->nullable();
            $table->string('nombre_vinculo2',50)->nullable();
            $table->string('tipodoc_vinculo2',5)->nullable();
            $table->string('numero_vinculo2',20)->nullable();
            $table->string('nacionalidad_vinculo2',20)->nullable();
            $table->string('entidad_vinculo2',20)->nullable();
            $table->string('cargo_vinculo2',20)->nullable();
            $table->date('fecha_vinculo2',20)->nullable();
            $table->string('operaciones_extranjeras',2)->nullable();
            $table->string('tipo_operaciones',50)->nullable();
            $table->string('cuentas_extranjeras',2)->nullable();
            $table->string('numero_cuenta',30)->nullable();
            $table->string('entidad_cuenta',50)->nullable();
            $table->string('moneda',30)->nullable();
            $table->integer('monto')->nullable();
            $table->string('ciudad_operaciones',30)->nullable();
            $table->string('pais',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conocimientos');
    }
};
