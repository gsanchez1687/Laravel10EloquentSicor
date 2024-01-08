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
        Schema::create('inclusive_job_transaction_verification_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('field_id')->index('subfield_verificator');
            $table->json('fields_to_complement');
            $table->string('name', 191);
            $table->string('label', 191);
            $table->string('is_company', 191)->default('1');
            $table->integer('order')->default(0);
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
        Schema::dropIfExists('inclusive_job_transaction_verification_fields');
    }
};
