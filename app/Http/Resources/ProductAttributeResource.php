<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductAttributeResource extends JsonResource
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
            "id" => $this->id,
            "product_detail_id" => $this->product_detail_id,
            "weight" => $this->weight,
            "width" => $this->width,
            "length" => $this->length,
            "height" => $this->height,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
