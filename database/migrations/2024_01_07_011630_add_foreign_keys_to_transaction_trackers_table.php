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
        Schema::table('transaction_trackers', function (Blueprint $table) {
            $table->foreign(['transaction_id'], 'transaction_trackers_ibfk_1')->references(['id'])->on('inclusive_job_transactions');
            $table->foreign(['user_id'], 'transaction_trackers_ibfk_2')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_trackers', function (Blueprint $table) {
            $table->dropForeign('transaction_trackers_ibfk_1');
            $table->dropForeign('transaction_trackers_ibfk_2');
        });
    }
};
