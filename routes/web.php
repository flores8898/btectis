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


Route::get('/pliegos', function () {
    return view('pliegos');
});

Route::get('/vista', function () {
    return view('vista');
});

Route::get('/convocatoria', function () {
    return view('convocatoria');
});

Route::get('/registro', function () {
    return view('registro');
});
Route::get('formBootstrap', [FormController::class, 'index']);
Route::post('guardar', [FormController::class, 'guardar']);