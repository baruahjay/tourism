<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::group([
    'prefix' => '/place',

], function ($router) {
    Route::get('/', [DemoController::class, 'getPlace']);

    Route::get('/add/{name}/{location}/{popular_sites}/{state}/{district}/{place_category}/', [DemoController::class, 'addPlace']);

    Route::get('/update/{place_id}/{name}/{location}/{popular_sites}/{state}/{district}/{place_category}/', [DemoController::class, 'updatePlace']);

    Route::get('/delete/{place_id}', [DemoController::class, 'removePlace']);
});

Route::group([
    'prefix' => '/hotel',

], function ($router) {
    Route::get('/', [DemoController::class, 'getHotel']);

    Route::get('/add/{place_id}/{hotel_name}/{latitude}/{longitude}/{rating}/{area}/', [DemoController::class, 'addHotel']);

    Route::get('/update/{hotel_id}/{place_id}/{hotel_name}/{latitude}/{longitude}/{rating}/{area}/', [DemoController::class, 'updateHotel']);

    Route::get('/delete/{hotel_id}', [DemoController::class, 'removeHotel']);
});

Route::group([
    'prefix' => '/operator',

], function ($router) {
    Route::get('/', [DemoController::class, 'getOperator']);

    Route::get('/add/{place_id}/{name}/{rating}/{contact_number}/', [DemoController::class, 'addOperator']);

    Route::get('/update/{operator_id}/{place_id}/{name}/{rating}/{contact_number}/', [DemoController::class, 'updateOperator']);

    Route::get('/delete/{operator_id}', [DemoController::class, 'removeOperator']);
});

Route::group([
    'prefix' => '/user',

], function ($router) {
    Route::get('/', [DemoController::class, 'getUser']);

    Route::get('/add/{name}/{mobile}/{gender}/', [DemoController::class, 'addUser']);

    Route::get('/update/{user_id}/{name}/{mobile}/{gender}/', [DemoController::class, 'updateUser']);

    Route::get('/delete/{user_id}', [DemoController::class, 'removeUser']);
});

