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
        Schema::table('inclusive_job_transaction_fingering_validations', function (Blueprint $table) {
            $table->foreign(['fingering_id'], 'transaction_fingering_validation_fk')->references(['id'])->on('inclusive_job_fingering_validations');
            $table->foreign(['user_id'], 'transaction_fingering_validation_fk2')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_transaction_fingering_validations', function (Blueprint $table) {
            $table->dropForeign('transaction_fingering_validation_fk');
            $table->dropForeign('transaction_fingering_validation_fk2');
        });
    }
};
