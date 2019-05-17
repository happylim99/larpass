<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->bigInteger('user_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('product_master_id')->unsigned();
            $table->foreign('product_master_id')->references('id')->on('product_masters');
            $table->string('option_name_1' , 150);
            $table->string('option_value_1' , 150);
            $table->string('option_name_2' , 150);
            $table->string('option_value_2' , 150);
            $table->string('sku' , 70);
            $table->integer('stocks')->unsigned()->comment('remaining stock');
            $table->integer('sold')->unsigned()->comment('total sold');
            $table->double('price' , 10 , 4);
            $table->string('remark' , 500)->comment('for seller use only');
            $table->datetime('available_from');
            $table->datetime('available_to');
            $table->bigInteger('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
            $table->bigInteger('approved_by')->unsigned();
            $table->foreign('approved_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
