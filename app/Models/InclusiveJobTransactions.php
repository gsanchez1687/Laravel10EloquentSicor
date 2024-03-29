<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;

class InclusiveJobTransactions extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'inclusive_job_transactions';
    protected $fillable = [
        'employee_id',
        'company_id',
        'punished',
        'status',
        'time_transaction',
        'time_rectification',
        'time_interventoria',
        'verificators',
        'correct_observation',
        'inputs_to_correct',
        'corrects',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function InclusiveJobEmployees(){
        return $this->hasOne(InclusiveJobEmployees::class, 'id', 'employee_id');
    }

    public function InclusiveJobCompanies(){
        return $this->hasOne(InclusiveJobCompanies::class, 'id', 'company_id');
    }

    public static function scopeWhereDoesntHaveEmployee(Builder $builder): Builder{
        return $builder
        ->select(["id","company_id","employee_id","status"])
        ->with(["InclusiveJobEmployees"])
        ->doesntHave("InclusiveJobEmployees");
    }
}
