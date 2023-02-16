<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProfesorController;
use \App\Http\Controllers\ReservaController;
use \App\Http\Controllers\FechaController;
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

Route::get('/login', function () {
    return view('login');
});

Route::resource('profesores', ProfesorController::class);
Route::resource('fechas', FechaController::class);
Route::resource('reservas', ReservaController::class);

Route::put('/confirmar-reserva/{id}', [ReservaController::class, 'confirmar'])->name('reservas.confirmar');
Route::get('/reservas-pendientes', [ReservaController::class, 'pendientes'])->name('reservas.pendientes');
Route::get('/reservas-fecha/{id}', [ReservaController::class, 'reservasFecha'])->name('reservas.reservasFecha');


