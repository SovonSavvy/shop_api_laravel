<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //word
        'name' =>  $faker->word,
        'detail' =>  $faker->paragraph,
        'price' =>  $faker->numberBetween(1000,9000),
        'discount' =>  $faker->numberBetween(10,90),
        'stock' =>  $faker->numberBetween(100,200)
    ];
});
