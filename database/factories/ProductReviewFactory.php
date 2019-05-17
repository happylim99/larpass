<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\User;
use App\Model\ProductMaster;
use Faker\Generator as Faker;

$factory->define(App\Model\ProductReview::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return User::all()->random();
        },
        'product_master_id' => function(){
            return ProductMaster::all()->random();
        },
        'comment' => $faker->paragraph,
        'rating' => $faker->numberBetween(0,5)
    ];
});
