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
    return view('inicio.index');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('inicio.index');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('inicio.index');
})->name('servicios');

Route::get('/acerca', function () {
    return view('inicio.index');
})->name('acerca');

Route::get('/landing-page', function () {
    return view('inicio.index');
})->name('landing-page');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
