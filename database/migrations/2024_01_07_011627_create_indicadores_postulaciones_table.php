<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores_postulaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('empresas_verificadas_validadas');
            $table->integer('empresas_registradas');
            $table->integer('empresas_verificadas_dentro_10_dias_habiles');
            $table->decimal('promedio_dias_habiles_empresas');
            $table->integer('empleados_verificados_validados');
            $table->integer('empleados_registrados');
            $table->integer('empleados_verificados_dentro_10_dias_habiles');
            $table->decimal('promedio_dias_habiles_empleados');
            $table->integer('empresas_subsanaron');
            $table->integer('cantidad_subsanaciones_empresas');
            $table->integer('empresas_aprobadas');
            $table->integer('empresas_aprobadas_subsanaron');
            $table->integer('dias_empresas_aprobadas_subsanacion');
            $table->integer('empleados_subsanaron');
            $table->integer('cantidad_subsanaciones_empleados');
            $table->integer('empresas_subsanaron_empleado');
            $table->integer('empleados_aprobados');
            $table->integer('empleados_aprobados_subsanaron');
            $table->integer('dias_empleados_subsanacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores_postulaciones');
    }
};
