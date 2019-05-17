<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ProductMaster;
use App\Http\Resources\ProductMasterResource;
use App\Http\Requests\ProductMasterRequest;
use App\Http\Requests\MasterDetailRequest;

class ProductMastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return ProductMaster::all();
        //return new ProductMasterResource(ProductMaster::find('1'));
        return ProductMasterResource::collection(ProductMaster::all());
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
    public function store(MasterDetailRequest $request)
    {
        $name = $request->input('data.productmaster.name');
        $desc = $request->input('data.productmaster.description');
        $promas = new ProductMaster;
        $promas->name = $name;
        $promas->description = $desc;
        //$promas->save();

        $prodetreq = $request->input('data.productmaster.product_details');
        $newprodetcon = new ProductDetailsController;
        $newprodetcon->masterstore($prodetreq , '3');
        return "haha";
        //ProductDetailsController::store($prodetreq);

        //print_r($request->data['productmaster']['name']);
        /*
        $dt = json_decode($request->getContent(), true);
        //return $dt['data']['productmaster'];
        $prodetails=$dt['data']['productmaster']['product_details'];
        foreach($prodetails as $prodetail){
            echo $prodetail['option_name_1'];
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
}
