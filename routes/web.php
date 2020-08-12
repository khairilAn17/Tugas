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

Route::get('/location','LocationController@index');
Route::get('/location/tambah','LocationController@tambah');
Route::post('/location/store','LocationController@store');
Route::get('/location/edit/{id}','LocationController@edit');
Route::post('/location/update','LocationController@update');
Route::get('/location/hapus/{id}','LocationController@hapus');

Route::get('/employe','EmployeController@index');
Route::get('/employe/tambah','EmployeController@tambah');
Route::post('/employe/store','EmployeController@store');
Route::get('/employe/edit/{id}','EmployeController@edit');
Route::post('/employe/update','EmployeController@update');
Route::get('/employe/hapus/{id}','EmployeController@hapus');

Route::get('/ulang','EmployeController@ulang');

Route::get('/employe/search/','EmployeController@search');
