<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetalleServicios;
use Illuminate\Support\Facades\Session;

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
    return view('inicio.index');
})->middleware('translate')->name('inicio');


Route::get('/servicios', function () {
    return view('secciones.servicios');
})->middleware('translate')->name('serviciosLista');


Route::get('/pacientes', function () {
    return view('secciones.pacientes');
})->middleware('translate')->name('pacientes');


Route::get('servicios/{servicio}', [DetalleServicios::class, 'index'])->middleware('translate')->name('servicios');

Route::get('/lang/{language}', function ($language) {
    Session::put('language',$language);
    return redirect()->back();
})->name('language');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
