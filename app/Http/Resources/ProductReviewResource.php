<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
                'id' => $this->id,
                'user_id' => $this->user_id,
                'product_master_id' => $this->product_master_id,
                'rating' => $this->rating,
                'comment' => $this->comment,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
        ];
    }
}
