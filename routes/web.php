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

//Auth::routes();

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/home' , 'BrincolinController')->middleware('auth')->middleware('verified');

Route::resource('/brincolin' , 'BrincolinController')->middleware('auth')->middleware('verified');

Route::resource('/categoria', 'CategoriaController')->only(['index', 'edit', 'update'])->middleware('auth')->parameters(['categoria' => 'categoria'])->middleware('verified');

Route::resource('/pedido', 'PedidoController')->middleware('auth')->parameters(['pedido' => 'pedido'])->middleware('verified');

Route::get('/mensaje' , 'MensajeController@sendMail')->middleware('auth')->middleware('verified');
//->middleware('auth')

