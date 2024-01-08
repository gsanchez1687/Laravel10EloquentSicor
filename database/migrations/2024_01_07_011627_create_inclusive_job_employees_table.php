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
        Schema::create('inclusive_job_employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id')->index('comp_empl');
            $table->string('first_name', 191);
            $table->string('middle_name', 191)->nullable();
            $table->string('last_name', 191);
            $table->string('second_last_name', 191)->nullable();
            $table->string('birth_date', 191);
            $table->string('identity_name', 191)->nullable();
            $table->unsignedBigInteger('nacionality_id')->index('natio_empl_fk');
            $table->boolean('has_document');
            $table->string('document_type', 191);
            $table->string('document_number', 191);
            $table->string('verify_document_identity', 191)->nullable();
            $table->string('expedition_date', 191);
            $table->enum('sex_assignment', ['HOMBRE', 'MUJER', 'INTERSEXUAL']);
            $table->string('sexual_orientation', 191);
            $table->string('gender_identity', 191);
            $table->string('military_card', 191)->nullable();
            $table->string('email', 191);
            $table->string('locality_lives', 191);
            $table->string('neighborhood_lives', 191);
            $table->string('address_lives', 191);
            $table->string('phone', 191)->nullable();
            $table->string('phone_number', 191);
            $table->enum('educational_level', ['SIN ESCOLARIDAD', 'BÁSICA PRIMARIA', 'BASICA SECUNDARIA (HASTA 9)', 'BACHILLER (HASTA 11)', 'TÉCNICO', 'TECNÓLOGO', 'PREGRADO', 'ESPECIALIZACIÓN', 'MAESTRIA', 'DOCTORADO'])->default('SIN ESCOLARIDAD');
            $table->boolean('has_contract');
            $table->boolean('young_adult');
            $table->boolean('older_adult');
            $table->boolean('pensioner');
            $table->boolean('women');
            $table->enum('disability_type', ['FISICA', 'VISUAL', 'AUDITIVA', 'INTELECTUAL', 'MENTAL', 'SORDO CEGUERA', 'MULTIPLE', 'NO APLICA'])->default('NO APLICA');
            $table->boolean('reincorporation');
            $table->boolean('victim_armed_conflict');
            $table->boolean('sisben');
            $table->enum('ethnicity', ['AFROCOLOMBIANO', 'RAIZAL', 'PALENQUERO', 'INDIGENA', 'GITANO', 'NO APLICA'])->default('NO APLICA');
            $table->boolean('icbf');
            $table->boolean('post_penitentiary');
            $table->boolean('gender_violence');
            $table->boolean('prasp');
            $table->boolean('recycler');
            $table->boolean('trans');
            $table->boolean('street_habitability');
            $table->boolean('human_trafficking');
            $table->boolean('informal_seller');
            $table->boolean('migrant');
            $table->boolean('rural_population');
            $table->string('verify_population', 191)->nullable();
            $table->string('verify_contract', 191)->nullable();
            $table->unsignedInteger('type_contract_id')->index('type_emplo_fk');
            $table->date('start_contract');
            $table->date('end_contract')->nullable();
            $table->enum('salary', ['1 SMMLV', '1 a 3 SMMLV', 'mas de 3 SMMLV']);
            $table->string('verify_increase_plant', 191)->nullable();
            $table->json('verify_increase_plant_array')->nullable();
            $table->string('verify_link_continuity', 191);
            $table->boolean('job_separation');
            $table->string('verify_sworn_statement', 191);
            $table->string('verify_firma_sworn_statement', 45)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('expedition_place_id')->nullable()->index('divi_employ_fk');
            $table->string('status_employee', 191)->nullable()->default('PENDIENTE');
            $table->integer('balance_to_pay_expected')->nullable()->default(0);
            $table->integer('balance_to_pay_real')->nullable()->default(0);
            $table->boolean('balance_calculation')->nullable()->default(false);
            $table->string('employment_service_provider')->nullable();
            $table->string('verify_population_2')->nullable();
            $table->boolean('post_penitentiary_question')->nullable()->default(false);
            $table->boolean('rural_question')->nullable()->default(false);
            $table->string('verify_company_sworn_statement')->nullable();
            $table->string('verify_company_firma_sworn_statement')->nullable();
            $table->string('verify_declaracion_trans')->nullable();
            $table->string('verify_declaracion_trans_firma')->nullable();
            $table->string('verify_declaracion_mayor_50')->nullable();
            $table->string('verify_declaracion_mayor_50_firma')->nullable();
            $table->string('verify_declaracion_icbf')->nullable();
            $table->string('verify_declaracion_icbf_firma')->nullable();
            $table->string('verify_declaracion_postpenitenciaria')->nullable();
            $table->string('verify_declaracion_postpenitenciaria_firma')->nullable();
            $table->string('verify_declaracion_rural_population')->nullable();
            $table->string('verify_declaracion_rural_population_firma')->nullable();
            $table->string('verify_certificate')->nullable();
            $table->string('verify_certificate_firma')->nullable();
            $table->string('verify_certificate_interventoria')->nullable();
            $table->string('balance_to_pay_expected_estado')->nullable();
            $table->date('fecha_ultima_firma')->nullable();
            $table->string('observacion_valor_asignado')->nullable();
            $table->date('fecha_actualizacion_observacion')->nullable();
            $table->integer('consecutivo')->nullable();
            $table->softDeletes();
            $table->date('date_balance_to_pay_real')->nullable();

            $table->index(['company_id'], 'inclusive_job_employees_company_id_IDX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclusive_job_employees');
    }
};
