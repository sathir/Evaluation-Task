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

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/task/create', 'TaskController@create_task')->name('CreateTask');
Route::get('/task/view', 'TaskController@view_task')->name('ViewTask');
Route::post('/task/create/confirm', 'TaskController@create_task_confirm')->name('CreateTaskConfirm');
