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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->string('name_second', 191)->nullable();
            $table->string('last_name', 191);
            $table->string('last_name_second', 191)->nullable();
            $table->string('email', 191)->unique();
            $table->string('username', 15)->unique();
            $table->integer('type')->nullable();
            $table->string('identification', 191);
            $table->string('password', 191);
            $table->string('profession', 191)->nullable();
            $table->string('office', 191)->nullable();
            $table->unsignedInteger('country_id')->nullable()->index('users_country_id_foreign');
            $table->unsignedInteger('department_id')->nullable()->index('users_department_id_foreign');
            $table->unsignedInteger('city_id')->nullable()->index('users_city_id_foreign');
            $table->string('addres', 191)->nullable();
            $table->string('photo', 191)->nullable()->default('avatar.png');
            $table->unsignedInteger('genre_id')->nullable()->index('users_genre_id_foreign');
            $table->string('phone', 191)->nullable();
            $table->date('birth')->nullable();
            $table->unsignedInteger('state_id')->nullable()->index('users_state_id_foreign');
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedInteger('manager_types_id')->nullable()->index('users_manager_types_id_foreign');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('id_user')->nullable();
            $table->integer('city_of_birth_id')->nullable();
            $table->integer('department_of_birth_id')->nullable();
            $table->string('otherPhone', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
