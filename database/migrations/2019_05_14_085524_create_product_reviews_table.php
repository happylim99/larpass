<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            //$table->bigInteger('sales_order_detail_id')->unsigned();
            //$table->foreign('sales_order_detail_id')->references('id')->on('sales_order_details');
            $table->bigInteger('product_master_id')->unsigned()->index();
            $table->foreign('product_master_id')->references('id')->on('product_masters')->onDelete('cascade');
            $table->double('rating',5,2);
            $table->string('comment',500)->nullable();
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
        Schema::dropIfExists('product_reviews');
    }
}
