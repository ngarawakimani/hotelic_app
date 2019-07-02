<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PriceList;
use Faker\Generator as Faker;

$factory->define(PriceList::class, function (Faker $faker) {
    return [
        //
        'price' => $faker->randomFloat(2, 0,1000),
        'room_type' => function () {
            return factory(App\RoomType::class)->create()->id;
        },
    ];
});
