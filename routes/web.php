<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('boatramp', function () {
    return view('boatramp');
});

Route::get('cabinLease', function () {
    return view('cabinLease');
});

Route::get('cabins', function () {
    return view('cabins');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('currentWeather', function () {
    return view('currentWeather');
});

Route::get('localWeather', function () {
    return view('localWeather');
});

Route::get('meetCalhoun', function () {
    return view('meetCalhoun');
});

Route::get('rates', function () {
    return view('rates');
});

Route::get('rvSiteAgreement', function () {
    return view('rvSiteAgreement');
});


