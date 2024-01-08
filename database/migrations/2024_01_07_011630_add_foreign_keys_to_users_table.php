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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['city_id'])->references(['id'])->on('cities');
            $table->foreign(['department_id'])->references(['id'])->on('departments');
            $table->foreign(['manager_types_id'])->references(['id'])->on('manager_types');
            $table->foreign(['country_id'])->references(['id'])->on('countries');
            $table->foreign(['genre_id'])->references(['id'])->on('genres');
            $table->foreign(['state_id'])->references(['id'])->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_city_id_foreign');
            $table->dropForeign('users_department_id_foreign');
            $table->dropForeign('users_manager_types_id_foreign');
            $table->dropForeign('users_country_id_foreign');
            $table->dropForeign('users_genre_id_foreign');
            $table->dropForeign('users_state_id_foreign');
        });
    }
};
