<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ProductDetail;
use App\Http\Resources\ProductAttributeResource;

class ProductAttribute extends Model
{
    protected $table = "product_attributes";

    protected $fillable = [
        'product_detail_id','weight','width','length','height'
    ];

    public function productdetail()
    {
        return $this->belongsTo('ProductDetail','product_detail_id');
    }

    public static function getAtt($id)
    {
        $productdetail = ProductDetail::find($id);
        $getAtt = $productdetail->productattribute;
        return ProductAttributeResource::collection($getAtt);
    }
}
