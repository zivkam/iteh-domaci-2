<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MagacinResource extends JsonResource
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
            'id' => $this->resource->id,
            'tip' => $this->resource->tip,
            'telefon' => $this->resource->telefon,
            'ulica'=> $this->resource->ulica,
            'sef'=> $this->resource->sef,
            'prodavnica' => new ProdavnicaResource($this->resource->prodavnica),
            'grad' => new GradResource($this->resource->grad)
        ];

    }
}
