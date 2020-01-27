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

Route::get('falan', function() {
    return App\TodoItem::all();
});

Route::get('todos', 'TodoItemController@index')->name('todos.all')->middleware(['auth']);

Route::get('todos/{todo}/togglecomplete', 'TodoItemController@toggle')->name('todos.toggle');

Route::post('todos','TodoItemController@store')->name('todos.store')->middleware(['auth']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
