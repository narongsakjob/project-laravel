<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $data['first_name'] = 'Narongsak';
    $data['last_name'] = 'Chobsri';
    return view('index', $data);
});
Route::get('/plus/{num1?}/{num2?}', function ($num1=0, $num2=0) {
    echo $num1. ' + ' .$num2. ' = '.($num1+$num2);
});
Route::get('/test-layout', function() {
    return view('layout');
});