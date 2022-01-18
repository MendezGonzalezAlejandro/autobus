<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Autobus\AutobusController;
use App\Http\Controllers\Chofer\ChoferController;

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



Route:: get('/','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@fecha');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Dirección del controlador autobus
Route:: get('Alta','App\Http\Controllers\Autobus\AutobusController@alta');
Route:: post('AltaP','App\Http\Controllers\Autobus\AutobusController@altaP');
Route:: get('Mostrar','App\Http\Controllers\Autobus\AutobusController@mostrar');
Route:: get('editarU/{id}','App\Http\Controllers\Autobus\AutobusController@editarU');
Route:: post('modificarAutobus','App\Http\Controllers\Autobus\AutobusController@modificarAutobus');
Route:: get('baja/{id}','App\Http\Controllers\Autobus\AutobusController@baja');


//Chofer

Route:: get('Chofer','App\Http\Controllers\Chofer\ChoferController@chofer');
Route:: post('AltaC','App\Http\Controllers\Chofer\ChoferController@altaC');
Route:: get('mostrarChofer','App\Http\Controllers\Chofer\ChoferController@mostrarChofer');
Route:: get('editarChofer/{id}','App\Http\Controllers\Chofer\ChoferController@editarChofer');
Route:: post('modificarChofer','App\Http\Controllers\Chofer\ChoferController@modificarChofer');
Route:: get('bajaChofer/{id}','App\Http\Controllers\Chofer\ChoferController@bajaChofer');


//Corrida
Route:: get('Corrida','App\Http\Controllers\Corrida\CorridaController@corrida');
Route:: post('AltaCorrida','App\Http\Controllers\Corrida\CorridaController@altaCorrida');
Route:: get('mostrarCorrida','App\Http\Controllers\Corrida\CorridaController@mostrarCorrida');
Route:: get('eliminarCorrida/{id}','App\Http\Controllers\Corrida\CorridaController@eliminarCorrida');


//DetalleReservación
Route:: post('prueba','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@prueba');
//Route:: get('editarF/{horaSalida}/{dia1}','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@editarF');
Route:: get('editarF/{horaSalida}','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@editarF');
Route:: get('formulario','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@formulario');
//Route:: post('modificarVenta','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@modificarVenta');
Route:: post('Compra','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@registrarV');
Route:: get('Boleto','App\Http\Controllers\DetalleReservacion\DetalleReservacionController@pdfVenta');



//Reservacion
Route:: get('Reservacion','App\Http\Controllers\Reservacion\ReservacionController@reservacion');
//Route:: post('Compra','App\Http\Controllers\Reservacion\ReservacionController@registrarV');


//Reporte
Route:: get('ReporteVista','App\Http\Controllers\Reporte\ReporteController@vista');
Route:: get('Autobus/pdf','App\Http\Controllers\Reporte\ReporteController@pdfAutobus');
Route:: get('Autobus/download','App\Http\Controllers\Reporte\ReporteController@pdfAutobusD');

Route:: get('Chofer/pdf','App\Http\Controllers\Reporte\ReporteController@pdfChofer');
Route:: get('Chofer/download','App\Http\Controllers\Reporte\ReporteController@pdfChoferD');

Route:: get('Corrida/pdf','App\Http\Controllers\Reporte\ReporteController@pdfCorrida');
Route:: get('Corrida/download','App\Http\Controllers\Reporte\ReporteController@pdfCorridaD');






