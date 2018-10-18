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

Route::get('/todos',[
    'uses'=>'TodosController@index',
    'as'=>'todos'
]);
Route::get('/todos/delete/{id}',[
    'uses'=>'TodosController@delete',
    'as'=>'todo.delete'
]);
Route::post('/todos/create',[
    'uses'=>'TodosController@create',
    'as'=>'todo.create'
]);
Route::get('/todos/complete/{id}',[
    'uses'=>'TodosController@complete',
    'as'=>'todo.complete'
]);
Route::get('/todos/update/{id}',[
    'uses'=>'TodosController@update',
    'as'=>'todo.update'
]);
Route::post('/todos/saveupdate/{id}',[
    'uses'=>'TodosController@saveupdate',
    'as'=>'todo.saveupdate'
]);
