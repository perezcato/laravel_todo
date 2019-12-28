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

Route::resource('todo', 'TodoController')->names([
    'create' => 'todo.create',
    'index' => 'todos',
    'edit' => 'todo.edit',
    'delete' => 'todo.delete',
    'update' => 'todo.update'
]);