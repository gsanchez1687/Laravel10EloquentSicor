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
        Schema::create('inclusive_job_employee_verificators', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('company_id')->index('company_id');
            $table->unsignedBigInteger('employee_id')->index('veri_empl2_fk');
            $table->unsignedInteger('user_id')->index('veri_usr2_fk');
            $table->string('level_verificator', 191);
            $table->string('status', 191);
            $table->string('observation', 191)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('field_id')->index('veri_field1_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_employee_verificators');
    }
};
