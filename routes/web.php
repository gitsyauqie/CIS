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

Route::get('/', 'SalesPlanActivityController@index');

Auth::routes();

Route::get('/lead', 'LeadController@index');
Route::get('/kanban', 'LeadController@kanban');
Route::get('/add-new-lead', 'LeadController@create');
Route::post('/save-lead', 'LeadController@store');


