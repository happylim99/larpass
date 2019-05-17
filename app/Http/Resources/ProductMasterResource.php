<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\ProductReview;
use App\Model\ProductMaster;
use App\Model\ProductDetail;
use Illuminate\Support\Facades\DB;

class ProductMasterResource extends JsonResource
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
        //return $productreview = DB::table('product_reviews')->where('product_master_id',$this->product_master_id);
        //return $request;
        //return $this->name;
        /*
        'reviews' => [
            'product reviews' => DB::table('product_reviews')->where('product_master_id',$this->id)->get()
        ]
        */
        /*
        $data = DB::table("users")

	    ->select(DB::raw("SUM(users_address.id) as total_address"))

	    ->leftjoin("users_address","users_address.user_id","=","users.id")

	    ->groupBy("users.id")

	    ->get();
        */
        //'totalrating' => DB::table('product_reviews')->select(DB::raw("sum(rating)"))->where('product_master_id',$this->id)->get(),
        //'product reviews' => ProductReview::productreview($this->id),
        return [
            'productmaster' => [
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description,
                'totalrating' => ProductMaster::totalRating($this->id),
                'countrating' => ProductMaster::countRating($this->id),
                'product_details' => ProductDetail::getDetails($this->id),
                'product_reviews' => ProductReview::productreview($this->id),
            ]
        ];
    }
}
