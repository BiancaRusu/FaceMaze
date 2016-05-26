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
    return view('pages/home');
});
Route::get('/connect', function(){
    return view('pages/facebook');
});

Route::get('/gamePage', function(){
    return view('pages/gamePage');
});
Route::get('/highscore', function(){
    return view('pages/highscore');
});
Route::auth();

Route::get('/home', 'HomeController@index');
