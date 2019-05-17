<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProductDetailResource;
use App\Model\ProductMaster;
use App\Model\ProductAttribute;

class ProductDetail extends Model
{
    protected $table = 'product_details';

    protected $fillable = [
        'product_master_id','option_name_1','option_value_1','option_name_2','option_value_2','sku','stocks','sold','price','remark','available_from','available_to','created_by'
    ];

    public function productattribute()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function productmaster()
    {
        return $this->belongsTo('ProductMaster','product_master_id');
    }
    
    public static function getDetails($id)
    {
        /*
        $getDetails = DB::table('product_details')->where('product_master_id',$id)->get();
        */
        /*
        $getDetails = DB::table('product_details , product_attributes')->where('product_details.product_master_id',$id)
        ->where('product_details.id', '=', 'product_attributes.product_detail_id')
        ->toSql();
        */

        $productmaster = ProductMaster::find($id);
        $getDetails = $productmaster->productdetail;
        return ProductDetailResource::collection($getDetails);
    }
}
