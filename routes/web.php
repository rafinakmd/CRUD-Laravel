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

Route::get('/', function () {
    return view('welcome');
});

//Tambah data
// Route::get('/test/create','HomeController@create');
// Route::post('/test','HomeController@store');
// //Edt data
// Route::get('test/{id}/edit', 'HomeController@edit');
// Route::patch('/test/{id}', 'HomeController@update');
// //Delete data
// Route::delete('/test/{id}', 'HomeController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create']);
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store']);
Route::get('/home/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit']);
Route::post('/home/{id}', [App\Http\Controllers\HomeController::class, 'update']);
Route::get('/home/{id}/destroy', [App\Http\Controllers\HomeController::class, 'destroy']);
