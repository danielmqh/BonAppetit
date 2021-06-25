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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('user-list-pdf',      'UserController@exportPdf')->name('users.pdf');
Route::get('user-list-excel',    'UserController@exportExcel')->name('users.excel');
Route::post('import-list-excel', 'UserController@importExcel')->name('users.import.excel');

Route::get('cliente-list-pdf',      'ClientesController@exportPdf')->name('clientes.pdf');

Route::get('reserva-list-pdf',      'ReservasController@exportPdf')->name('reservas.pdf');

Route::get('pedidos-list-pdf',      'PedidosController@exportPdf')->name('pedidos.pdf');

Route::get('proveedores-list-pdf',      'ProveedoresController@exportPdf')->name('proveedores.pdf');


Route::resource('proveedores', 'ProveedoresController');

Route::resource('mesas', 'MesasController');

Route::resource('turnos', 'TurnosController');

Route::resource('cargos', 'CargosController');

Route::resource('trabajadores', 'trabajadoresController');

Route::resource('tipo_bebidas', 'Tipo_bebidasController');

Route::resource('tipo_platos', 'Tipo_platosController');

Route::resource('bebidas', 'BebidasController');

Route::resource('platos', 'PlatoController');

Route::resource('batender', 'Bartender_bebidaController');

Route::resource('perfil', 'PerfilController');

Route::resource('clientes', 'ClientesController');

Route::resource('reservas', 'ReservasController');

Route::resource('horarioreservas', 'HorarioReservasController');

Route::resource('pedidos', 'pedidosController');

