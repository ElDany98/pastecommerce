<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('contenido');
});
Route::get('/contenido', function () {
    return view('contenido');
});
Route::get('/formulario', function () {
    return view('formulario');
});
Route::get('/todas_ord', function () {
    return view('ordenes_todas');
});
/* Route::get('/form', function () {
    return view('contenido');
})->name('orders');
Route::post('/orders',[OrdersController::class, 'store'])->name('orders'); */

Route::view("/registrar","registrar");
Route::post('/order',[OrdersController::class,'order']);

Route::get('/rastreo', function () {
    return view('rastreo');
});

