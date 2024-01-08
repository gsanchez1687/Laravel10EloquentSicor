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
        Schema::create('transaction_trackers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('status', ['EN CURSO', 'FINALIZADO'])->nullable();
            $table->enum('level', ['1', '2', '3', '4'])->nullable();
            $table->integer('time_spent')->nullable()->default(0);
            $table->unsignedBigInteger('transaction_id')->nullable()->index('transaction_id');
            $table->unsignedInteger('user_id')->nullable()->index('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_trackers');
    }
};
