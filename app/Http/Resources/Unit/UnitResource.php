<?php

namespace App\Http\Resources\Unit;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitResource extends JsonResource
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
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit_name,
            'unit_description' => $this->unit_description,
            'href' => [
                'people from unit' => route('units/unit_id/people', $this->unit_id)
            ]
        ];
    }
}
