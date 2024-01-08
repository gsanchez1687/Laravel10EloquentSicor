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
        Schema::create('inclusive_job_fingering_validations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['date', 'text', 'select']);
            $table->string('label', 191);
            $table->string('name', 191);
            $table->unsignedBigInteger('field_id')->index('fingering_validations_fk');
            $table->timestamps();
            $table->integer('order')->nullable();
            $table->string('data_select')->nullable();
            $table->boolean('required')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_fingering_validations');
    }
};
