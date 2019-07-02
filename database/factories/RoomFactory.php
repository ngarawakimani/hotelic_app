<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Room;
use Faker\Generator as Faker;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

$factory->define(Room::class, function (Faker $faker) {

    $image = $faker->image();
    $imageFile = new File($image);

    return [
        //
        'room_name' => $faker->word,
        'hotel_id' => function () {
            return factory(App\Hotel::class)->create()->id;
        },
        'room_type' => function () {
            return factory(App\RoomType::class)->create()->id;
        },
        'room_image' => Storage::disk('public')->putFile('images', $imageFile),
    ];
});
