<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

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
    return view('home');
});

//index
Route::get('/home', function () {
    return view ("home");
});

//alumno1
Route::get('/alumno/alumno1', function () {
    return view ("alumno/alumno1");
});

//alumno2
Route::get('/alumno/alumno2', function () {
    return view ("alumno/alumno2");
});

//pedidos
Route::get('/crud/tpedido', function () {
    return view ("crud/tpedido");
});

//cliente
Route::get('/crud/tcliente', function () {
    return view ("crud/tcliente");
});

//articulo
Route::get('/crud/tarticulo', function () {
    return view ("crud/tarticulo");
});

