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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/AddForm', function () {
    return view('addForm');
});

// Route::get('/EditForm', function () {
//     return view('editForm');
// });

Route::get('/', 'produkController@index');
Route::get('/EditForm/{id}', 'produkController@edit');
Route::get('/Delete/{id}', 'produkController@destroy');
Route::post('/AddData', 'produkController@create');
Route::post('/EditData', 'produkController@update');


