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
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashBord', function(){
    return 'welcome';
});
Route::post('register/create', [
    'as' => 'profile', 'uses' => 'UserController@register'
]);
Route::post('register/login',  'UserController@login');
Route::get("/dashBord", function(){
    return "login";
});
