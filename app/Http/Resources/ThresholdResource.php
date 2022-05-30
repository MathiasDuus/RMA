<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThresholdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$request->id,
            'type' => 'Threshold',
            'attributes' => [
                'temperature' => $this->temperature,
                'humidity' => $this->humidity,
                'light' => $this->light,
            ]
        ];

    }
}