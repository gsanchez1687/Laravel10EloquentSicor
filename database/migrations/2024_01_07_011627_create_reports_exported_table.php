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
        Schema::create('reports_exported', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url', 191)->nullable();
            $table->string('status', 191);
            $table->string('name', 191);
            $table->bigInteger('job_id');
            $table->unsignedInteger('id_user')->index('reports_exported_id_user_foreign');
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
        Schema::dropIfExists('reports_exported');
    }
};
