<?php

use App\Models\InclusiveJobEmployees;
use App\Models\InclusiveJobCompanies;
use App\Models\InclusiveJobTransactions;
use App\Models\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//EMPLEADOS

    //BUSCA EMPELADOS SEGUN EL ID
    Route::get('employees/find/{id}',function($id){
    return InclusiveJobEmployees::find($id);
    });


    //BUSCA EMPLEADOS SEGUN EL ID UTILIZANDO FINDORFAIL
    //LAZA EXCEPCION SI NO ENCUENTRA EL ID
    Route::get('employees/findorfail/{id}', function ($id) {
        try {
            return InclusiveJobEmployees::findOrFail($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        
    });

    //OBTENER REGISTROS POR SU PK CON SU SELECCION DE COLUMNAS
    Route::get('employees/findorfailwithcolumns/{id}', function ($id) {
        try {
            return InclusiveJobEmployees::findOrFail($id,["id","company_id","first_name"]);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        
    });

    //BUSQUEDA POR COLUMNAS CON METODOS MAGICOS 0 404
    Route::get('employees/find-method-magic/{slug}', function ($slug) {
        //return  InclusiveJobEmployees::where("first_name",$slug)->firstOrFail();

        //mejor aun
        return InclusiveJobEmployees::firstWhere("first_name",$slug);
    });


    //OBTENER  MULTIPLES REGISTROS
    Route::get('employees/find-many', function () {
        //return InclusiveJobEmployees::whereIn("id",[63,64,65,66,67])->get();

        //mejor aun
        return InclusiveJobEmployees::findMany([63,64,65,66,67]);
    });


    //PAGINACION CON SELECCION DE COLUMNAS
    Route::get('employees/pagination/{perPage}', function ($perPage = 10) {
        return InclusiveJobEmployees::paginate($perPage,['id','company_id','first_name']);
    });


    //PAGINACION MANUAL
    Route::get('employees/pagination-manual/{perPage}/{offset}', function ($perPage = 10, $offset = 0) {
      return InclusiveJobEmployees::offset($offset)->limit($perPage)->get();
    });


    //CREAR REGISTROS NUEVOS
    Route::get('employees/create',function(){
        return InclusiveJobEmployees::create([
            'company_id'=> InclusiveJobCompanies::all()->random(1)->first()->id,
            'first_name'=> 'Juan',
            'middle_name'=> 'Carlos',
            'last_name'=> 'Perez',
            'second_last_name'=> 'Perez',
            'birth_date'=> '1990-01-01',
            'identity_name'=> 'Guillermo',
            'nacionatity_id'=> 1,
            'has_document'=> 0,
            'document_type'=> 'cc',
            'document_number'=> '123456789',
            'verify_document_identity'=> 'companies/830114018/employees/60326161/documento-2023-02-28 17:06:22.pdf',
            'expedition_name'=> '1986-10-03',
            'sex_assignment'=> 'HOMBRE',
            'sexual_orientation'=>'HOMBRE',
            'gender_identity'=> 'MASCULINO',
            'mititary_card'=> '123456789',
            'email'=> 'gsanchez1687@gmail.com',
            'locality_lives'=> 'BOGOTA',
            'neighborhood_lives'=> 'CALLE 123',
            'address_lives'=> 'CALLE 123',
            'phone'=> '123456789',
            'phone_number'=> '123456789',
            'educational_level'=> 'PRIMARIA',
            'has_contract'=> 1,
            'young_adult'=> 0,
            'older_adult'=> 0,
        ]);
    });

    //RETORNA EL MODELO SI EXISTE O CREALO
    Route::get('employees/first-or-create',function(){
        return InclusiveJobEmployees::firstOrCreate(
            ['document_number'=>60326161],
            [
            'company_id'=> InclusiveJobCompanies::all()->random(1)->first()->id,
            'first_name'=> 'Juan',
            'middle_name'=> 'Carlos',
            'last_name'=> 'Perez',
            'second_last_name'=> 'Perez',
            'birth_date'=> '1990-01-01',
            'identity_name'=> 'Guillermo',
            'nacionatity_id'=> 1,
            'has_document'=> 0,
            'document_type'=> 'cc',
            'document_number'=> '123456789',
            'verify_document_identity'=> 'companies/830114018/employees/60326161/documento-2023-02-28 17:06:22.pdf',
            'expedition_name'=> '1986-10-03',
            'sex_assignment'=> 'HOMBRE',
            'sexual_orientation'=>'HOMBRE',
            'gender_identity'=> 'MASCULINO',
            'mititary_card'=> '123456789',
            'email'=> 'gsanchez1687@gmail.com',
            'locality_lives'=> 'BOGOTA',
            'neighborhood_lives'=> 'CALLE 123',
            'address_lives'=> 'CALLE 123',
            'phone'=> '123456789',
            'phone_number'=> '123456789',
            'educational_level'=> 'PRIMARIA',
            'has_contract'=> 1,
            'young_adult'=> 0,
            'older_adult'=> 0,
            ]
        );

    });


    //CARGANDO RELACIONES: WITH
    Route::get('employees/with-relation/{id}',function($id){
        try {
            return InclusiveJobEmployees::with('InclusiveJobTransactions','InclusiveJobCompanies')->findOrFail($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        
    });


    //CARGANDO RELACIONES: LOAD
    Route::get('employees/load-relation/{id}',function($id){
       $employee = InclusiveJobEmployees::findOrFail($id);
       $employee->load('InclusiveJobTransactions','InclusiveJobCompanies');
       return $employee;
    });


//FIN DE EMPLEADOS



//COMPANIES

    Route::get('companies/find/{id}', function ($id) {
        return InclusiveJobCompanies::find($id);
    });

//TRANSACTIONS

    Route::get('transactions/find/{id}', function ($id) {
        return InclusiveJobTransactions::find($id);
    });

//FIN DE TRANSACTIONS

//USERS

    Route::get('users/find/{id}', function ($id) {
        return Users::find($id);
    });

//FIN DE USERS