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

Route::redirect('/', '/inicio');

Route::get('/inicio', function () {
    return view('inicio');
})->middleware(['auth'])->name('inicio');

require __DIR__.'/auth.php';
