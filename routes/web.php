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

//route index
Route::get('/books','BooksController@index');

//route add data
Route::get('/books/add','BooksController@add');

//route store data
Route::post('/books/store','BooksController@store');

//route delete data
Route::get('/books/delete/{id}','BooksController@delete');

//route edit data
Route::get('/books/edit/{id}','BooksController@edit');

//route update data
Route::post('/books/update','BooksController@update');