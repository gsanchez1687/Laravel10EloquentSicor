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
        Schema::table('inclusive_job_verificator_validations', function (Blueprint $table) {
            $table->foreign(['transaction_id'], 'verificator_vali_fk1')->references(['id'])->on('inclusive_job_transactions');
            $table->foreign(['user_id'], 'verificator_vali_fk3')->references(['id'])->on('users');
            $table->foreign(['subfield_id'], 'verificator_vali_fk2')->references(['id'])->on('inclusive_job_transaction_verification_fields');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_verificator_validations', function (Blueprint $table) {
            $table->dropForeign('verificator_vali_fk1');
            $table->dropForeign('verificator_vali_fk3');
            $table->dropForeign('verificator_vali_fk2');
        });
    }
};
