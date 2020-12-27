<?php

use App\Http\Controllers\CaracteristicasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ComputadoresController;
use App\Http\Controllers\EspecificacaosController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\TiposController;
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
    return view('entrada');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::resource('tipos', TiposController::class);
    Route::resource('marcas', MarcasController::class);
    Route::resource('caracteristicas', CaracteristicasController::class);
    Route::resource('especificacoes', EspecificacaosController::class);
    Route::resource('clientes', ClientesController::class);
    Route::resource('fornecedores', FornecedoresController::class);
    Route::resource('modelos', ModelosController::class);
    Route::resource('computadores', ComputadoresController::class);

});
