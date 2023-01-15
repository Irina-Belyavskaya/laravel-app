<?php

use App\Http\Controllers\MainController;
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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');

Route::get('/admin', 'App\Http\Controllers\MainController@admin')->name('admin');

Route::get('/admin/add/{param}', 'App\Http\Controllers\MainController@add')->name('add');

Route::post('/admin/create/{param}', 'App\Http\Controllers\MainController@create')->name('create');

Route::post('/admin/delete', 'App\Http\Controllers\MainController@delete')->name('delete');

Route::post('/admin/change', 'App\Http\Controllers\MainController@change')->name('change');

Route::post('/admin/update', 'App\Http\Controllers\MainController@update')->name('update');

//Route::get('/',[MainController::class, 'index']);
