<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v1')->group(function () {

    Route::namespace('API')->group(function () {

        Route::middleware('auth:api')->group(function () {
            Route::resource('/hotel', 'HotelController');
            Route::resource('/room', 'RoomController');
            Route::resource('/booking', 'BookingController');
            Route::resource('/pricelist', 'PriceListController');
            Route::resource('/roomtype', 'RoomTypeController');
        });

        Route::post('register', 'RegisterController@register');

    });

});
