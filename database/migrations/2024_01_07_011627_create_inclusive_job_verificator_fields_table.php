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
        Schema::create('inclusive_job_verificator_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->enum('type', ['company', 'employee']);
            $table->timestamps();
            $table->boolean('enabled')->nullable()->default(true);
            $table->string('label', 160)->nullable();
            $table->integer('order')->nullable();
            $table->boolean('can_validate')->nullable()->default(true);
            $table->boolean('is_vulnerability')->nullable()->default(false);
            $table->string('vulnerability', 250)->nullable();
            $table->text('url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_verificator_fields');
    }
};
