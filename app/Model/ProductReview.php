<?php

namespace App\Model;

use App\Model\ProductMaster;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProductReviewResource;

class ProductReview extends Model
{
    protected $table = 'product_reviews';

    protected $fillable = [
        'rating','comment'
    ];

    public function productmaster()
    {
        return $this->belongsTo('ProductMaster','product_master_id');
    }

    public static function productreview($id)
    {
        $pr = DB::table('product_reviews')->where('product_master_id',$id)->get();
        return ProductReviewResource::collection($pr);
    }

}
