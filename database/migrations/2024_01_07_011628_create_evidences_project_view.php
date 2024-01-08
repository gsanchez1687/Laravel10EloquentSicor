<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `evidences_project` AS select 1 AS `IdEvidence`,1 AS `path`,1 AS `FechaIngreso`,1 AS `NameEvidencia`,1 AS `id`,1 AS `NameEstado`,1 AS `IdTarea`,1 AS `NameTarea`,1 AS `NameProductdetails`,1 AS `IdProductos`,1 AS `NameProductos`,1 AS `IdActividad`,1 AS `parent_id`,1 AS `NameActividad`,1 AS `IdCity`,1 AS `NameCity`,1 AS `IdDepartment`,1 AS `NameDepartment`,1 AS `IdPhases`,1 AS `NameComplet``NameComplet`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `evidences_project`");
    }
};
