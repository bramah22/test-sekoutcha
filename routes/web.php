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

Route::get('/', 'AnnuaireController@index');
Route::get('/create', 'AnnuaireController@create');
Route::post('/create', 'AnnuaireController@store');

Route::get('/{id}/delete', 'AnnuaireController@destroy');
