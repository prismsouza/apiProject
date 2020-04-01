<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "people";
    protected $primaryKey = "masp";
    public $timestamps = false;

    protected $fillable = [
        'name', 'masp', 'is_active', 'cpf', 'rg', 'is_accredited', 'driver_category', 'gender', 'birth_date', 'inclusion_date', 'occupation', 'level', 'functional_situation', 'unity_id'
    ];
}
