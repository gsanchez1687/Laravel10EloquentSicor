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
        Schema::create('inclusive_job_transaction_fingering_validations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fingering_id')->index('transaction_fingering_validation_fk');
            $table->unsignedInteger('user_id')->index('transaction_fingering_validation_fk2');
            $table->string('value', 191)->nullable();
            $table->timestamps();
            $table->integer('transaction_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_transaction_fingering_validations');
    }
};
