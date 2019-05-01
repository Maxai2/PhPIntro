<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('books', function () {
//     return view('welcome');
// });

Route::get('books', 'BooksController@index')->middleware('demo');
Route::get('books/create', 'BooksController@create');
Route::post('books/create', 'BooksController@store');
Route::get('books/{id}', 'BooksController@find');

// Route::post('books', 'BooksController@insert');
