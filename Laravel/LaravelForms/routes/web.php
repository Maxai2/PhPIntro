<?php
use Illuminate\Http\Request;

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
    $data = ['asdf0', 'asdf1', 'asdf2'];
    return view('welcome')->with('data', $data);
});
Route::post('/', function (Request $request) {
    return $request->all();
});
