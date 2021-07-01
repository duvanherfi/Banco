<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferenciaController;
use App\Http\Controllers\CuentaController;
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

Route::redirect('/', '/inicio');

Route::get('/inicio', function () {
    return view('inicio');
})->middleware(['auth'])->name('inicio');

Route::get(
    '/cuentas',
    [CuentaController::class, 'index']
)->middleware(['auth'])->name('cuentas');

Route::get(
    '/transferencias',
    [TransferenciaController::class, 'index']
)->middleware(['auth'])->name('transferencias');

Route::get(
    '/transferencias/registrar',
    [TransferenciaController::class, 'create']
)->middleware(['auth'])->name('transferencia_registrar');

Route::post(
    '/transferencias/registrar',
    [TransferenciaController::class, 'store']
)->middleware(['auth'])->name('transferencia_guardar');

require __DIR__.'/auth.php';
