<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $flightInfo = file_get_contents(base_path('/public/LHR_CDG_ADT1_TYPE_1.json'));

    $data = json_decode($flightInfo, true);


    return view('index');

})->name('home');

Route::get('/get-flight-info/', function () {
    $flightInfo = file_get_contents(base_path('/public/LHR_CDG_ADT1_TYPE_1.json'));

    $data = json_decode($flightInfo, true, 512, JSON_THROW_ON_ERROR);

    return view('index', [
        'data' => $data
    ]);
})->name('flight-info');
