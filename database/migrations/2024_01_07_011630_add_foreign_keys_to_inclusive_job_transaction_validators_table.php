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
        Schema::table('inclusive_job_transaction_validators', function (Blueprint $table) {
            $table->foreign(['transaction_id'], 'transaction_validator_fk')->references(['id'])->on('inclusive_job_transactions');
            $table->foreign(['user_id'], 'validator_transaction_fk')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_transaction_validators', function (Blueprint $table) {
            $table->dropForeign('transaction_validator_fk');
            $table->dropForeign('validator_transaction_fk');
        });
    }
};
