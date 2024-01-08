<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne; // Add this line
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'name_second',
        'last_name',
        'last_name_second',
        'email',
        'username',
        'type',
        'identification',
        'password',
        'profession',
        'office',
        'country_id',
        'departament_id',
        'city_id',
        'addres',
        'photo',
        'genere_id',
        'phone',
        'birth',
        'state_id',
        'email_verified_at',
        'manager_type_id',
        'remember_token',
        'created_at',
        'updated_at',
        'user_id',
        'city_of_birth_id',
        'department_of_birth_id',
        'otherPhone',
    ];

    //Quien utliza la tabla users ??
    //inclusive_job_companies

    public function InclusiveJobCompanies(): HasOne{
        return $this->hasOne(InclusiveJobCompanies::class, 'user_id', 'id');
    }
    
}
