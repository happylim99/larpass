<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\ProductAttribute;

class ProductDetailResource extends JsonResource
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
            "product_master_id" => $this->product_master_id,
            "option_name_1" => $this->option_name_1,
            "option_value_1" => $this->option_value_1,
            "option_name_2" => $this->option_name_2,
            "option_value_2" => $this->option_value_2,
            "sku" => $this->sku,
            "stocks" => $this->stocks,
            "sold" => $this->sold,
            "price" => $this->price,
            "remark" => $this->remark,
            "available_from" => $this->avilable_from,
            "available_to" => $this->available_to,
            "created_by" => $this->created_by,
            "approved_by" => $this->approved_by,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "product_attribute" => ProductAttribute::getAtt($this->id),
        ];
    }
}
