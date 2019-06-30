<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Hotel;
use Faker\Generator as Faker;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

$factory->define(Hotel::class, function (Faker $faker) {

    $image = $faker->image();
    $imageFile = new File($image);

    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'zip_code' => $faker->postcode,
        'phone_number' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'hotel_image' => Storage::disk('public')->putFile('images', $imageFile),

        // 'title' => $faker->company,
        // 'content' => $faker->paragraph,
        // 'user_id' => function () {
        //     return factory(App\User::class)->create()->id;
        // },
        // 'user_type' => function (array $post) {
        //     return App\User::find($post['user_id'])->type;
        // }
    ];
});
