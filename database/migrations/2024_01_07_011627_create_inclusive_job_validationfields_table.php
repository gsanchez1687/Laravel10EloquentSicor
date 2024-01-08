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
        Schema::create('inclusive_job_validationfields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('field_id')->index('validationfields_fk1');
            $table->string('document', 191);
            $table->timestamps();
            $table->string('level', 45)->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->boolean('is_interventor')->nullable()->default(false);
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_validationfields');
    }
};
