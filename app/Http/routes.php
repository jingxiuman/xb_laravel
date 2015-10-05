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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/{id}', function ($id) {
    if($id == 1){
        return view("welcome");
    }else{
        return 'User '.$id;
    }

});
