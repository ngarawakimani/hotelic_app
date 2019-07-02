<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Booking::class, 10)->create();
    }
}
