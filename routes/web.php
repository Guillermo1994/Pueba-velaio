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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cosulta', [App\Http\Controllers\HomeController::class, 'consultaNombre'])->name('cosulta');

Route::get('/editar/{id}', [App\Http\Controllers\HomeController::class, 'editar'])->name('editar');

Route::put('/modificar/{id}', [App\Http\Controllers\HomeController::class, 'modificar'])->name('modificar');
