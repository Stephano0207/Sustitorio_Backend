<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('empleados',EmpleadoController::class);
Route::resource('departamentos',DepartamentoController::class);
Route::post("iniciarSesion",[UsuarioController::class,'login'])->name('usuario.loging');
Route::get("departamentos/grafico/total",[DepartamentoController::class,'graficar'])->name('departamento.graficar');
