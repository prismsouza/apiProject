<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name', 'masp', 'is_active', 'cpf', 'rg', 'is_accredited', 'driver_category', 'gender', 'birth_date', 'inclusion_date', 'occupation', 'level', 'functional_situation', 'unity_code'
    ];
}
