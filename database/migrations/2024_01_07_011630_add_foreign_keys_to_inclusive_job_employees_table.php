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
        Schema::table('inclusive_job_employees', function (Blueprint $table) {
            $table->foreign(['company_id'], 'comp_empl')->references(['id'])->on('inclusive_job_companies');
            $table->foreign(['nacionality_id'], 'natio_empl_fk')->references(['id'])->on('nacionalities');
            $table->foreign(['expedition_place_id'], 'divi_employ_fk')->references(['id'])->on('divipolas');
            $table->foreign(['type_contract_id'], 'type_emplo_fk')->references(['id'])->on('type_contracts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_employees', function (Blueprint $table) {
            $table->dropForeign('comp_empl');
            $table->dropForeign('natio_empl_fk');
            $table->dropForeign('divi_employ_fk');
            $table->dropForeign('type_emplo_fk');
        });
    }
};
