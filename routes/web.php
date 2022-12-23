<?php

use Illuminate\Support\Facades\Route;



//root route
Route::get('/', function () {
    return view('index');
})->name('home');

//route to fetch data from json file
Route::get('/get-flight-info/', function () {
    $flightInfo = file_get_contents(base_path('/public/LHR_CDG_ADT1_TYPE_1.json'));

    $data = json_decode($flightInfo, true, 512, JSON_THROW_ON_ERROR);

    return view('index', [
        'data' => $data
    ]);
})->name('flight-info');
