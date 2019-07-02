<?php

use Illuminate\Database\Seeder;

class PriceListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PriceList::class, 10)->create();
    }
}
