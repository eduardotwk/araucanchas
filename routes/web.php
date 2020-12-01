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
Route::get('/1', function () {
    return view('registro');
});
//Route::get('/Create', function () {
 //   return view('cancha.create');
//});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Recinto', [App\Http\Controllers\RecintoController::class, 'index'])->name('recinto.index');
Route::get('/Recinto/Create', [App\Http\Controllers\RecintoController::class, 'create'])->name('recinto.create');
Route::post('/Recinto', [App\Http\Controllers\RecintoController::class, 'store'])->name('recinto.store');
Route::get('/Recinto/{value}/edit', [App\Http\Controllers\RecintoController::class, 'edit'])->name('recinto.edit');
Route::put('/Recinto/{value}', [App\Http\Controllers\RecintoController::class, 'update'])->name('recinto.update');
Route::delete('/Recinto/{value}', [App\Http\Controllers\RecintoController::class, 'destroy'])->name('recinto.destroy');
Route::get('/Recinto/{value}/show', [App\Http\Controllers\RecintoController::class, 'show'])->name('recinto.ahow');
//cancha
Route::get('/Recinto/Cancha', [App\Http\Controllers\CanchaController::class, 'index'])->name('cancha.index');
Route::get('/Recinto/Cancha/Create', [App\Http\Controllers\CanchaController::class, 'create'])->name('cancha.create');
Route::post('/Recinto/Cancha', [App\Http\Controllers\CanchaController::class, 'store'])->name('cancha.store');
Route::delete('/Recinto/Cancha/{cancha}', [App\Http\Controllers\CanchaController::class, 'destroy'])->name('cancha.destroy');
Route::get('/Recinto/Cancha/{cancha}/edit', [App\Http\Controllers\CanchaController::class, 'edit'])->name('cancha.edit');
Route::put('/Recinto/Cancha/{cancha}', [App\Http\Controllers\CanchaController::class, 'update'])->name('cancha.update');
//reserva
Route::get('/Recinto/Cancha/Reserva', [App\Http\Controllers\ReservaController::class, 'index'])->name('reserva.index');
Route::get('/Recinto/Cancha/Reserva/Create', [App\Http\Controllers\ReservaController::class, 'create'])->name('reserva.create');
Route::post('/Recinto/Cancha/Reserva', [App\Http\Controllers\ReservaController::class, 'store'])->name('reserva.store');
