<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class InclusiveJobEmployees extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'inclusive_job_employees';
    protected $fillable = [
        'company_id',
        'firt_name',
        'middle_name',
        'last_name',
        'second_last_name',
        'birth_date',
        'identity_name',
        'nacionatity_id',
        'has_document',
        'document_type',
        'document_number',
        'verify_document_identity',
        'expedition_date',
        'sex_assignment',
        'sexual_orientation',
        'gender_identity',
        'mititary_card',
        'email',
        'locality_lives',
        'address_lives',
        'phone',
        'phone_number',
        'educational_level',
        'has_contract',
        'young_adult',
        'older_adult',
        'pensioner',
        'women',
        'disability_type',
        'reicorporation',
        'victim_armed_conflict',
        'sisben',
        'ethnicity',
        'icbf',
        'post_penitentiary',
        'gender_violence',
        'prasp',
        'recycler',
        'trans',
        'street_habitability',
        'human_trafficking',
        'informal_seller',
        'migrant',
        'rural_population',
        'verify_population',
        'verify_contract',
        'type_contract_id',
        'start_contract',
        'end_contract',
        'salary',
        'verify_increase_plant',
        'verify_increase_plant_array',
        'verify_link_continuity',
        'job_separation',
        'verify_sworn_statement',
        'verify_firma_sworn_statement',
        'created_at',
        'updated_at',
        'expedition_place_id',
        'status_employee',
        'balance_to_pay_expected',
        'balance_to_pay_real',
        'balance_calculation',
        'employment_service_provider',
        'verify_population_2',
        'post_penitentiary_question',
        'rural_question',
        'verify_company_sworn_statement',
        'verify_company_firma_sworn_statement',
        'verify_declaracion_trans',
        'verify_declaracion_trans_firma',
        'verify_declaracion_mayor_50',
        'verify_declaracion_mayor_50_firma',
        'verify_declaracion_icbf',
        'verify_declaracion_icbf_firma',
        'verify_declaracion_postpenitenciaria',
        'verify_declaracion_postpenitenciaria_firma',
        'verify_declaracion_rural_population',
        'verify_declaracion_rural_population_firma',
        'verify_certificate',
        'verify_certificate_firma',
        'verify_certificate_interventoria',
        'balance_to_pay_expected_estado',
        'fecha_ultima_firma',
        'observacion_valor_asignado',
        'fecha_actualizacion_observacion',
        'consecutivo',
        'deleted_at',
        'date_balance_to_pay_real',
    ];

    public function InclusiveJobCompanies():belongsTo{
        return $this->belongsTo(InclusiveJobCompanies::class);
    }

    public function InclusiveJobTransactions():hasMany{
        return $this->hasMany(InclusiveJobTransactions::class);
    }
}
