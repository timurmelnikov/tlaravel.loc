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

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

Route::get('/article/{id}', ['as' => 'article', function ($id) {
    echo $id;
}]);


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


//Route::get('/page/{cat}/{id}/', function ($var1, $var2) {
//    echo '<pre>';
//
//    echo $var1 . '|' . $var2;
//    echo '</pre>';
//
//})->where(['cat'=>'[A-Za-z]+']);


//Route::post('/comments', function (){
//
//   print_r($_POST);
//});

//Route::match(['get', 'post'],'/comments', function (){
//
//   print_r($_POST);
//});

//Route::any('/comments', function (){
//    print_r($_POST);
//});


Route::group(['prefix' => 'admin/{id}'], function () {
    Route::get('/page/create/{v}', function ($v) {
        //echo route('home');
        //return redirect()->route('home');
        //return redirect()->route('article', ['id'=>25]);

        $routes = Route::current();
        //echo $routes->getName();
        //echo $routes->getParameter('v', 111);
        print_r($routes->parameters());

    })->name('createpage');


    Route::get('/page/edit/', function () {
        echo 'page/edit';
    });

});