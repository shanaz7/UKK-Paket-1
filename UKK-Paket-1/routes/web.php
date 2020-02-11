<?php

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

Route::group(['prefix' => 'students'], function () {
    Route::get('/', 'StudentsController@index');
});

// Route Class
Route::get('/class','ClassController@index');
Route::get('/class/create','ClassController@create');
Route::post('/class/store','ClassController@store');
Route::get('/class/edit/{id}','ClassController@edit');
Route::post('/class/update/{id}','ClassController@update');
Route::get('/class/delete/{id}','ClassController@destroy');

// Route Payment Agrements
Route::get('/payment-agrement','PaymentAgrementController@index');
Route::get('/payment-agrement/create','PaymentAgrementController@create');
Route::post('/payment-agrement/store','PaymentAgrementController@store');
Route::get('/payment-agrement/edit/{id}','PaymentAgrementController@edit');
Route::post('/payment-agrement/update/{id}','PaymentAgrementController@update');
Route::get('/payment-agrement/delete/{id}','PaymentAgrementController@destroy');