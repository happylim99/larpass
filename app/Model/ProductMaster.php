<?php

namespace App\Model;

use App\Model\ProductReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Model\ProductDetail;

class ProductMaster extends Model
{
    protected $table = 'product_masters';

    protected $fillable = [
        'name', 'description',
    ];

    public function productReview()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public static function totalRating($id)
    {
        //$rating = DB::table('product_reviews')->select(DB::raw("sum(rating) as totalrating"))->where('product_master_id',$id)->get();
        //return $rating[0]->totalrating;
        $getProductMaster = ProductMaster::find($id);
        $getRating = $getProductMaster->productReview->sum('rating');
        return $getRating;
    }

    public static function countRating($id)
    {
        //$countrating = DB::table('product_reviews')->where('product_master_id',$id)->count();
        //return $countrating;
        $getProductMaster = ProductMaster::find($id);
        $getCountRating = $getProductMaster->productReview->count();
        return $getCountRating;
    }

}
