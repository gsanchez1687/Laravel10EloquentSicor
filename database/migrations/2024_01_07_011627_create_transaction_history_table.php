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
        Schema::create('transaction_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('transaction_id')->index('transaction_history_transaction_id_IDX');
            $table->string('new_status')->index('transaction_history_new_status_IDX');
            $table->string('observation', 500)->nullable();
            $table->dateTime('updated_at');
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_history');
    }
};
