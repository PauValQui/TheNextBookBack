<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ValoracionController;

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

Route::get('/', [LibroController::class, 'index']);

Route::get('/search/{info}', [LibroController::class, 'search']);

Route::get('/view/{info}', [LibroController::class, 'show']);

Route::post('/view', [ValoracionController::class, 'store']) -> name('valoracion.store');

Route::get('/login', function(){
    return view('login');
});

Route::get('/checkin', function(){
    return view('checkin');
});

Route::post('/checkin', [UsuarioController::class, 'store'])->name('checkin.store');

Route::get('/shopcart', function(){
    return view('shopcart');
});

Route::get('/contact', function(){
    return view('contact');
});
