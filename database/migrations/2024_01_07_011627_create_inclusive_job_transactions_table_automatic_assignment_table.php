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
        Schema::create('inclusive_job_transactions_table_automatic_assignment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 15);
            $table->integer('user_id');
            $table->integer('max_company');
            $table->integer('max_employee');
            $table->dateTime('last_assigment')->nullable();
            $table->string('competent_levels', 10);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_transactions_table_automatic_assignment');
    }
};
