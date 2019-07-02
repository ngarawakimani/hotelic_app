<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Booking;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {

    $date_start = $faker->date('Y-m-d', 'now');
    $date_end = Carbon::parse($date_start)->addDays($faker->randomDigit());
    $total_nights = Carbon::parse($date_start)->diffInDays($date_end);

    $price_list = factory(App\PriceList::class)->create()->price;
    $total_price = round($price_list * $total_nights, 2, PHP_ROUND_HALF_UP);

    return [
        'room_id' => function () {
            return factory(App\Room::class)->create()->id;
        },
        'date_start' => $date_start,
        'date_end' => $date_end,
        'customer_fullname' => $faker->name,
        'customer_email' => $faker->unique()->safeEmail,
        'total_nights' => $total_nights,
        'total_price' => $total_price,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});
