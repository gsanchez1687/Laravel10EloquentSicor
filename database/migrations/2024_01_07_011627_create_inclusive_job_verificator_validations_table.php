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
        Schema::create('inclusive_job_verificator_validations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transaction_id')->index('verificator_vali_fk1');
            $table->unsignedBigInteger('subfield_id')->index('verificator_vali_fk2');
            $table->unsignedInteger('user_id')->index('verificator_vali_fk3');
            $table->string('observation', 500)->nullable();
            $table->enum('status', ['CUMPLE', 'NO CUMPLE', 'SUBSANAR', 'SUBSANADO']);
            $table->timestamps();
            $table->string('level', 45)->nullable();
            $table->boolean('is_interventor')->nullable()->default(false);
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
        Schema::dropIfExists('inclusive_job_verificator_validations');
    }
};
