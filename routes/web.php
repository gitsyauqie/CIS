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
Route::get('/save-stage/{id}', 'LeadController@save_stage');

Route::get('/sf_project', 'LeadController@sf_project');
Route::get('/sf_budget_info', 'LeadController@sf_budget_info');
Route::get('/sf_document', 'LeadController@sf_document');
Route::get('/sf_soloffers', 'LeadController@sf_soloffers');
Route::get('/sf_act', 'LeadController@sf_act');




//Route::post('/store-soloffers', 'LeadController@store_soloffers');

//SOLUTION OFFERING
//  Add New Opportunity 
Route::get('/project/{sf_project_id}/{sf_opstage_id}', 'LeadController@add_edit_project');
Route::get('/budget-info/{sf_project_id}/{sf_opstage_id}', 'LeadController@add_edit_budget_info');
Route::get('/requirement/{sf_project_id}/{sf_opstage_id}', 'LeadController@add_edit_requirement');
Route::get('/soloffer/{sf_project_id}/{sf_opstage_id}', 'LeadController@add_edit_soloffer');
Route::get('/action-item/{sf_opstage_id}', 'LeadController@add_edit_action_item');
Route::get('/document/{sf_opstage_id}', 'LeadController@add_edit_document');

//   Store
Route::post('/store-project', 'LeadController@store_project');
Route::post('/store-budget-info', 'LeadController@store_budget_info');
Route::post('/store-requirement', 'LeadController@store_requirement');
Route::post('/store-soloffer', 'LeadController@store_soloffer');
Route::post('/store-action-item', 'LeadController@store_action_item');
Route::post('/store-document', 'LeadController@store_document');

//   Update
Route::put('/update-project', 'LeadController@update_project');
Route::put('/update-budget-info', 'LeadController@update_budget_info');
Route::put('/update-requirement', 'LeadController@update_requirement');
Route::put('/update-soloffer', 'LeadController@update_soloffer');
Route::put('/update-action-item', 'LeadController@update_action_item');
Route::put('/update-document', 'LeadController@update_document');


