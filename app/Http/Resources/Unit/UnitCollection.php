<?php

namespace App\Http\Resources\Unit;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit_name,
            'href' => [
                'more details' => route('units.show', $this->unit_id)
            ]
        ];
    }
}
