<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Reference\Reference;



Route::get('/', function () {
    return view('welcome');
});
Route::post('/donate', 'App\Http\Controllers\DonationController@store')->name('donate');// the call back url
Route::get('callback/{reference}','App\Http\controllers\DonationController@callback')->name('callback');