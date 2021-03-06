<?php

use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\GraficoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('diagnostico/fase1', [DiagnosticoController::class, 'index']);
Route::get('diagnostico/mdofa', [DiagnosticoController::class, 'mdofa']);
Route::get('diagnostico/{nit}/crear-dofa', [DiagnosticoController::class, 'mcrear']);
Route::get('diagnostico/{nit}/analisis', [DiagnosticoController::class, 'analisis']);
Route::get('diagnostico/individual', [DiagnosticoController::class, 'analisis_individual']);


Route::put('diagnostico/{nit}/mision', [DiagnosticoController::class, 'mision']);
Route::put('diagnostico/{nit}/vision', [DiagnosticoController::class, 'vision']);
Route::put('diagnostico/{nit}/objestrategico', [DiagnosticoController::class, 'objestrategico']);
Route::put('diagnostico/{nit}/perspectivacrecimientodesarrollo', [DiagnosticoController::class, 'perspectivacrecimientodesarrollo']);
Route::put('diagnostico/{nit}/perspectivacliente', [DiagnosticoController::class, 'perspectivacliente']);
Route::put('diagnostico/{nit}/perspectivaprocesosinternos', [DiagnosticoController::class, 'perspectivaprocesosinternos']);
Route::put('diagnostico/{nit}/perspectivafinanciera', [DiagnosticoController::class, 'perspectivafinanciera']);


Route::get('grafico/charts', [GraficoController::class, 'charts']);

Route::group(['middleware' => ['auth']], function(){
    Route::resource('usuario', UsuarioController::class);
    Route::resource('empresa', EmpresaController::class);
    Route::resource('encuesta', EncuestaController::class);
    Route::resource('diagnostico', DiagnosticoController::class);
    Route::resource('rol', RolController::class);
    Route::resource('grafico', GraficoController::class);
});
