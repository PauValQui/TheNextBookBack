<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ValoracionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

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

Route::post('/search', [LibroController::class,'searchLetras'])->name('header.buscador');

Route::get('/view/{info}', [LibroController::class, 'show']);


Route::post('/view', [ValoracionController::class, 'store']) -> name('valoracion.store');

//Route::get('/login', function(){    return view('login');});

//Route::post('login', [UsuarioController::class, 'login']) -> name('login');

//Route::get('/checkin', function(){return view('checkin');});

//Route::post('/checkin', [UsuarioController::class, 'store'])->name('checkin.store');

Route::get('/shopcart', [CartController::class,'cart'])->name('cart.view');

Route::post('cart', [CartController::class,'add'])->name('cart.add');

Route::post('update', [CartController::class, 'update'])->name('cart.update');
Route::post('remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/contact', function(){return view('contact');});


Auth::routes();
