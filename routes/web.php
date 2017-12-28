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

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/hello/{string}', function () {
      return $string;
 });

Route::get('/foo/{name}', 'Lists\FooController@index');
Route::get('/foo', 'Lists\FooController@index');

