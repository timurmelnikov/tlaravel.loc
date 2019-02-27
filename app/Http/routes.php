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


Route::get('/page/{cat}/{id}/', function ($var1, $var2) {
    echo '<pre>';
    echo $var1 . '|' . $var2;
    echo '</pre>';
});//->where(['cat'=>'[A-Za-z]+']);

//Route::get('/page/', function () {
//    echo '<pre>';
//    echo 'rrrr';
//    echo '</pre>';
//});