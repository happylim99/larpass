<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('description', 300)->nullable();
            //$table->smallint('category_id')->unsigned();
            //$table->foreign('category_id')->references('id')->on('categories');
            //$table->smallint('sub_cat_id')->unsigned();
            //$table->foreign('sub_cat_id')->references('id')->on('sub_cats');
            //$table->smallint('sub_sub_cat_id')->unsigned();
            //$table->foreign('sub_sub_cat_id')->references('id')->on('sub_sub_cats');
            //$table->smallint('brand_id')->unsigned();
            //$table->tinyint('status')->unsigned();
            //$table->tinyint('approve_status')->unsigned();
            $table->biginteger('view')->nullable();
            $table->double('rating_star',5,2)->nullable();
            $table->biginteger('rating_count')->unsigned()->nullable();
            $table->string('remark',500)->nullable();
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
        Schema::dropIfExists('product_masters');
    }
}
