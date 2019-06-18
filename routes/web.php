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
    return view('home');
});

Route::get('/blog','dashboard@blog')->name('blog');
Route::resource('projschaduling','projschadulingcontroller');
Route::resource('task','taskcontroller');
Route::resource('department','departcontroller');








Auth::routes();
Route::resource('project','projcontroller');


Route::get('/home', 'HomeController@index')->name('home');
