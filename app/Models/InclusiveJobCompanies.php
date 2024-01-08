<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class InclusiveJobCompanies extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'inclusive_job_companies';
    protected $fillable = [
        'user_id',
        'nit',
        'business_name',
        'check_digit',
        'created_at',
        'updated_at',
        'size_company',
        'number_of_employees',
        'cii_code',
        'company_location',
        'primary_residence',
        'local_address',
        'neighborhood',
        'adress',
        'phone',
        'email',
        'first_name_legal_representative',
        'middle_name_legal_representative',
        'middle_surname_legal_representative',
        'surname_legal_representative',
        'document_legal_representative',
        'expedition_date_legal_representative',
        'bank_id',
        'type_account_bank_legal_representative',
        'account_number_legal_representative',
        'legal_representative_no_same',
        'first_name_register',
        'middle_name_register',
        'surname_register',
        'second_surname_register',
        'document_type_register',
        'register_document',
        'expedition_date_register',
        'verify_company',
        'verify_document_register',
        'verify_document_legal_representative',
        'verify_bank_account_legal_representative',
        'status_company',
        'expedition_place_legal_register_id',
        'verify_ccb',
        'verify_authorization_register',
        'phone_number',
        'can_store_employees',
        'verify_sworn_statement',
        'employees_projected',
    ];
    
    //Cual es la tabla de la relacion de user_id
    //users
    public function users(){
        return $this->belongsTo(Users::class);
    }

    public function InclusiveJobEmployees(){
        return $this->hasOne(InclusiveJobEmployees::class, 'company_id', 'id');
    }
}
