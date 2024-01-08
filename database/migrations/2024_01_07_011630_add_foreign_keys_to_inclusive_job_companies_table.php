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
        Schema::table('inclusive_job_companies', function (Blueprint $table) {
            $table->foreign(['expedition_place_legal_representative_id'], 'edlr_divipola')->references(['id'])->on('divipolas');
            $table->foreign(['user_id'])->references(['id'])->on('users');
            $table->foreign(['type_account_bank_legal_representative_id'], 'tabl_comp_fk')->references(['id'])->on('type_bank_accounts');
            $table->foreign(['expedition_place_register_id'], 'epr_divipola')->references(['id'])->on('divipolas');
            $table->foreign(['bank_id'], 'tabl_b_fk')->references(['id'])->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inclusive_job_companies', function (Blueprint $table) {
            $table->dropForeign('edlr_divipola');
            $table->dropForeign('inclusive_job_companies_user_id_foreign');
            $table->dropForeign('tabl_comp_fk');
            $table->dropForeign('epr_divipola');
            $table->dropForeign('tabl_b_fk');
        });
    }
};
