<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ProductDetail;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $newprodet = new ProductDetail;
        $dt = json_decode($request->getContent(), true);
        $prodets=$dt['data']['productmaster']['product_details'];
        foreach($prodets as $prodet){
            echo $prodet['option_name_1'];
        }
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function masterstore($datas , $masid)
    {
        $newprodet = new ProductDetail;
        $newproattcon = new ProductAttributesController;
        
        //$dt = json_decode($request->getContent(), true);
        //$prodets=$dt['data']['productmaster']['product_details'];
        foreach($datas as $data){
            $newprodet->product_master_id = $masid;
            $newprodet->option_name_1 = $data['option_name_1'];
            $newprodet->option_value_1 = $data['option_value_1'];
            $newprodet->option_name_2 = $data['option_name_2'];
            $newprodet->option_value_2 = $data['option_value_2'];
            $newprodet->sku = $data['sku'];
            $newprodet->stocks = $data['stocks'];
            $newprodet->price = $data['price'];
            $newprodet->available_from = $data['available_from'];
            $newprodet->available_to = $data['available_to'];
            echo $newprodet;
            $newproattcon->detailstore($data['product_attribute'] , '4');
            echo "<br>";
        }
    }
}
