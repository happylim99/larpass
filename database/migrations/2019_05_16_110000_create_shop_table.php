<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users');

            $table->string('name' , 50);
            $table->string('description' , 300);
            $table->smallInteger('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('banks');

            $table->string('bank_account_no' , 50);
            $table->smallInteger('shop_charge_type_id')->unsigned();
            $table->foreign('shop_charge_type_id')->references('id')->on('shop_charge_types');

            $table->double('charge_value' , 8 , 4);
            $table->double('rating' , 5 , 2);
            $table->tinyInteger('status')->unsigned();
            $table->foreign('status')->references('id')->on('shop_status');

            $table->bigInteger('approved_by')->unsigned();
            $table->foreign('approved_by')->references('id')->on('users');

            $table->timestamp('approved_at')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
