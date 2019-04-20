<?php

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
Route::get('test','Hellocontroller@index');
// Route::get('price/{price}','Hellocontroller@demo');
Route::get("contact",'ContactController@index');
Route::post('/contactforms','ContactController@store')->name('contactstore');


// Route::get('sayhello','TestController@Showview');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('second', 'SecondController');
