<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeasurementResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Measurements',
            'attributes' => [
                'temperature' => $this->temperature,
                'humidity' =>  $this->humidity,
                'light' =>  $this->humidity,
                'location' => [
                    'id' => (string)$this->location->id,
                    'room' => $this->location->room,
                    'school' => $this->location->school->schoolName,
                    'school_id' => (string)$this->location->school->id,
                ],
                'created_at' =>  date_format($this->created_at, "H:i:s d-m-Y"),
            ]
        ];
    }
}
