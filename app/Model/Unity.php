<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $table = "unities";
    protected $primaryKey = "unity_id";
    //public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'unity_name', 'unity_description'
    ];
}
