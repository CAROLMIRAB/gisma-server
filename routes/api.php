<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('tasks', 'TaskController@getAll')->name('all-task');
Route::post('create', 'TaskController@create')->name('create-task');
Route::put('task/{id}', 'TaskController@update')->name('update-task');
Route::delete('task/{id}', 'TaskController@delete')->name('delete-task');
