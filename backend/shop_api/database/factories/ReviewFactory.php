<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Review;
use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        //word
        // 'product_id' => $faker->numberBetween(1,90),
        'product_id' => function(){
            return Product::all()->random();
        },
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(1,5)
        // timestamps();
    ];
});
