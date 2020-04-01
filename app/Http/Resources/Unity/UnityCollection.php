<?php

namespace App\Http\Resources\Unity;

use Illuminate\Http\Resources\Json\JsonResource;

class UnityCollection extends JsonResource
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
            'unity_name' => $this->unity_name,
            'href' => [
                'more details' => route('unities.show', $this->unity_id)
            ]
        ];
    }
}
