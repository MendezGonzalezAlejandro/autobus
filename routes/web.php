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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Dirección del controlador
Route:: get('Alta','App\Http\Controllers\Autobus\AutobusController@alta');
Route:: post('AltaP','App\Http\Controllers\Autobus\AutobusController@altaP');

Route:: get('Mostrar','App\Http\Controllers\Autobus\AutobusController@mostrar');

Route:: get('editarU/{id}','App\Http\Controllers\Autobus\AutobusController@editarU');
Route:: post('actU','App\Http\Controllers\Autobus\AutobusController@actU');

Route:: get('baja/{id}','App\Http\Controllers\Autobus\AutobusController@baja');

//Chofer

Route:: get('Chofer','App\Http\Controllers\Chofer\ChoferController@chofer');
Route:: post('AltaC','App\Http\Controllers\Chofer\ChoferController@altaC');
Route:: get('mostrarChofer','App\Http\Controllers\Chofer\ChoferController@mostrarChofer');

Route:: get('editarChofer/{id}','App\Http\Controllers\Chofer\ChoferController@editarChofer');


Route:: post('modificarChofer','App\Http\Controllers\Chofer\ChoferController@modificarChofer');
Route:: get('bajaChofer/{id}','App\Http\Controllers\Chofer\ChoferController@bajaChofer');
