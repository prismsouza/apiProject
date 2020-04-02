<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "units";
    protected $primaryKey = "unit_id";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'unit_id', 'unit_name', 'unit_description'
    ];
}
