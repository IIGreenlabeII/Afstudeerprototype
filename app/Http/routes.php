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
    return view('voting');
});

Route::get('/voted', function () {
    return view('voted');
});

Route::resource('votes', 'Vote1Controller',
                ['only' => ['index', 'show']]);

Route::post('/voted', 'Vote1Controller@store');


