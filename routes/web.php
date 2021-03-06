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

// Route::get('/', [PhotoController::class, "index"]);
Route::get('/books', 'App\Http\Controllers\PhotoController@index');

Route::get('/books/create', 'App\Http\Controllers\PhotoController@create');

Route::get('/books/{books}', 'App\Http\Controllers\PhotoController@show');

Route::get('/books/{books}/edit/', 'App\Http\Controllers\PhotoController@edit');

Route::get('/books/{books}/destroy/', 'App\Http\Controllers\PhotoController@destroy');
 
/*
Route::get('/excluir', function () {
    return view('welcome');
});  */
