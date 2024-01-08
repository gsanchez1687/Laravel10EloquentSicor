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
    Route::get('employees/find/{id}', function ($id) {
        try {
            return InclusiveJobEmployees::findOrFail($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        
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