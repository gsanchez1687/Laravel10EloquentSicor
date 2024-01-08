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
        Schema::create('inclusive_job_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id')->nullable()->index('inclusive_job_transactions_employee_id_idx');
            $table->unsignedBigInteger('company_id')->nullable()->index('inclusive_job_transactions_company_id_idx');
            $table->boolean('punished')->default(false);
            $table->string('status', 191)->default('En verificación 1')->index('inclusive_job_transactions_status_idx');
            $table->integer('time_transaction')->nullable()->default(0);
            $table->integer('time_rectification')->nullable()->default(0);
            $table->integer('time_interventoria')->nullable()->default(0);
            $table->string('verificators');
            $table->mediumText('correct_observation')->nullable();
            $table->string('inputs_to_correct')->default('');
            $table->integer('corrects')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->index(['company_id'], 'comp_transc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_transactions');
    }
};
