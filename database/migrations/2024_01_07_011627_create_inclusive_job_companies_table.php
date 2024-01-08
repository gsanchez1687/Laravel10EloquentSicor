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
        Schema::create('inclusive_job_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->index('inclusive_job_companies_user_id_foreign');
            $table->string('nit', 191)->unique('inclusive_job_companies_UN');
            $table->string('business_name', 191);
            $table->string('check_digit', 191);
            $table->timestamps();
            $table->string('size_company', 191)->nullable();
            $table->string('number_of_employees', 191)->nullable();
            $table->string('ciiu_code', 191)->nullable();
            $table->string('company_location', 191)->nullable();
            $table->string('primary_residence', 191)->nullable();
            $table->string('location_address', 191)->nullable();
            $table->string('neighborhood', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('first_name_legal_representative', 191)->nullable();
            $table->string('middle_name_legal_representative', 191)->nullable();
            $table->string('surname_legal_representative', 191)->nullable();
            $table->string('second_surname_legal_representative', 191)->nullable();
            $table->string('document_type_legal_representative', 191)->nullable();
            $table->string('document_legal_representative', 191)->nullable();
            $table->date('expedition_date_legal_representative')->nullable();
            $table->unsignedInteger('bank_id')->nullable()->index('tabl_b_fk');
            $table->unsignedInteger('type_account_bank_legal_representative_id')->nullable()->index('tabl_comp_fk');
            $table->string('account_number_legal_representative', 191)->nullable();
            $table->boolean('legal_representative_no_same')->nullable();
            $table->string('first_name_register', 191)->nullable();
            $table->string('middle_name_register', 191)->nullable();
            $table->string('surname_register', 191)->nullable();
            $table->string('second_surname_register', 191)->nullable();
            $table->string('document_type_register', 191)->nullable();
            $table->string('register_document', 191)->nullable();
            $table->string('expedition_date_register', 191)->nullable();
            $table->string('verify_company', 191)->nullable();
            $table->string('verify_document_register', 191)->nullable();
            $table->string('verify_document_legal_representative', 191)->nullable();
            $table->string('verify_bank_account_legal_representative', 191)->nullable();
            $table->string('status_company', 45)->nullable()->default('PENDIENTE');
            $table->unsignedBigInteger('expedition_place_legal_representative_id')->nullable()->index('edlr_divipola');
            $table->unsignedBigInteger('expedition_place_register_id')->nullable()->index('epr_divipola');
            $table->string('verify_ccb', 191);
            $table->string('verify_authorization_register', 191);
            $table->string('phone_number', 45)->nullable();
            $table->boolean('can_store_employees')->default(true);
            $table->string('verify_sworn_statement', 100)->nullable();
            $table->string('verify_firma_sworn_statement', 45)->nullable();
            $table->integer('employees_projected')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_companies');
    }
};
