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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user','App\Http\Controllers\ManagementUserController@index');

Route::get('/', 'App\Http\Controllers\PagesController@Home');
Route::get('/About', 'App\Http\Controllers\PagesController@About');
Route::get('/User','App\Http\Controllers\UserController@index');
Route::get('/User/Create','App\Http\Controllers\UserController@Create');
Route::get('/User/{id}','App\Http\Controllers\UserController@show');
Route::post('/User','App\Http\Controllers\UserController@store');



// Route::resource('user', 'App\Http\Controllers\ManagementUserController');