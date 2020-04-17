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
    $posts = App\Post::all();

    return view('welcome')->with('posts',$posts);
});

 
Route::resource('caja', 'CajaController');
//Route::resource('caja', 'MovimientopesoController');
Route::resource('cuenta', 'CuentaController');