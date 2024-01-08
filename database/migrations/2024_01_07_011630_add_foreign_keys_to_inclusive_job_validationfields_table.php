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
        Schema::table('inclusive_job_validationfields', function (Blueprint $table) {
            $table->foreign(['field_id'], 'validationfields_fk1')->references(['id'])->on('inclusive_job_verificator_fields');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_validationfields', function (Blueprint $table) {
            $table->dropForeign('validationfields_fk1');
        });
    }
};
