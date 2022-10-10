<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            'id' => $this->id,
            'modelName' => $this->modelName,
            'bodyType' => $this->bodyType,
            'modelType' => $this->modelType,
            'imageUrl' => $this->imageUrl,
            'year_released' => $this->year_released,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}
