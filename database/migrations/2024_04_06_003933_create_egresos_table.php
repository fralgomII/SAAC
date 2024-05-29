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
        Schema::create('egresos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_egreso')->nullable();
            $table->string('cedula',10)->nullable();
            $table->string('nombre',80)->nullable();
            $table->string('concepto',254)->nullable();
            $table->string('forma_pago',20)->default('Efectivo')->nullable();
            $table->decimal('valor',10,2)->nullable();
            $table->decimal('interes_rfte',5,2)->nullable();
            $table->decimal('valor_rfte',10,2)->nullable();
            $table->decimal('interes_rica',5,2)->nullable();
            $table->decimal('valor_rica',10,2)->nullable();
            $table->decimal('valor_egreso',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresos');
    }
};
