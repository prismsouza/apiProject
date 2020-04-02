<?php

namespace App\Http\Resources\Person;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'masp' => $this->masp,
            'is_active' => $this->is_active,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'is_accredited'=> $this->is_accredited,
            'driver category license' => $this->driver_category,
            'gender' => $this->gender,
            'birth_date' => $this->birth_date,
            'inclusion date' => $this->inclusion_date,
            'occupation' => $this->occupation,
            'level' => $this->level,
            'functional_situation' => $this->functional_situation,
            'unit_id'  => $this->unit_id,
        ];
    }
}
