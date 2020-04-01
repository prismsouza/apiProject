<?php

namespace App\Http\Resources\Unity;

use Illuminate\Http\Resources\Json\JsonResource;

class UnityResource extends JsonResource
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
            'unity_id' => $this->unity_id,
            'unity_name' => $this->unity_name,
            'unity_description' => $this->unity_description,
            'href' => [
                'people from unity' => route('unities/unity_id/people', $this->unity_id)
            ]
        ];
    }
}
