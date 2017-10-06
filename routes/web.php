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

Route::resource('categoria', 'CategoriaController');

Route::resource('proveedor', 'ProveedorController');

Route::resource('producto', 'ProductoController');

Route::resource('venta', 'VentaController');

Route::resource('factura', 'FacturaController');

Route::resource('detalle', 'DetalleController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
