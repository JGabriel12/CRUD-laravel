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
Route::get('/', 'App\Http\Controllers\PhotoController@index');

Route::get('/cadastro', 'App\Http\Controllers\PhotoController@create');

Route::get('/listar', 'App\Http\Controllers\PhotoController@show');


Route::get('/editar', 'App\Http\Controllers\PhotoController@edit');

Route::get('/excluir', function () {
    return view('welcome');
});
