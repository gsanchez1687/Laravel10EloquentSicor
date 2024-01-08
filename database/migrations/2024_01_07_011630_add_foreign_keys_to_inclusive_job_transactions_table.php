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
        Schema::table('inclusive_job_transactions', function (Blueprint $table) {
            $table->foreign(['company_id'], 'comp_transc')->references(['id'])->on('inclusive_job_companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_transactions', function (Blueprint $table) {
            $table->dropForeign('comp_transc');
        });
    }
};
