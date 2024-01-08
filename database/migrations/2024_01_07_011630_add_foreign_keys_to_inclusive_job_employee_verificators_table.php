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
        Schema::table('inclusive_job_employee_verificators', function (Blueprint $table) {
            $table->foreign(['company_id'], 'inclusive_job_employee_verificators_ibfk_1')->references(['id'])->on('inclusive_job_companies');
            $table->foreign(['field_id'], 'veri_field1_fk')->references(['id'])->on('inclusive_job_verificator_fields')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'veri_empl2_fk')->references(['id'])->on('inclusive_job_employees');
            $table->foreign(['user_id'], 'veri_usr2_fk')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_employee_verificators', function (Blueprint $table) {
            $table->dropForeign('inclusive_job_employee_verificators_ibfk_1');
            $table->dropForeign('veri_field1_fk');
            $table->dropForeign('veri_empl2_fk');
            $table->dropForeign('veri_usr2_fk');
        });
    }
};
