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

/////////////////Rutas para listado y carga de archivos

Route::get('archivo', function() {
    $archivos = App\Archivo::all();
    return view('archivos.archivoIndex', compact('archivos'));
});
Route::get('archivo/formulario', function() {
    return view('archivos.archivoForm');
});

Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');

Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');

Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');

//->middleware('auth')

